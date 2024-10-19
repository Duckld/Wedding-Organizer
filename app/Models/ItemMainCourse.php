<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemMainCourse extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_item_maincourse';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'nama_item_maincourse',
        'deskripsi_item_maincourse',
        'foto_item_maincourse',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $lastCustomer = ItemMainCourse::orderBy('id_item_maincourse', 'desc')->first();
            $lastId = $lastCustomer ? intval(substr($lastCustomer->id_item_maincourse, 2)) : 0;
            $product->id_item_maincourse = 'IMC' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
