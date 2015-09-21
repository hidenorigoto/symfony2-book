<?php
namespace AppBundle\Controller\Api;

use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class ConcertController extends FOSRestController
{
    /**
     * @ApiDoc(
     *    description="公演情報の一覧を取得します"
     * )
     */
    public function getConcertsAction()
    {
        $em = $this->get('doctrine')->getManager();
        $repository = $em->getRepository('AppBundle:Concert');
        $concertList = $repository->findAll();

        return $concertList;
    }
}
