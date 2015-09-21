<?php
namespace AppBundle\Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;

class BlogControllerTest extends WebTestCase
{
    /**
     * @test
     */
    public function ブログ記事一覧が表示されること()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/blog/');

        $this->assertThat(
            $crawler->filter('li.blog-article')->count(),
            $this->equalTo(20)
        );
    }
}
