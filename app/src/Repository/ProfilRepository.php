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
        $queryBuilder->select('u.pseudonim', 'u.info', 'l.login')
            ->from('hearit_uzytkownik', 'u')
            ->innerJoin('u', 'hearit_login', 'l', 'l.uzytkownik_id = u.uzytkownik_id')
            ->where('l.login = :user')
            ->setParameter(':user', $userLogin,  \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }

    public function userVideo($userLogin)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('v.tytul', 'v.video_id')
            ->from('hearit_video', 'v')
            ->join('v', 'hearit_uzytkownik_has_hearit_video', 'va', 'v.video_id = va.HearIt_video_video_id')
            ->join('va', 'hearit_uzytkownik', 'a', 'va.HearIt_uzytkownik_uzytkownik_id=a.uzytkownik_id')
            ->innerJoin('a', 'hearit_login', 'l', 'l.uzytkownik_id = a.uzytkownik_id')
            ->where('l.login = :user')
            ->groupBy('video_id')
            ->setParameter(':user', $userLogin,  \PDO::PARAM_STR);
        return $queryBuilder->execute()->fetchAll();
    }

    public function userPlaylist($userLogin)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('p.nazwa', 'p.playlista_id', 'a.pseudonim', 'x.HearIt_video_video_id', 'v.tytul', 'v.video_id')
            ->from('hearit_playlista', 'p')
            ->innerJoin('p', 'hearit_playlista_video', 'x', 'p.playlista_id=x.HearIt_playlista_playlista_id')
            ->innerJoin('x', 'hearit_video', 'v', 'x.HearIt_video_video_id=v.video_id')
            ->join('v', 'hearit_uzytkownik_has_hearit_video', 'va', 'v.video_id = va.HearIt_video_video_id')
            ->join('va', 'hearit_uzytkownik', 'a', 'va.HearIt_uzytkownik_uzytkownik_id=a.uzytkownik_id')
            ->join ('p', 'hearit_uzytkownik_has_hearit_playlista', 'up', 'up.HearIt_playlista_playlista_id=p.playlista_id')
            ->join ('up', 'hearit_uzytkownik', 'u', 'up.HearIt_uzytkownik_uzytkownik_id=u.uzytkownik_id')
            ->join('u', 'hearit_login', 'l', 'l.uzytkownik_id = u.uzytkownik_id')
            ->where('l.login = :user')
            ->groupBy('p.playlista_id')
            ->setParameter(':user', $userLogin,  \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }

    public function playlist($userLogin)
    {
        $queryBuilder = $this->db->createQueryBuilder();


        $queryBuilder->select('p.playlista_id', 'u.pseudonim', 'p.nazwa')
            ->from('hearit_playlista', 'p')
            ->join ('p', 'hearit_uzytkownik_has_hearit_playlista', 'up', 'up.HearIt_playlista_playlista_id=p.playlista_id')
            ->join ('up', 'hearit_uzytkownik', 'u', 'up.HearIt_uzytkownik_uzytkownik_id=u.uzytkownik_id')
            ->innerJoin('u', 'hearit_login', 'l', 'l.uzytkownik_id = u.uzytkownik_id')
            ->where('l.login = :user')
            ->groupBy('p.playlista_id')
            ->setParameter(':user', $userLogin,  \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }

    public function userHighestScore($userLogin)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('v.video_id', 'v.tytul', 'AVG(o.ocena) as ocena', 'a.pseudonim')
            ->from('hearit_video', 'v')
            ->join('v', 'hearit_ocena_has_hearit_video', 'vo', 'vo.HearIt_video_video_id = v.video_id')
            ->join('vo', 'hearit_ocena', 'o', 'vo.HearIt_ocena_ocena_id = o.ocena_id')
            ->join('v', 'hearit_uzytkownik_has_hearit_video', 'av', 'av.HearIt_video_video_id = v.video_id')
            ->join('av', 'hearit_uzytkownik', 'a', 'av.HearIt_uzytkownik_uzytkownik_id=a.uzytkownik_id')
            ->innerJoin('a', 'hearit_login', 'l', 'l.uzytkownik_id = a.uzytkownik_id')
            ->where('l.login = :user')
            ->groupBy('video_id')
            ->orderBy('o.ocena', 'desc')
            ->setParameter(':user', $userLogin,  \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }

}