<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaincourseImage extends Model
{
    use HasFactory;

    protected $fillable = ['maincourse_id', 'image_path'];

    public function maincourse()
    {
        return $this->belongsTo(Maincourse::class, 'maincourse_id', 'id_maincourse');
    }
}
