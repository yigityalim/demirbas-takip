<?php

namespace App\Controllers;

use App\Middlewares\CheckAuth;
use Core\Controller;

class Home extends Controller
{

    public array $middlewareBefore = [
        CheckAuth::class
    ];

    public function main(): string
    {
        $name = 'Mehmet';
        return $this->view('home', compact('name'));
    }

    public function uyelerSayfasi(): string
    {
        return 'user sayfası';
    }
}