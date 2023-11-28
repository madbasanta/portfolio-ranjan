<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'index.twig');
    });

    $app->get('/documentry', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'documentry.twig');
    });
    $app->get('/music-video', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'music-video.twig');
    });
    $app->get('/commercials', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'commercials.twig');
    });
    $app->get('/travel', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'travel.twig');
    });
    $app->get('/events', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'events.twig');
    });
    $app->get('/bts', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'bts.twig');
    });

};
