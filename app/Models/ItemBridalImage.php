<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemBridalImage extends Model
{
    use HasFactory;

    protected $fillable = ['itembridalstyle_id', 'image_path'];

    public function bridalstyle()
    {
        return $this->belongsTo(Dekorasi::class, 'itembridalstyle_id', 'id_itembridalstyle');
    }
}
