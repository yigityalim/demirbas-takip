<?php

namespace core;

use Buki\Router\Router;

class Bootstrap
{

    public $router;

    public function __construct()
    {
        $this->router = new Router([
            'base_folder' => '/proje',
            'paths' => [
                'controllers' => 'app/Controllers',
                'middlewares' => 'app/Middlewares',
            ],
            'namespaces' => [
                'controllers' => 'App\Controllers',
                'middlewares' => 'App\Middlewares',
            ]
        ]);
    }

    public function __destruct()
    {
        $this->router->run();
    }

}