<?php
/**
 * Tag repository.
 */
namespace Repository;

use Doctrine\DBAL\Connection;

/**
 * Class HearItRepository.
 *
 * @package Repository
 */
class PlayRepository
{
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
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('video_id', 'tytul', 'v.video')
            ->from('hearit_video');

        return $queryBuilder->execute()->fetchAll();
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
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('DISTINCT v.video_id', 'v.tytul', 'v.video', 'AVG(o.ocena) as ocena', 'u.pseudonim')
            ->from('hearit_video', 'v')
            ->Join('v', 'hearit_ocena_has_hearit_video', 'vo', 'v.video_id = vo.HearIt_video_video_id')
            ->Join('vo', 'hearit_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
            ->Join('v', 'hearit_uzytkownik_has_hearit_video', 'vu', 'vu.HearIt_video_video_id=v.video_id')
            ->Join('vu', 'hearit_uzytkownik', 'u', 'vu.HearIt_uzytkownik_uzytkownik_id=u.uzytkownik_id')
            ->where('v.video_id = :id')
            ->setParameter(':id', $id, \PDO::PARAM_INT)
            ->setMaxResults(1);
        return $queryBuilder->execute()->fetchAll();

    }

    public function comments($id)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('distinct(v.video_id)', 'v.video', 'v.tytul', 'k.komentarz_id', 'k.tresc', 'u.pseudonim')
            ->from('hearit_video', 'v')
            ->join('v', 'hearit_komentarz_has_hearit_video', 'z', 'v.video_id = z.HearIt_video_video_id')
            ->join('z', 'hearit_komentarz', 'k', 'z.HearIt_komentarz_komentarz_id=k.komentarz_id')
            ->join('k', 'hearit_uzytkownik_has_hearit_komentarz', 'y', 'y.HearIt_komentarz_komentarz_id=k.komentarz_id')
            ->join('y', 'hearit_uzytkownik', 'u', 'y.HearIt_uzytkownik_uzytkownik_id= u.uzytkownik_id')
            ->groupBy('k.komentarz_id')
            ->where('v.video_id = :id')
            ->setParameter(':id', $id, \PDO::PARAM_INT);
        return $queryBuilder->execute()->fetchAll();

    }


    public function highestScore()
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('v.video_id', 'v.video', 'v.tytul', 'o.ocena')
            ->from('hearit_video', 'v')
            ->join('v', 'hearit_ocena_has_hearit_video', 'vo', 'v.video_id = vo.HearIt_video_video_id')
            ->join('vo', 'hearit_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
            ->orderBy('v.ocena', 'desc');

        return $queryBuilder->execute()->fetchAll();
    }

    public function playlistByUser()
    {
        $queryBuilder = $this->db->createQueryBuilder();


        $queryBuilder->select('p.playlista_id', 'o.ocena', 'p.nazwa', 'v.gatunek', 'v.tytul', 'v.video')
            ->from('hearit_playlista', 'p')
            ->join('p', 'hearit_playlista_video', 'x', 'x.HearIt_playlista_playlista_id=p.playlista_id')
            ->join('p', 'hearit_ocena_has_hearit_playlista', 'po', 'po.HearIt_playlista_playlista_id = p.playlista_id')
            ->join('po', 'hearit_ocena', 'o', 'po.HearIt_ocena_ocena_id = o.ocena_id')
            ->join('x', 'hearit_video', 'v', 'x.HearIt_video_video_id = v.video_id')
            ->groupBy('p.playlista_id')
            ->orderBy('p.ocena', 'desc');


        return $queryBuilder->execute()->fetchAll();
    }

    public function userPlaylist()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('p.playlista_id', 'x.HearIt_video_video_id', 'v.tytul', 'v.video')
            ->from('hearit_playlista', 'p')
            ->join('p', 'hearit_ocena_has_hearit_playlista', 'po', 'po.HearIt_playlista_playlista_id = p.playlista_id')
            ->join('po', 'hearit_ocena', 'o', 'po.HearIt_ocena_ocena_id = o.ocena_id')
            ->innerJoin('p', 'hearit_playlista_video', 'x', 'p.playlista_id=x.HearIt_playlista_playlista_id')
            ->innerJoin('x', 'hearit_video', 'v', 'x.HearIt_video_video_id=v.video_id')
            ->where('p.playlista_id = 1');

        return $queryBuilder->execute()->fetchAll();
    }

    public function playlistByGatunek()
    {

        $gatunek='pop';

        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('v.gatunek', 'v.tytul', 'v.video')
            ->from('hearit_video', 'v')
            ->where('v.gatunek=:gatunek')
            ->setParameter(':gatunek', '%'.$gatunek.'%');

        return $queryBuilder->execute()->fetchAll();
    }


    public function playlist()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('v.gatunek', 'v.tytul', 'v.video')
            ->from('hearit_video', 'v')
            ->groupBy('v.gatunek');

        return $queryBuilder->execute()->fetchAll();
    }

    public function save($tresc, $id, $userLogin, $ocena)
    {
        //dump($id);
        //dump($userLogin);
        //dump($userLogin);
        //dump($ocena);
        if($tresc != null || $ocena !=null) {
            $qB = $this->db->createQueryBuilder();
            $qB->select('uzytkownik_id')
                ->from('hearit_uzytkownik')
                ->where('pseudonim = :nazwaU')
                ->setParameter(':nazwaU', $userLogin);
            $result = $qB->execute()->fetch();

            //dump($result['autor_id'] + 0);
            //dump($tresc);

            if($tresc!=null) {
                $queryBuilder = $this->db->createQueryBuilder();
                $queryBuilder
                    ->insert('hearit_komentarz')
                    ->setValue('tresc', '?')
                    ->setParameter(0, $tresc);
                $queryBuilder->execute();

                $qB2 = $this->db->createQueryBuilder();
                $qB2->select('MAX(komentarz_id) as id')
                    ->from('hearit_komentarz');
                $result2 = $qB2->execute()->fetch();
                //dump($id + 0);
                //dump($result2['id'] + 0);


                $queryBuilder = $this->db->createQueryBuilder();
                $queryBuilder->insert('hearit_komentarz_has_hearit_video')
                    ->setValue('HearIt_video_video_id', '?')
                    ->setValue('HearIt_komentarz_komentarz_id', '?')
                    ->setParameter(0, $id, \PDO::PARAM_INT)
                    ->setParameter(1, $result2['id'], \PDO::PARAM_INT);
                $queryBuilder->execute();

                $queryBuilder = $this->db->createQueryBuilder();
                $queryBuilder->insert('hearit_uzytkownik_has_hearit_komentarz')
                    ->setValue('HearIt_uzytkownik_uzytkownik_id', '?')
                    ->setValue('HearIt_uzytkownik_HearIt_login_uzytkownik_id', '?')
                    ->setValue('HearIt_komentarz_komentarz_id', '?')
                    ->setParameter(0, $result['uzytkownik_id'], \PDO::PARAM_INT)
                    ->setParameter(1, $result['uzytkownik_id'], \PDO::PARAM_INT)
                    ->setParameter(2, $result2['id'], \PDO::PARAM_INT);
                $queryBuilder->execute();
            }
            if($ocena!=null){
                $queryBuilder = $this->db->createQueryBuilder();
                $queryBuilder
                    ->insert('hearit_ocena')
                    ->setValue('ocena', '?')
                    ->setParameter(0, $ocena);
                $queryBuilder->execute();

                $qB2 = $this->db->createQueryBuilder();
                $qB2->select('MAX(ocena_id) as id')
                    ->from('hearit_ocena');
                $result2 = $qB2->execute()->fetch();
                dump($id + 0);
                dump($result2['id'] + 0);

                $queryBuilder = $this->db->createQueryBuilder();
                $queryBuilder->insert('hearit_ocena_has_hearit_video')
                    ->setValue('HearIt_video_video_id', '?')
                    ->setValue('HearIt_ocena_ocena_id', '?')
                    ->setParameter(0, $id, \PDO::PARAM_INT)
                    ->setParameter(1, $result2['id'], \PDO::PARAM_INT);
                $queryBuilder->execute();

                $queryBuilder = $this->db->createQueryBuilder();
                $queryBuilder->insert('hearit_uzytkownik_has_hearit_ocena')
                    ->setValue('HearIt_uzytkownik_uzytkownik_id', '?')
                    ->setValue('HearIt_uzytkownik_HearIt_login_uzytkownik_id', '?')
                    ->setValue('HearIt_ocena_ocena_id', '?')
                    ->setParameter(0, $result['uzytkownik_id'], \PDO::PARAM_INT)
                    ->setParameter(1, $result['uzytkownik_id'], \PDO::PARAM_INT)
                    ->setParameter(2, $result2['id'], \PDO::PARAM_INT);
                $queryBuilder->execute();
            }


            return '';
        }

    }
}