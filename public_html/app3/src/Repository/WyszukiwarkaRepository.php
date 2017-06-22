<?php
/**
 * Profil repository.
 */
namespace Repository;

use Doctrine\DBAL\Connection;

/**
 * Class TagRepository.
 *
 * @package Repository
 */
class WyszukiwarkaRepository
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
    public function findAll($autor)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        if (!(empty($autor))) {
            $queryBuilder = $this->db->createQueryBuilder();
            $queryBuilder->select('v.video_id', 'v.tytul', 'AVG(o.ocena) as ocena', 'a.pseudonim', 'v.gatunek', 't.tagi', 'v.temat')
                ->from('HearIt_video', 'v')
                ->join('v', 'HearIt_ocena_has_HearIt_video', 'vo', 'v.video_id = vo.HearIt_video_video_id')
                ->join('vo', 'HearIt_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
                ->join('v', 'HearIt_uzytkownik_has_HearIt_video', 'av', 'av.HearIt_video_video_id = v.video_id')
                ->join('av', 'HearIt_uzytkownik', 'a', 'av.HearIt_uzytkownik_uzytkownik_id=a.uzytkownik_id')
                ->join('v', 'HearIt_tagi_has_HearIt_video', 'vt', 'vt.HearIt_video_video_id = v.video_id')
                ->join('vt', 'HearIt_tagi', 't', 't.tag_id = vt.HearIt_tagi_tag_id')
                ->addGroupBy('v.video_id', 'v.tytul', 'ocena', 'a.pseudonim', 'v.gatunek', 't.tagi', 'v.temat')
            ->where(
                    $queryBuilder->expr()->orX(
                        $queryBuilder->expr()->like('a.pseudonim', "'%$autor%'"),
                        $queryBuilder->expr()->like('v.tytul', "'%$autor%'"),
                        $queryBuilder->expr()->like('t.tagi', "'%$autor%'"),
                        $queryBuilder->expr()->like('v.gatunek', "'%$autor%'"),
                        $queryBuilder->expr()->like('v.temat', "'%$autor%'")
                    )
                );
        }
        /*$queryBuilder
            ->select('video_id', 'tytul')
            ->from('hearit_video')
            ->where(
                $queryBuilder->expr()->orX(
                    $queryBuilder->expr()->like('video_id', '2'),
                    $queryBuilder->expr()->like('tytul', "'$autor'")
                )
            );
       if (!(empty($autor))) {
            $queryBuilder = $this->db->createQueryBuilder();
            $queryBuilder->select('v.video_id', 'v.tytul', 'o.ocena', 'a.pseudonim')
                ->from('hearit_video', 'v')
                ->join('v', 'hearit_video_has_hearit_ocena', 'vo', 'v.video_id = vo.HearIt_video_video_id')
                ->join('vo', 'hearit_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
                ->join('v', 'hearit_autor_has_hearit_video', 'av', 'av.HearIt_video_video_id = v.video_id')
                ->join('av', 'hearit_autor', 'a', 'av.HearIt_autor_autor_id=a.autor_id')
                ->andWhere('a.pseudonim', ':user')
                ->setParameter('user', $autor);
        }*/

            return $queryBuilder->execute()->fetchAll();
        }



    public function userVideo()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('v.tytul', 'AVG(o.ocena) as ocena')
            ->from('HearIt_video')
            ->join('v', 'HearIt_ocena_has_HearIt_video', 'vo', 'v.video_id = vo.HearIt_video_video_id')
            ->join('vo', 'HearIt_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
            ->groupBy('ocena', 'tytul');

        return $queryBuilder->execute()->fetchAll();
    }

}