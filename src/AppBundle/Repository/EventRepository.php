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

    public function findArray($array)
    {
        return $this->createQueryBuilder('e')
            ->select('e')
            ->where('e.idEvent IN (:array)')
            ->setParameter('array', $array)
            ->getQuery()
            ->getResult();
    }

    public function findByTitreEvent($titre)
    {
        return $this->createQueryBuilder('e')
            ->select('e.titreEvent')
            ->where('e.titreEvent LIKE :data')
            ->setParameter('data', '%'.$titre.'%')
            ->orderBy('e.titreEvent')
            ->getQuery()
            ->getResult();
    }

    public function findByDatePicker($dateDebut, $dateFin)
    {
        return $this->createQueryBuilder('e')
            ->select('e')
            ->where('e.dateEvent BETWEEN :dateDebut AND :dateFin')
            ->setParameter('dateDebut', $dateDebut)
            ->setParameter('dateFin', $dateFin)
            ->orderBy('e.dateEvent', 'ASC')
            ->orderBy('e.idType', 'ASC')
            ->getQuery()
            ->getResult();
    }
}