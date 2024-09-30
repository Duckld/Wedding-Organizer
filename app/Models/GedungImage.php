<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GedungImage extends Model
{
    use HasFactory;

    protected $fillable = ['gedung_id', 'image_path'];

    public function gedung()
    {
        return $this->belongsTo(Gedung::class, 'gedung_id', 'id_gedung');
    }
}
