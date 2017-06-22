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
class ProfilRepository
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
    public function findAll($userLogin)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('u.pseudonim', 'u.info', 'l.login', 'l.password')
            ->from('HearIt_uzytkownik', 'u')
            ->innerJoin('u', 'HearIt_login', 'l', 'l.uzytkownik_id = u.uzytkownik_id')
            ->where('l.login = :user')
            ->setParameter(':user', $userLogin,  \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }

    public function userVideo($userLogin)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('v.tytul', 'v.video_id')
            ->from('HearIt_video', 'v')
            ->join('v', 'HearIt_uzytkownik_has_HearIt_video', 'va', 'v.video_id = va.HearIt_video_video_id')
            ->join('va', 'HearIt_uzytkownik', 'a', 'va.HearIt_uzytkownik_uzytkownik_id=a.uzytkownik_id')
            ->innerJoin('a', 'HearIt_login', 'l', 'l.uzytkownik_id = a.uzytkownik_id')
            ->where('l.login = :user')
            ->groupBy('video_id', 'v.tytul')
            ->setParameter(':user', $userLogin,  \PDO::PARAM_STR);
        return $queryBuilder->execute()->fetchAll();
    }

    public function userPlaylist($userLogin)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('p.nazwa', 'p.playlista_id', 'a.pseudonim', 'x.HearIt_video_video_id', 'v.tytul', 'v.video_id')
            ->from('HearIt_playlista', 'p')
            ->innerJoin('p', 'HearIt_playlista_video', 'x', 'p.playlista_id=x.HearIt_playlista_playlista_id')
            ->innerJoin('x', 'HearIt_video', 'v', 'x.HearIt_video_video_id=v.video_id')
            ->join('v', 'HearIt_uzytkownik_has_HearIt_video', 'va', 'v.video_id = va.HearIt_video_video_id')
            ->join('va', 'HearIt_uzytkownik', 'a', 'va.HearIt_uzytkownik_uzytkownik_id=a.uzytkownik_id')
            ->join ('p', 'HearIt_uzytkownik_has_HearIt_playlista', 'up', 'up.HearIt_playlista_playlista_id=p.playlista_id')
            ->join ('up', 'HearIt_uzytkownik', 'u', 'up.HearIt_uzytkownik_uzytkownik_id=u.uzytkownik_id')
            ->join('u', 'HearIt_login', 'l', 'l.uzytkownik_id = u.uzytkownik_id')
            ->where('l.login = :user')
            ->groupBy('p.playlista_id', 'p.nazwa', 'a.pseudonim', 'v.video_id', 'x.HearIt_video_video_id', 'v.tytul' )
            ->setParameter(':user', $userLogin,  \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }

    public function playlist($userLogin)
    {
        $queryBuilder = $this->db->createQueryBuilder();


        $queryBuilder->select('p.playlista_id', 'u.pseudonim', 'p.nazwa')
            ->from('HearIt_playlista', 'p')
            ->join ('p', 'HearIt_uzytkownik_has_HearIt_playlista', 'up', 'up.HearIt_playlista_playlista_id=p.playlista_id')
            ->join ('up', 'HearIt_uzytkownik', 'u', 'up.HearIt_uzytkownik_uzytkownik_id=u.uzytkownik_id')
            ->innerJoin('u', 'HearIt_login', 'l', 'l.uzytkownik_id = u.uzytkownik_id')
            ->where('l.login = :user')
            ->groupBy('p.playlista_id', 'u.pseudonim', 'p.nazwa')
            ->setParameter(':user', $userLogin,  \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }

    public function userHighestScore($userLogin)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('v.video_id', 'v.tytul', 'AVG(o.ocena) as ocena', 'a.pseudonim')
            ->from('HearIt_video', 'v')
            ->join('v', 'HearIt_ocena_has_HearIt_video', 'vo', 'vo.HearIt_video_video_id = v.video_id')
            ->join('vo', 'HearIt_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
            ->join('v', 'HearIt_uzytkownik_has_HearIt_video', 'av', 'av.HearIt_video_video_id = v.video_id')
            ->join('av', 'HearIt_uzytkownik', 'a', 'av.HearIt_uzytkownik_uzytkownik_id=a.uzytkownik_id')
            ->innerJoin('a', 'HearIt_login', 'l', 'l.uzytkownik_id = a.uzytkownik_id')
            ->where('l.login = :user')
            ->groupBy('video_id', 'v.tytul', 'a.pseudonim')
            ->orderBy('ocena', 'desc')
            ->setParameter(':user', $userLogin,  \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }

}