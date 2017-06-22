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
    public function findAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('pseudonim', 'info')
            ->from('hearit_uzytkownik');

        return $queryBuilder->execute()->fetchAll();
    }

    public function userVideo()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('tytul', 'ocena')
            ->from('hearit_video');

        return $queryBuilder->execute()->fetchAll();
    }
}