<?php

namespace Core;

use Arrilot\DotEnv\DotEnv;
use Buki\Router\Router;
use Exception;
use Valitron\Validator;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class Bootstrap
{

    public Router $router;
    public View $view;
    public Validator $validator;

    public function __construct()
    {

        DotEnv::load(dirname(__DIR__) . '/.env.php');

        $whoops = new Run();
        $whoops->pushHandler(new PrettyPageHandler());
        if (genv('DEVELOPMENT')) {
            $whoops->register();
        }

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

        $this->validator = new Validator($_POST);
        Validator::langDir(dirname(__DIR__) . '/public/validator_lang');
        Validator::lang('tr');
        $this->view = new View($this->validator);
    }

    /**
     * @throws Exception
     */
    public function run(): void
    {
        $this->router->run();
    }

}