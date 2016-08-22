<?php


namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Task;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadFixtures implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $obj = Fixtures::load(__DIR__."/fixtures.yml", $manager);
    }
}