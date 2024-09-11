<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishesImage extends Model
{
    use HasFactory;

    protected $fillable = ['dishes_id', 'image_path'];

    public function dishes()
    {
        return $this->belongsTo(Dishes::class, 'dishes_id', 'id_maincourse');
    }
}
