<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiburanImage extends Model
{
    use HasFactory;

    protected $fillable = ['hiburan_id', 'image_path'];

    public function hiburan()
    {
        return $this->belongsTo(Hiburan::class, 'hiburan_id', 'id_hiburan');
    }
}
