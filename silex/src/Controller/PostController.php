<?php

namespace Controller;

use Doctrine\DBAL\Connection;
use Silex\Application;

class PostController
{
    public function indexAction(Application $app)
    {
        /** @var Connection $conn */
        $conn = $app['db'];
        $posts = $conn->fetchAll("SELECT * FROM posts");

        return include __DIR__ . '/../views/posts.php';
    }

    public function showAction($slug)
    {
        return 'Post ' . $slug;
    }
}
