<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function latestListAction()
    {
        $blogList = [
            [
                'targetDate' => '2015年3月10日',
                'title' => '東京公演レポート',
            ],
            [
                'targetDate' => '2015年2月8日',
                'title' => '最近の練習風景',
            ],
            [
                'targetDate' => '2015年1月3日',
                'title' => '本年もよろしくお願い致します',
            ],
        ];

        return $this->render('Blog/latestList.html.twig',
            ['blogList' => $blogList]
        );
    }
}
