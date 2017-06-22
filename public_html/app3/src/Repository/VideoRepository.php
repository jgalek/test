<?php
// ...
namespace Repository;

use Doctrine\DBAL\Connection;


class VideoRepository
{
    protected $db;

// ...
    /**
     * Save record.
     *
     * @param array $photo Photo
     *
     * @return boolean Result
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    public function save($video, $userLogin)
    {
        dump($video);
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder
            ->insert('HearIt_video')
            ->setValue('tytul', '?')
            ->setValue('video', '?')
            ->setParameter(0, $video['title'])
            ->setParameter(1, $video['video'])
        ;
        $queryBuilder->execute();
        $qB = $this->db->createQueryBuilder();
        $qB->select('uzytkownik_id')
                    ->from('HearIt_login')
                    ->where('login = :login')
                    ->setParameter(':login', $userLogin, \PDO::PARAM_INT);
        $result = $qB->execute()->fetch();

        $qB2 = $this->db->createQueryBuilder();
        $qB2->select('video_id')
            ->from('HearIt_video')
            ->where('tytul = :title')
            ->setParameter(':title', $video['title'], \PDO::PARAM_INT);
        $result2 = $qB2->execute()->fetch();
        dump($result['uzytkownik_id']);
        //dump($result2['video_id']);


        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder
            ->insert('hearit_uzytkownik_has_HearIt_video')
            ->setValue('HearIt_video_video_id', '?')
            ->setValue('HearIt_uzytkownik_uzytkownik_id', '?')
            ->setValue('HearIt_uzytkownik_HearIt_login_uzytkownik_id', '?')
            ->setParameter(0, $result2['video_id'])
            ->setParameter(1, $result['uzytkownik_id'])
            ->setParameter(2, $result['uzytkownik_id'])
        ;
        ;
        return  $queryBuilder->execute();

            //dump($video['name']);
            //return $this->db->insert('hearit_video', $video['name']);
    }
    public function add($userLogin)
    {
        //dump($userLogin);
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder
            ->insert('HearIt_video')
            ->setValue('tytul', '?')
            ->setParameter(0, $video['title'])
        ;

        return $queryBuilder->execute();
        //dump($video['name']);
        //return $this->db->insert('hearit_video', $video['name']);
    }

    public function userVideo($userLogin)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('v.tytul', 'v.video_id')
            ->from('HearIt_video', 'v')
            ->join('v', 'HearIt_uzytkownik_has_HearIt_video', 'va', 'v.video_id = va.HearIt_video_video_id')
            ->join('va', 'HearIt_uzytkownik', 'a', 'va.HearIt_uzytkownik_uzytkownik_id=a.uzytkownik_id')
            ->join('a', 'HearIt_login', 'l', 'a.uzytkownik_id = l.uzytkownik_id')
            ->groupBy('v.tytul', 'v.video_id')
            ->where('l.login = :user')
            ->setParameter(':user', $userLogin, \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }

    protected function queryAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('v.video_id', 'v.tytul')
            ->from('HearIt_video', 'v');
    }

    public function findOneById($id)
    {
        $queryBuilder = $this->queryAll();
        $queryBuilder->where('v.video_id = :id')
            ->setParameter(':id', $id);
        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }

    public function findAll($userLogin)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('pseudonim', 'info')
            ->from('HearIt_uzytkownik')
            ->where('pseudonim = :user')
            ->setParameter(':user', $userLogin,  \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }

    public function delete($video)
    {
        dump($video['video_id']);

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->delete ('HearIt_uzytkownik_has_HearIt_video')
            ->where ('HearIt_video_video_id = :id')
            ->setParameter(':id', $video['video_id']);
        $queryBuilder->execute();


        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->delete ('HearIt_komentarz_has_HearIt_video')
            ->where ('HearIt_video_video_id = :id')
            ->setParameter(':id', $video['video_id']);
        $queryBuilder->execute();

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->delete ('HearIt_ocena_has_HearIt_video')
            ->where ('HearIt_video_video_id = :id')
            ->setParameter(':id', $video['video_id']);
        $queryBuilder->execute();

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->delete ('HearIt_video')
            ->where ('video_id = :id')
            ->setParameter(':id', $video['video_id']);
        $queryBuilder->execute();

        return $this->db->delete('HearIt_video', ['video_id' => $video['video_id']]);
    }

// ...
}