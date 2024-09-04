<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_undangan';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'bahan_undangan',
        'deskripsi_undangan',
        'harga_undangan',
        'foto_undangan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $lastCustomer = Undangan::orderBy('id_undangan', 'desc')->first();
            $lastId = $lastCustomer ? intval(substr($lastCustomer->id_undangan, 2)) : 0;
            $product->id_undangan = 'UD' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
