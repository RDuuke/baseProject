<?php
declare(strict_types=1);

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();


    $app->get('/', 'HomeController:home')->setName("home")
    ->add($container->get('viewMiddleware'));

    $app->get('/test', 'HomeController:testRoute')->setName('testName')
        ->add($container->get('viewMiddleware'));

};