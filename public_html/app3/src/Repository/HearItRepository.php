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
            ->from('HearIt_video');

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
            ->from('HearIt_uprawnienia')
            ->where('uzytkownik_id = :id')
            ->setParameter(':id', $id, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }

    public function highestScore()
    {
                    $queryBuilder = $this->db->createQueryBuilder();
            $queryBuilder->select('v.video_id', 'v.tytul', 'AVG(o.ocena) as ocena', 'a.pseudonim')
                ->from('HearIt_video', 'v')
                ->join('v', 'HearIt_uzytkownik_has_HearIt_video', 'x', 'v.video_id = x.HearIt_video_video_id')
                ->join('x', 'HearIt_uzytkownik', 'a', 'x.HearIt_uzytkownik_uzytkownik_id = a.uzytkownik_id')
                ->join('a', 'HearIt_login', 'l', 'a.uzytkownik_id = l.uzytkownik_id')
                ->join('v', 'HearIt_ocena_has_HearIt_video', 'vo', 'v.video_id = vo.HearIt_video_video_id')
                ->join('vo', 'HearIt_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
                ->groupBy('v.video_id', 'v.tytul', 'a.pseudonim')
                ->orderBy('ocena', 'desc')
                ;

            return $queryBuilder->execute()->fetchAll();

    }

    public function playlistByUser()
    {
        $queryBuilder = $this->db->createQueryBuilder();


        $queryBuilder->select('p.playlista_id', 'AVG(o.ocena) as ocena', 'p.nazwa')
                ->from('HearIt_playlista', 'p')
                ->join('p', 'HearIt_playlista_video', 'x', 'x.HearIt_playlista_playlista_id=p.playlista_id')
                ->join('x', 'HearIt_video', 'v', 'x.HearIt_video_video_id = v.video_id')
                ->join('p', 'HearIt_ocena_has_HearIt_playlista', 'po', 'po.HearIt_playlista_playlista_id = p.playlista_id')
                ->join('po', 'HearIt_ocena', 'o', 'po.HearIt_ocena_ocena_id = o.ocena_id')
                ->groupBy('p.playlista_id', 'p.nazwa')
                ->orderBy('ocena', 'desc');


        return $queryBuilder->execute()->fetchAll();
    }

    public function userPlaylist()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('p.playlista_id', 'x.HearIt_video_video_id', 'v.tytul')
            ->from('HearIt_playlista', 'p')
            ->innerJoin('p', 'HearIt_playlista_video', 'x', 'p.playlista_id=x.HearIt_playlista_playlista_id')
            ->innerJoin('x', 'HearIt_video', 'v', 'x.HearIt_video_video_id=v.video_id')
            ->where('p.playlista_id = 0');

        return $queryBuilder->execute()->fetchAll();
    }

    public function playlistByGatunek()
    {

        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('COUNT(v.gatunek) as gatunek', 'v.tytul', 'v.video_id')
            ->from('HearIt_video', 'v')
            ->join('v', 'HearIt_ocena_has_HearIt_video', 'vo', 'v.video_id = vo.HearIt_video_video_id')
            ->join('vo', 'HearIt_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
            ->groupBy('v.video_id', 'v.tytul')
            ;

        return $queryBuilder->execute()->fetchAll();
    }


    public function playlist()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('v.gatunek', 'AVG(o.ocena) as ocena')
            ->from('HearIt_video', 'v')
            ->join('v', 'HearIt_ocena_has_HearIt_video', 'vo', 'v.video_id = vo.HearIt_video_video_id')
            ->join('vo', 'HearIt_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
            ->groupBy('v.gatunek')
            ->orderBy('ocena');

        return $queryBuilder->execute()->fetchAll();



    }

}