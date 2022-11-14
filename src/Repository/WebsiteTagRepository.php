<?php

namespace App\Repository;

use App\Entity\WebsiteTag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WebsiteTag|null find($id, $lockMode = null, $lockVersion = null)
 * @method WebsiteTag|null findOneBy(array $criteria, array $orderBy = null)
 * @method WebsiteTag[]    findAll()
 * @method WebsiteTag[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WebsiteTagRepository extends ServiceEntityRepository {
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, WebsiteTag::class);
    }
    public function getMetaData(string $webPage): WebsiteTag {

        $dbQuery = $this->findOneBy(['website' => $_ENV['SITE_ID'], 'webPage' => $webPage]);
        if (empty($dbQuery)) {
            return $this->findOneBy(['website' => $_ENV['SITE_ID'], 'webPage' => 'ostale']);
        } else {
            return $dbQuery;
        }
    }
}
