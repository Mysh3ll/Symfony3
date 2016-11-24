<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EventRepository extends EntityRepository
{
    public function findByIdType()
    {
        return $this->createQueryBuilder('e')
            ->select('t.idType')
            ->distinct(true)
            ->leftjoin('e.idType', 't')
            ->where('t.idType = e.idType')
            ->getQuery()
            ->getResult();
    }

    public function findByIdTypeOderByDate($idType)
    {
        $date = new \DateTime();

        return $this->createQueryBuilder('e')
            ->leftjoin('e.idType', 't')
            ->leftjoin('e.idSalle', 's')
            ->where('t.idType = e.idType')
            ->andWhere('s.idSalle = e.idSalle')
            ->andWhere('t.idType = :id')
            ->setParameter('id', $idType)
            ->andWhere('e.dateEvent >= :date')
            ->setParameter('date', $date)
            ->orderBy('e.dateEvent')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }
}