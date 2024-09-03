<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_gedung';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'nama_gedung',
        'tipe_gedung',
        'alamat_gedung',
        'kapasitas_gedung',
        'harga_sewa_gedung',
        'status_gedung',
        'deskripsi_gedung',
        'foto_gedung',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $lastCustomer = Gedung::orderBy('id_gedung', 'desc')->first();
            $lastId = $lastCustomer ? intval(substr($lastCustomer->id_gedung, 2)) : 0;
            $product->id_gedung = 'GD' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
