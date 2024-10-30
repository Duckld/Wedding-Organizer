<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemBridalstyle extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_itembridalstyle';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'nama_gaun',
        'foto_thumbnail',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            do {
                $lastCustomer = ItemBridalstyle::orderBy('id_itembridalstyle', 'desc')->first();
                $lastId = $lastCustomer ? intval(substr($lastCustomer->id_itembridalstyle, 3)) : 0;
                $newId = 'BSI' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            } while (Dekorasi::where('id_itembridalstyle', $newId)->exists());
    
            $product->id_itembridalstyle = $newId;
        });
    }

    public function images()
    {
        return $this->hasMany(DekorasiImage::class, 'itembridalstyle_id', 'id_itembridalstyle');
    }
}
