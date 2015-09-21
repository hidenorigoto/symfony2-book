<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminMenuController extends Controller
{
    /**
     * @Route("/admin/")
     */
    public function indexAction()
    {
        return $this->render('Admin/Common/index.html.twig');
    }
}
