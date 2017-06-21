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
            ->insert('hearit_video')
            ->setValue('tytul', '?')
            ->setValue('video', '?')
            ->setParameter(0, $video['title'])
            ->setParameter(1, $video['video'])
        ;
        $queryBuilder->execute();
        $qB = $this->db->createQueryBuilder();
        $qB->select('autor_id')
                    ->from('hearit_autor')
                    ->where('pseudonim = :login')
                    ->setParameter(':login', $userLogin, \PDO::PARAM_INT);
        $result = $qB->execute()->fetch();

        $qB2 = $this->db->createQueryBuilder();
        $qB2->select('video_id')
            ->from('hearit_video')
            ->where('tytul = :title')
            ->setParameter(':title', $video['title'], \PDO::PARAM_INT);
        $result2 = $qB2->execute()->fetch();
        dump($result['autor_id']);
        dump($result2['video_id']);


        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder
            ->insert('hearit_autor_has_hearit_video')
            ->setValue('HearIt_video_video_id', '?')
            ->setValue('HearIt_autor_autor_id', '?')
            ->setParameter(0, $result2['video_id'])
            ->setParameter(1, $result['autor_id']);
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
            ->insert('hearit_video')
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

        $queryBuilder->select('v.tytul', 'AVG(o.ocena) as ocena', 'v.video_id')
            ->from('hearit_video', 'v')
            ->join('v', 'hearit_video_has_hearit_ocena', 'vo', 'v.video_id = vo.HearIt_video_video_id')
            ->join('vo', 'hearit_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
            ->join('v', 'hearit_autor_has_hearit_video', 'va', 'v.video_id = va.HearIt_video_video_id')
            ->join('va', 'hearit_autor', 'a', 'va.HearIt_autor_autor_id=a.autor_id')
            ->join('a', 'hearit_uzytkownik', 'u', 'a.pseudonim=u.pseudonim')
            ->groupBy('v.tytul')
            ->where('u.pseudonim = :user')
            ->setParameter(':user', $userLogin, \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }

    protected function queryAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('v.video_id', 'v.tytul')
            ->from('hearit_video', 'v');
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
            ->from('hearit_uzytkownik')
            ->where('pseudonim = :user')
            ->setParameter(':user', $userLogin,  \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }

    public function delete($video)
    {
        dump($video['video_id']);

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->delete ('hearit_autor_has_hearit_video')
            ->where ('HearIt_video_video_id = :id')
            ->setParameter(':id', $video['video_id']);
        $queryBuilder->execute();


        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->delete ('hearit_komentarz_has_hearit_video')
            ->where ('HearIt_video_video_id = :id')
            ->setParameter(':id', $video['video_id']);
        $queryBuilder->execute();

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->delete ('hearit_video_has_hearit_ocena')
            ->where ('HearIt_video_video_id = :id')
            ->setParameter(':id', $video['video_id']);
        $queryBuilder->execute();

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->delete ('hearit_video')
            ->where ('video_id = :id')
            ->setParameter(':id', $video['video_id']);
        $queryBuilder->execute();

        return $this->db->delete('hearit_video', ['video_id' => $video['video_id']]);
    }

// ...
}