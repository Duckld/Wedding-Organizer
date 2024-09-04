<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souvenir extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_souvenir';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'nama_paket_souvenir',
        'deskripsi_paket_souvenir',
        'harga_paket_souvenir',
        'foto_souvenir',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $lastCustomer = Souvenir::orderBy('id_souvenir', 'desc')->first();
            $lastId = $lastCustomer ? intval(substr($lastCustomer->id_souvenir, 2)) : 0;
            $product->id_souvenir = 'SV' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
