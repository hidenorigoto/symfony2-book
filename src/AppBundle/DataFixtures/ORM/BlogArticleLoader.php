<?php
namespace AppBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;

class BlogArticleLoader extends DataFixtureLoader
{
    protected function getFixtures()
    {
        return  array(
            __DIR__ . '/../../Resources/fixtures/BlogArticle.yml',
        );
    }
}
