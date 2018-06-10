<?php

namespace AppBundle\Repository;



use Doctrine\ORM\EntityRepository;
/**
 * roomRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class roomRepository extends EntityRepository
{


public function getAvailableRooms($date_start,$date_final)

{
     $em=$this->getEntityManager();
     $qb=$em->createQueryBuilder();

     $nots=$em->createQuery("SELECT IDENTITY(b.room) FROM AppBundle:Reservation b. WHERE NOT (b.dateOut < '$date_start' OR >b.dateIN > '$date_final'");
     $dql_query= $nots->getDQL();
     $qb->resetDQLParts();


     $query= $qb->select('r')
         ->from('AppBundle:room','r' )
         ->where($qb->expr()->notIn('r.id' . $dql_query));

     var_dump($query);

     return $query;

}

}
