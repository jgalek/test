<?php
/**
 * Tag repository.
 */
namespace Repository;

use Doctrine\DBAL\Connection;
use Utils\Paginator;


/**
 * Class TagRepository.
 *
 * @package Repository
 */
class RegisterRepository
{
    /**
     * Number of items per page.
     *
     * const int NUM_ITEMS
     */
    const NUM_ITEMS = 1;

    /**
     * Doctrine DBAL connection.
     *
     * @var \Doctrine\DBAL\Connection $db
     */
    protected $db;


    /**
     * TagRepository constructor.
     *
     * @param \Doctrine\DBAL\Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Fetch all records.
     *
     * @return array Result
     */
    public function findAll()
    {
        $queryBuilder = $this->queryAll();

        return $queryBuilder->execute()->fetchAll();
    }

    /**
     * Get records paginated.
     *
     * @param int $page Current page number
     *
     * @return array Result
     */
    public function findAllPaginated($page = 1)
    {
        $countQueryBuilder = $this->queryAll()
            ->select('COUNT(DISTINCT t.id) AS total_results')
            ->setMaxResults(1);

        $paginator = new Paginator($this->queryAll(), $countQueryBuilder);
        $paginator->setCurrentPage($page);
        $paginator->setMaxPerPage(self::NUM_ITEMS);

        return $paginator->getCurrentPageResults();
    }

    /**
     * Find one record.
     *
     * @param string $id Element id
     *
     * @return array|mixed Result
     */
    public function findOneById($id)
    {
        $queryBuilder = $this->queryAll();
        $queryBuilder->where('t.video_id = :id')
            ->setParameter(':id', $id);
        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }

