<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumentasiImage extends Model
{
    use HasFactory;

    protected $fillable = ['dokumentasi_id', 'image_path'];

    public function gedung()
    {
        return $this->belongsTo(Dokumentasi::class, 'dokumentasi_id', 'id_dokumentasi');
    }
}
