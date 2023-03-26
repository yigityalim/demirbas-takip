<?php

namespace App\models;

use Core\Model;

class Kullanicilar extends Model
{
    protected $table = 'kullanicilar';

    protected $fillable = ['ad', 'email', 'sifre'];

    public $timestamps = ['olusturulma_tarihi', 'guncelleme_tarihi'];
}