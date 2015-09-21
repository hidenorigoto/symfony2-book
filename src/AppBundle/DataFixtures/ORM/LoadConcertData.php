<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Concert;

class LoadConcertData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $concert1 = new Concert();
        $concert1->setDate(new \DateTime('2015-05-03'));
        $concert1->setTime(new \DateTime('14:00'));
        $concert1->setPlace('東京文化会館');
        $concert1->setAvailable(false);
        $manager->persist($concert1);

        $concert2 = new Concert();
        $concert2->setDate(new \DateTime('2015-07-12'));
        $concert2->setTime(new \DateTime('14:00'));
        $concert2->setPlace('鎌倉芸術観');
        $concert2->setAvailable(true);
        $manager->persist($concert2);

        $concert3 = new Concert();
        $concert3->setDate(new \DateTime('2015-09-20'));
        $concert3->setTime(new \DateTime('15:00'));
        $concert3->setPlace('横浜みなとみらいホール');
        $concert3->setAvailable(true);
        $manager->persist($concert3);

        $concert4 = new Concert();
        $concert4->setDate(new \DateTime('2015-11-08'));
        $concert4->setTime(new \DateTime('15:00'));
        $concert4->setPlace('よこすか芸術劇場');
        $concert4->setAvailable(false);
        $manager->persist($concert4);

        $concert5 = new Concert();
        $concert5->setDate(new \DateTime('2016-01-10'));
        $concert5->setTime(new \DateTime('14:00'));
        $concert5->setPlace('渋谷公会堂');
        $concert5->setAvailable(true);
        $manager->persist($concert5);

        $manager->flush();
    }
}
