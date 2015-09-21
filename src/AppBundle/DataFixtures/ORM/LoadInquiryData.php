<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Inquiry;

class LoadInquiryData implements FixtureInterface, ContainerAwareInterface
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
        $inquiry1 = new Inquiry();
        $inquiry1->setName('フランツ・クサーヴァー・モーツァルト');
        $inquiry1->setEmail('mozart@example.com');
        $inquiry1->setTel('000-1111-2222');
        $inquiry1->setType(0);
        $inquiry1->setContent('私の作った曲を演奏していただけませんか？');
        $inquiry1->setProcessStatus(1);
        $inquiry1->setProcessMemo('返信済');
        $manager->persist($inquiry1);

        $inquiry2 = new Inquiry();
        $inquiry2->setName('ニコロ・パガニーニ');
        $inquiry2->setEmail('paganini@example.com');
        $inquiry2->setTel('012-1111-3333');
        $inquiry2->setType(1);
        $inquiry2->setContent('バイオリンパートの奏者として応募したいのですが、選考はいつ行っていますか？私は今月末頃なら東京に滞在しています。');
        $inquiry2->setProcessStatus(0);
        $manager->persist($inquiry2);

        $manager->flush();
    }
}
