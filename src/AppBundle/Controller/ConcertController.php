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
        $concertList = [
            [
                'date' => '2015年5月3日',
                'time' => '14:00',
                'place' => '東京文化会館 (満席)',
            ],
            [
                'date' => '2015年7月12日',
                'time' => '14:00',
                'place' => '鎌倉芸術館',
            ],
            [
                'date' => '2015年9月20日',
                'time' => '15:00',
                'place' => '横浜みなとみらいホール',
            ],
            [
                'date' => '2015年11月8日',
                'time' => '15:00',
                'place' => 'よこすか芸術劇場 (満席)',
            ],
            [
                'date' => '2016年1月10日',
                'time' => '14:00',
                'place' => '渋谷公会堂',
            ],
        ];

        return $this->render('Concert/index.html.twig',
            ['concertList' => $concertList]
        );
    }
}
