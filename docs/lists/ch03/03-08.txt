<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConcertController extends Controller
{
    /**
     * @Route("/concert/")
     */
    public function indexAction()
    {
        return $this->render('Concert/index.html.twig');
    }
}
