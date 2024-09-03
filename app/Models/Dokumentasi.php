<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_dokumentasi';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'nama_paket_dokumentasi',
        'jenis_dokumentasi',
        'deskripsi_dokumentasi',
        'harga_dokumentasi',
        'foto_dokumentasi',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $lastCustomer = Dokumentasi::orderBy('id_dokumentasi', 'desc')->first();
            $lastId = $lastCustomer ? intval(substr($lastCustomer->id_dokumentasi, 2)) : 0;
            $product->id_dokumentasi = 'DOK' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
