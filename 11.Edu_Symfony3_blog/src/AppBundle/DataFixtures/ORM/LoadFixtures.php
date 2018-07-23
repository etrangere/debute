<?php
namespace AppBundle\DataFixtures\ORM;
/**
 * Created by PhpStorm.
 * User: urartu
 * Date: 09/07/2018
 * Time: 13:48
 */
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Genus;
use Nelmio\Alice\Fixtures;


class LoadFixtures implements FixtureInterface


{
    public function load(ObjectManager $manager)

    {

        Fixtures::load(__DIR__.'/fixtures.yml',$manager);

    }


}