<?php

namespace App\models;

use Core\Model;
use Symfony\Component\HttpFoundation\Request;

class Demirbaslar extends Model
{
    protected $table = 'demirbaslar';
    protected $fillable = [
        'ad',
        'departman_id',
        'kategori_id',
        'seri_numarasi',
        'aciklama',
        'satin_alma_tarihi',
        'satin_alma_maliyeti',
        'elden_cikarma_tarihi'
    ];

    public function departman()
    {
        return $this->belongsTo(Departmanlar::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategoriler::class);
    }

    public function lokasyonlar()
    {
        return $this->belongsToMany(Lokasyonlar::class, 'demirbas_lokasyonlar', 'demirbas_id', 'lokasyon_id')
            ->withPivot(['baslangic_tarihi', 'bitis_tarihi'])
            ->withTimestamps();
    }

    public function kullanicilar()
    {
        return $this->belongsToMany(Kullanicilar::class, 'demirbas_kullanicilar', 'demirbas_id', 'kullanici_id')
            ->withPivot(['atama_tarihi', 'iade_tarihi'])
            ->withTimestamps();
    }
}