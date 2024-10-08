<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dekorasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_dekorasi';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'nama_dekorasi',
        'deskripsi_dekorasi',
        'harga_dekorasi',
        'foto_dekorasi',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            do {
                $lastCustomer = Dekorasi::orderBy('id_dekorasi', 'desc')->first();
                $lastId = $lastCustomer ? intval(substr($lastCustomer->id_dekorasi, 3)) : 0;
                $newId = 'DEK' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            } while (Dekorasi::where('id_dekorasi', $newId)->exists());
    
            $product->id_dekorasi = $newId;
        });
    }

    public function images()
    {
        return $this->hasMany(DekorasiImage::class, 'dekorasi_id', 'id_dekorasi');
    }
}
