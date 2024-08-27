<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maincourse extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_maincourse';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'nama_paket_maincourse',
        'deskripsi_makanan',
        'harga_paket',
        'foto_menu',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $lastCustomer = Maincourse::orderBy('id_maincourse', 'desc')->first();
            $lastId = $lastCustomer ? intval(substr($lastCustomer->id_maincourse, 2)) : 0;
            $product->id_maincourse = 'MC' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
