<?php

namespace App\models;

use Core\Model;

class DemirbasKullanicilar extends Model
{
    protected $table = 'demirbas_kullanicilar';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'demirbas_id',
        'kullanici_id',
        'atama_tarihi',
        'iade_tarihi'
    ];

    public function demirbas()
    {
        return $this->belongsTo(Demirbaslar::class, 'demirbas_id');
    }

    public function kullanici()
    {
        return $this->belongsTo(Kullanicilar::class, 'kullanici_id');
    }
}