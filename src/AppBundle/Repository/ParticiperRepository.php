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

    public function deleteEvent($idEvent)
    {
        return $this->createQueryBuilder('p')
            ->delete('AppBundle:Participer', 'p')
            ->where('p.idEvent = :idEvent')
            ->setParameter('idEvent', $idEvent)
            ->getQuery()
            ->execute();
    }

    public function findMailUserByIdEvent($idEvent)
    {
        return $this->createQueryBuilder('p')
            ->select('u.username', 'u.email')
            ->distinct(true)
            ->leftJoin('p.idPersonne', 'u')
            ->where('u.id = p.idPersonne')
            ->andWhere('p.idEvent = :idEvent')
            ->setParameter('idEvent', $idEvent)
            ->orderBy('p.idPersonne', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findAllBookedEventById($idEvent)
    {
        return $this->createQueryBuilder('p')
            ->select('p')
            ->distinct(true)
            ->where('p.idEvent = :idEvent')
            ->setParameter('idEvent', $idEvent)
            ->getQuery()
            ->getResult();
    }
}
