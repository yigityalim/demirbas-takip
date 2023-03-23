<?php

namespace Core;

use Buki\Router\Router;

class Bootstrap
{
    public Router $router;
    public View $view;

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

        $this->view = new View();
    }

    public function run()
    {
        $this->router->run();
    }

}