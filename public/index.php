<?php

namespace Pub;

use App\Router;

require dirname(__DIR__) . '/app/config/config.php';

$users = \App\Models\User::findById([1,12]);
$news = \App\Models\News::lastThreePosts();

include '../app/view/news.php';



$url = rtrim($_SERVER['QUERY_STRING'], '/');

Router::addRoute('posts/add', ['controller' => 'Posts', 'action' => 'add']);
Router::addRoute('posts', ['controller' => 'Posts', 'action' => 'index']);
Router::addRoute('', ['controller' => 'Main', 'action' => 'index  ']);

debug(Router::getRoutes());

if(Router::matchRoute($url)) {
    debug(Router::getRoute());
} else {
    echo '404';
}

