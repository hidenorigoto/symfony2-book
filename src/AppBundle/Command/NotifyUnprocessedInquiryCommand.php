<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class NotifyUnprocessedInquiryCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('cs:inquiry:notify-unprocessed')
                ->setDescription('未処理お問い合わせ一覧を通知')
            ;
        }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getContainer();

        $em = $container->get('doctrine')->getManager();
        $inquiryRepository = $em->getRepository('AppBundle:Inquiry');

        $inquiryList = $inquiryRepository->findUnprocessed();

        if (count($inquiryList) > 0) {
            $templating = $container->get('templating');

            $message = \Swift_Message::newInstance()
                ->setSubject('[CS] 未処理お問い合わせ通知')
                ->setFrom('webmaster@example.com')
                ->setTo('admin@example.com')
                ->setBody(
                    $templating->render(
                        'mail/admin_unprocessedInquiryList.txt.twig',
                        ['inquiryList' => $inquiryList]
                    )
                );

            $container->get('mailer')->send($message);

            $output->writeln(count($inquiryList) . "件の未処理を通知");
        } else {
            $output->writeln("未処理なし");
        }
    }
}
