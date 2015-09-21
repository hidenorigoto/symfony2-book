<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MemberController extends Controller
{
    /**
     * @Route("/member")
     */
    public function indexAction()
    {
        $memberCollection = $this->get('app.member_collection');

        return $this->render('Member/index.html.twig',
            ['memberCollection' => $memberCollection]
        );
    }
}
