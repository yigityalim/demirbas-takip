<?php

namespace App\models;

use Core\Model;

class DemirbasLokasyonlar extends Model
{
    protected $table = 'demirbas_lokasyonlar';

    protected $fillable = [
        'demirbas_id',
        'lokasyon_id',
        'baslangic_tarihi',
        'bitis_tarihi'
    ];

    public function demirbas()
    {
        return $this->belongsTo(Demirbaslar::class, 'demirbas_id');
    }

    public function lokasyon()
    {
        return $this->belongsTo(Lokasyonlar::class, 'lokasyon_id');
    }
}