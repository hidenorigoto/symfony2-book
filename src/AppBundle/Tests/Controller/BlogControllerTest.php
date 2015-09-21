<?php
namespace AppBundle\Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;
use AppBundle\DataFixtures\ORM\BlogArticleLoader;

class BlogControllerTest extends WebTestCase
{
    /**
     * @test
     */
    public function ブログ記事一覧が表示されること()
    {
        $this->loadFixtures([
            BlogArticleLoader::class
        ]);

        $client = static::createClient();
        $crawler = $client->request('GET', '/blog/');

        $this->assertThat(
            $crawler->filter('li.blog-article')->count(),
            $this->equalTo(20)
        );
    }
}
