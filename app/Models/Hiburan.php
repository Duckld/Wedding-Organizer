<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiburan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_hiburan';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'nama_paket_hiburan',
        'deskripsi_hiburan',
        'harga_sewa_hiburan',
        'foto_hiburan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $lastCustomer = Hiburan::orderBy('id_hiburan', 'desc')->first();
            $lastId = $lastCustomer ? intval(substr($lastCustomer->id_hiburan, 2)) : 0;
            $product->id_hiburan = 'HB' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
