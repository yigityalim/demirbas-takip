<?php

namespace Core;

use Arrilot\DotEnv\DotEnv;
use Buki\Router\Router;
use Illuminate\Database\Capsule\Manager as Capsule;
use Exception;
use Valitron\Validator;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

/**
 * Class Bootstrap
 * @package Core
 */
class Bootstrap
{

    public Router $router;
    public View $view;
    public Validator $validator;

    /**
     * Bootstrap constructor.
     * @throws Exception
     */
    public function __construct()
    {

        DotEnv::load(dirname(__DIR__) . '/.env.php');

        $whoops = new Run();
        $whoops->pushHandler(new PrettyPageHandler());

        if (config('DEVELOPMENT')) {
            $whoops->register();
        }

        $capsule = new Capsule;

        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => config('DB_NAME'),
            'username' => config('DB_USER', 'root'),
            'password' => config('DB_PASS', ''),
            'charset' => config('DB_CHARSET', 'utf8mb4'),
            'collation' => config('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => config('DB_PREFIX'),
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();

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
        Validator::langDir(dirname(__DIR__) . '/resources/validator_lang');
        Validator::lang('tr');
        $this->view = new View($this->validator);
    }

    /**
     * @throws Exception
     * @return void
     * Router'ı çalıştırır.
     */
    public function run(): void
    {
        $this->router->run();
    }

}