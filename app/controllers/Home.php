<?php

namespace App\Controllers;

use App\Middlewares\CheckAuth;

class Home
{

    public $middlewareBefore = [
        CheckAuth::class
    ];

    public function main(): string
    {
        return 'Home sınıfının main metodu';
    }

    public function uyelerSayfasi()
    {
        return 'user sayfası';
    }
}