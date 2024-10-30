<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BridalstyleImage extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_bridalstyleimage';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'nama_pakaian',
        'thumbnail_bridalstyle',
        'foto_paket',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $lastCustomer = Bridalstyle::orderBy('id_bridalstyle_image', 'desc')->first();
            $lastId = $lastCustomer ? intval(substr($lastCustomer->id_bridalstyle_image, 2)) : 0;
            $product->id_bridalstyle_image = 'BSI' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
