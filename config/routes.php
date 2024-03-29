<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin('MinifyHtml', ['path' => '/minify-html'], function (RouteBuilder $routes) {
    $routes->fallbacks(DashedRoute::class);
});
