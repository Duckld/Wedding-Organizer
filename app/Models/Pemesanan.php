<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pemesanan';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'id_customer',
        'tanggal_pemesanan',
        'tanggal_acara',
        'status_pemesanan',
        'total_biaya',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            do {
                $lastCustomer = Pemesanan::orderBy('id_pemesanan', 'desc')->first();
                $lastId = $lastCustomer ? intval(substr($lastCustomer->id_pemesanan, 3)) : 0;
                $newId = 'PM' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            } while (Pemesanan::where('id_pemesanan', $newId)->exists());
    
            $product->id_pemesanan = $newId;
        });
    } 
}
