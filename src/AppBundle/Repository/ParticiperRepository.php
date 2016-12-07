<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ParticiperRepository extends EntityRepository
{
    public function findOrderById($idUser)
    {
        return $this->createQueryBuilder('p')
            ->select('e.idEvent, e.titreEvent')
            ->distinct(true)
            ->leftJoin('p.idEvent', 'e')
            ->where('e.idEvent = p.idEvent')
            ->andWhere('p.idPersonne = :idUser')
            ->setParameter('idUser', $idUser)
            ->orderBy('p.idEvent', 'ASC')
//            ->orderBy('p.numPlace', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findOrderByUser($idUser)
    {
        return $this->createQueryBuilder('p')
            ->select('p')
            ->distinct(true)
            ->where('p.idPersonne = :idUser')
            ->setParameter('idUser', $idUser)
            ->orderBy('p.idEvent', 'ASC')
//            ->orderBy('p.numPlace', 'ASC')
            ->groupBy('p.idEvent')
            ->getQuery()
            ->getResult();
    }

    public function deleteEventByUser($idEvent, $idPersonne)
    {
        return $this->createQueryBuilder('p')
            ->delete('AppBundle:Participer', 'p')
            ->where('p.idEvent = :idEvent')
            ->setParameter('idEvent', $idEvent)
            ->andWhere('p.idPersonne = :idPersonne')
            ->setParameter('idPersonne', $idPersonne)
            ->getQuery()
            ->execute();
    }
}