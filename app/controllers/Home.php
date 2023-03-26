<?php

namespace App\Controllers;

use App\Middlewares\CheckAuth;
use App\models\DemirbasKullanicilar;
use App\models\Demirbaslar;
use App\models\Departmanlar;
use App\models\Kullanicilar;
use Core\Controller;
use Illuminate\Database\Capsule\Manager;
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

        /*
         $users = Manager::table('users')
            ->select(['users.*', 'users.uye_id as uye_id', 'products.*'])
            ->join('products', 'products.uye_id', '=', 'users.uye_id')
            ->orderBy('users.uye_id', 'DESC')
            ->get();
         */

        $demirbaslar = Demirbaslar::all();
        $demirbasKullanicilar = DemirbasKullanicilar::all();
        $kullanicilar = Kullanicilar::all();
        $departmanlar = Departmanlar::all();

        return $this->view('home', compact([
            'demirbaslar',
            'demirbasKullanicilar',
            'kullanicilar',
            'departmanlar'
        ]));
    }

    public function uyelerSayfasi(): string
    {
        return 'user sayfası';
    }
}