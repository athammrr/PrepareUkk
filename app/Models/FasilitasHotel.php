<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasHotel extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_hotels';
    protected $fillable = [
        'nama_fasilitas',
        'status',
        'keterangan',
        'image',
    ];
}
