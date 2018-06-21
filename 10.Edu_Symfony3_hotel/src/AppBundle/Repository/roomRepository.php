<?php

namespace AppBundle\Repository;



use Doctrine\ORM\EntityRepository;

/**
 * RoomRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RoomRepository extends EntityRepository
{


public function getAvailableRooms($date_start,$date_final)

{



    $em = $this->getEntityManager();

    $qb = $em->createQueryBuilder();

    $nots = $em->createQuery("SELECT IDENTITY (b.room) FROM AppBundle:Reservation b WHERE NOT (b.dateOut < '$date_start' OR >b.dateIn > '$date_final')");


    $dql_query = $nots->getDQL();


    $qb->resetDQLParts();
      var_dump($dql_query);

    $query = $qb->select('r')
        ->from('AppBundle:Room', 'r')
        ->where($qb->expr()->notIn('r.id' . $dql_query));


    // var_dump($query);
       return;
   //var_dump(return);
}
}
