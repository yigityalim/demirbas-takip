<?php

namespace App\Controllers;

use App\Middlewares\CheckAuth;
use Core\Controller;
use Symfony\Component\HttpFoundation\Request;

class Home extends Controller
{

    public array $middlewareBefore = [
        CheckAuth::class
    ];

    public function main(Request $request): string
    {
        if ($request->getMethod() === 'POST') {
            $this->validator
                ->rule('required', ['username', 'password', 'password_again'])
                ->rule('equals', 'password', 'password_again');
            $this->validator->labels([
                'username' => 'Kullanıcı Adı',
                'password' => 'Şifre',
                'password_again' => 'Şifre Tekrar'

            ]);
            if ($this->validator->validate()) {
                print_r($this->validator->data());
            } else {
                //print_r($this->validator->errors());
            }
        }
        return $this->view('home');
    }

    public function uyelerSayfasi(): string
    {
        return 'user sayfası';
    }
}