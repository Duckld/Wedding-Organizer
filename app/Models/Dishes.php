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
        'nama_paket_dishes',
        'deskripsi_makanan',
        'harga_paket',
        'foto_menu',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $lastCustomer = Dishes::orderBy('id_dishes', 'desc')->first();
            $lastId = $lastCustomer ? intval(substr($lastCustomer->id_dishes, 2)) : 0;
            $product->id_dishes = 'DS' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function images()
    {
        return $this->hasMany(DishesImage::class, 'dishes_id', 'id_dishes');
    }
}
