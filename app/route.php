<?php

$app = new \core\Bootstrap();

$app->router->controller('/', 'Home', [
    'before' => \App\Middlewares\CheckAuth::class
]);

$app->router->group('/admin', function ($router) {

    $router->get('/', fn() => 'Admin sayfası');

    $router->get('/users', fn() => 'Admin users');

});

$app->router->error(function ($code, $message) {
    die("Hata: {$code} - {$message}");
});
