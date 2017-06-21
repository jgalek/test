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
class HearItRepository
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
        $queryBuilder->select('video_id', 'tytul')
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
        $queryBuilder->select('rola', 'uzytkownik_id')
            ->from('hearit_uprawnienia')
            ->where('uzytkownik_id = :id')
            ->setParameter(':id', $id, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }

    public function highestScore()
    {
                    $queryBuilder = $this->db->createQueryBuilder();
            $queryBuilder->select('v.video_id', 'v.tytul', 'AVG(o.ocena) as ocena', 'a.pseudonim')
                ->from('hearit_video', 'v')
                ->join('v', 'hearit_uzytkownik_has_hearit_video', 'x', 'v.video_id = x.HearIt_video_video_id')
                ->join('x', 'hearit_uzytkownik', 'a', 'x.HearIt_uzytkownik_uzytkownik_id=a.uzytkownik_id')
                ->join('v', 'hearit_ocena_has_hearit_video', 'vo', 'v.video_id = vo.HearIt_video_video_id')
                ->join('vo', 'hearit_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
                ->groupBy('v.video_id')
                ->orderBy('ocena', 'desc');

            return $queryBuilder->execute()->fetchAll();

    }

    public function playlistByUser()
    {
        $queryBuilder = $this->db->createQueryBuilder();


        $queryBuilder->select('p.playlista_id', 'AVG(o.ocena) as ocena', 'p.nazwa', 'v.gatunek', 'v.tytul', 'v.video_id')
                ->from('hearit_playlista', 'p')
                ->join('p', 'hearit_playlista_video', 'x', 'x.HearIt_playlista_playlista_id=p.playlista_id')
                ->join('x', 'hearit_video', 'v', 'x.HearIt_video_video_id = v.video_id')
                ->join('p', 'hearit_ocena_has_hearit_playlista', 'po', 'po.HearIt_playlista_playlista_id = p.playlista_id')
                ->join('po', 'hearit_ocena', 'o', 'po.HearIt_ocena_ocena_id = o.ocena_id')
                ->groupBy('p.playlista_id')
                ->orderBy('ocena', 'desc');


        return $queryBuilder->execute()->fetchAll();
    }

    public function userPlaylist()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('p.playlista_id', 'x.HearIt_video_video_id', 'v.tytul')
            ->from('hearit_playlista', 'p')
            ->innerJoin('p', 'hearit_playlista_video', 'x', 'p.playlista_id=x.HearIt_playlista_playlista_id')
            ->innerJoin('x', 'hearit_video', 'v', 'x.HearIt_video_video_id=v.video_id')
            ->where('p.playlista_id = 0');

        return $queryBuilder->execute()->fetchAll();
    }

    public function playlistByGatunek()
    {

        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('COUNT(v.gatunek) as gatunek', 'v.tytul', 'o.ocena', 'v.video_id')
            ->from('hearit_video', 'v')
            ->join('v', 'hearit_ocena_has_hearit_video', 'vo', 'v.video_id = vo.HearIt_video_video_id')
            ->join('vo', 'hearit_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
            ->groupBy('v.video_id')
            ->orderBy('ocena');

        return $queryBuilder->execute()->fetchAll();
    }


    public function playlist()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('v.gatunek', 'v.tytul', 'AVG(o.ocena) as ocena', 'v.video_id')
            ->from('hearit_video', 'v')
            ->join('v', 'hearit_ocena_has_hearit_video', 'vo', 'v.video_id = vo.HearIt_video_video_id')
            ->join('vo', 'hearit_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
            ->groupBy('v.gatunek')
            ->orderBy('ocena');

        return $queryBuilder->execute()->fetchAll();



    }

}