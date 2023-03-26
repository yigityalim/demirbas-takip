<?php

namespace App\models;

use Core\Model;

class Lokasyonlar extends Model
{
    protected $table = 'lokasyonlar';
    protected $fillable = ['ad'];
    public $timestamps = true;

}