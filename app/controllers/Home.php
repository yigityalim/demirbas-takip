<?php

namespace App\Controllers;

use App\Middlewares\CheckAuth;
use Core\Controller;

class Home extends Controller
{

    public $middlewareBefore = [
        CheckAuth::class
    ];

    public function main(): string
    {
        $name = 'yiğit';
        $surname = '<b>yalım</b>';
        return $this->view->show('home', compact('name', 'surname'));
    }

    public function uyelerSayfasi()
    {
        return 'user sayfası';
    }
}