    /**
     * Query all records.
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder Result
     */
    protected function queryAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('t.video_id', 't.tytul')
            ->from('hearit_video', 't');
    }

    public function edit($register, $userLogin, $app)
    {

        $login = ($register['login']);
        $password = ($app['security.encoder.bcrypt']->encodePassword($register['password'], ''));
        //$password = $register['password'];
            //$app['security.encoder.bcrypt']->encodePassword($register['password']);
        //dump($password);
        $pseudonim = ($register['pseudonim']);
        $name = ($register['name']);
        $surname = ($register['surname']);
        //dump($register['birthday[date]']);
        $info = ($register['info']);
        $age = ($register['age']);


        $qB = $this->db->createQueryBuilder();
        $qB
            ->select('u.uzytkownik_id as id')
            ->from('hearit_uzytkownik', 'u')
            ->join('u', 'hearit_login', 'l', 'u.uzytkownik_id = l.uzytkownik_id')
            ->where('l.login = :user')
            ->setParameter(':user', $userLogin, \PDO::PARAM_STR)
        ;
        $id = $qB->execute()->fetch();
        dump($id['id']);

        $id = $id['id'] + 0;

        if ($login != null) {
            // update record

            $qB = $this->db->createQueryBuilder();
            $qB
                ->update('hearit_login')
                ->set('login', '?')
                ->where('uzytkownik_id = ?')
                ->setParameter(0, $login, \PDO::PARAM_STR)
                ->setParameter(1, $id, \PDO::PARAM_INT);
            $qB->execute();
        }
        if ($password != null) {

            $qB = $this->db->createQueryBuilder();
            $qB
                ->update('hearit_login')
                ->set('password', '?')
                ->where('uzytkownik_id = ?')
                ->setParameter(0, $password)
                ->setParameter(1, $id, \PDO::PARAM_INT);
           $qB->execute();
        }

        if ($pseudonim != null) {
            // update record
            $qB = $this->db->createQueryBuilder();
            $qB
                ->update('hearit_uzytkownik')
                ->set('pseudonim', '?')
                ->where('uzytkownik_id = ?')
                ->setParameter(0, $pseudonim, \PDO::PARAM_STR)
                ->setParameter(1, $id, \PDO::PARAM_INT);
            $qB->execute();
        }

        if ($name != null) {
            // update record
            $qB = $this->db->createQueryBuilder();
            $qB
                ->update('hearit_uzytkownik')
                ->set('imie', '?')
                ->where('uzytkownik_id = ?')
                ->setParameter(0, $name, \PDO::PARAM_STR)
                ->setParameter(1, $id, \PDO::PARAM_INT);
            $qB->execute();
        }

        if ($surname != null) {
            // update record
            $qB = $this->db->createQueryBuilder();
            $qB
                ->update('hearit_uzytkownik')
                ->set('nazwisko', '?')
                ->where('uzytkownik_id = ?')
                ->setParameter(0, $surname, \PDO::PARAM_STR)
                ->setParameter(1, $id, \PDO::PARAM_INT);
            $qB->execute();

        }

        if ($info != null) {
            // update record
            $qB = $this->db->createQueryBuilder();
            $qB
                ->update('hearit_uzytkownik')
                ->set('info', '?')
                ->where('uzytkownik_id = ?')
                ->setParameter(0, $info, \PDO::PARAM_STR)
                ->setParameter(1, $id, \PDO::PARAM_INT);
            $qB->execute();
        }

        if ($age != null) {
            // update record
            $qB = $this->db->createQueryBuilder();
            $qB
                ->update('hearit_uzytkownik')
                ->set('wiek', '?')
                ->where('uzytkownik_id = ?')
                ->setParameter(0, $age, \PDO::PARAM_STR)
                ->setParameter(1, $id, \PDO::PARAM_INT);
            $qB->execute();
        }
            return '';
    }


    public function save($register, $app)
    {

        dump($register);

        $password = ($app['security.encoder.bcrypt']->encodePassword($register['password'], ''));
        //dump($register);
        $login = ($register['login']);
        //$password = $register['password'];
            //($app['security.encoder.bcrypt']->encodePassword($register['password']));
        $pseudonim = ($register['pseudonim']);
        $name = ($register['name']);
        $surname = ($register['surname']);
        //dump($register['birthday[date]']);
        $info = ($register['info']);
        $age = ($register['age']);
        dump($password);

        if ($register['login'] !==null && $register['pseudonim'] !== null && $register['password'] !==null) {
            $queryBuilder = $this->db->createQueryBuilder();
            $queryBuilder
                ->insert('hearit_uprawnienia')
                ->setValue('rola', '?')
                ->setParameter(0, 'user')
            ;
            $queryBuilder->execute();

            $qB = $this->db->createQueryBuilder();
            $qB
                ->select('MAX(uzytkownik_id) as id')
                ->from('hearit_uprawnienia');
            $result = $qB->execute()->fetch();

            $queryBuilder = $this->db->createQueryBuilder();
            $queryBuilder
                ->insert('hearit_login')
                ->setValue('login', '?')
                ->setValue('password', '?')
                ->setValue('HearIt_uprawnienia_uzytkownik_id', '?')
                ->setParameter(0, $login)
                ->setParameter(1, $password)
                ->setParameter(2, $result['id'], \PDO::PARAM_INT);
            $queryBuilder->execute();


            $qB2 = $this->db->createQueryBuilder();
            $qB2
                ->select('MAX(uzytkownik_id) as id')
                ->from('hearit_login');
            $result2 = $qB2->execute()->fetch();

            $queryBuilder = $this->db->createQueryBuilder();
            $queryBuilder
                ->insert('hearit_uzytkownik')
                ->setValue('pseudonim', '?')
                ->setValue('imie', '?')
                ->setValue('nazwisko', '?')
                ->setValue('info', '?')
                ->setValue('wiek', '?')
                ->setValue('HearIt_login_uzytkownik_id', '?')
                ->setParameter(0, $pseudonim)
                ->setParameter(1, $name)
                ->setParameter(2, $surname)
                ->setParameter(3, $info)
                ->setParameter(4, $age)
                ->setParameter(5, $result2['id'], \PDO::PARAM_INT)
            ;
            $queryBuilder->execute();

            $qB3 = $this->db->createQueryBuilder();
            $qB3
                ->select('MAX(uzytkownik_id) as id')
                ->from('hearit_uzytkownik');
            $result3 = $qB3->execute()->fetch();

            return '';

        }
    }
    public function delete($tag)
    {
        return $this->db->delete('si_tags', ['id' => $tag['id']]);
    }
}