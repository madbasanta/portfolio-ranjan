<?php

declare(strict_types=1);

use Slim\App;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Twig\Loader\FilesystemLoader;
use App\Application\Settings\SettingsInterface;

return function(App $app) {
    $container = $app->getContainer();

    $container->set('view', function () use($container){
        $settings = $container->get(SettingsInterface::class)->get('views');
        $loader = new FilesystemLoader($settings['path']);

        return new Twig($loader, $settings['settings']);
    });

    $container->set('viewMiddleware', function() use($container, $app){
        return new TwigMiddleware($container->get('view'), $app->getRouteCollector()->getRouteParser());
    });
};