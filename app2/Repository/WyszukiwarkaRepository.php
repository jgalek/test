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
    public function findAll($tytul)
    {
        $counter=0;
        if(!(empty($autor))){
            $counter++;
        }
        if(!(empty($tytul))){
            $counter++;
        }
        if($counter > 0){
            $queryBuilder = $this->db->createQueryBuilder();
            $queryBuilder->select('tytul')
                        ->from('hearit_video')
                        ->where ( 'tytul = :tytul')
                        ->setParametr (':tytul', $tytul );

            $queryBuilder->execute()->fetchAll();
            return isset($result) ? $result: $result='';

        }
    }

    public function userVideo()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('tytul', 'ocena')
            ->from('hearit_video');

        return $queryBuilder->execute()->fetchAll();
    }


}