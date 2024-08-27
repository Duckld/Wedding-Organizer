<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_dishes';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'nama_paket_dish',
        'harga_dish',
        'foto_menu',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $lastCustomer = User::orderBy('id_customer', 'desc')->first();
            $lastId = $lastCustomer ? intval(substr($lastCustomer->id_customer, 2)) : 0;
            $product->id_customer = 'MC' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
