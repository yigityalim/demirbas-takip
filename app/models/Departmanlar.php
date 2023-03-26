<?php

namespace App\models;

use Core\Model;

class Departmanlar extends Model
{
    protected $table = 'departmanlar';
    protected $fillable = ['ad'];
    public $timestamps = true;

    public function demirbaslar()
    {
        return $this->hasMany('App\Models\Demirbaslar', 'departman_id');
    }
}