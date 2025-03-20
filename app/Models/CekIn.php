<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekIn extends Model
{
    use HasFactory;


    protected $table = 'cekin';
    protected $fillable = [
        'nama_tamu',
        'tgl_Cekin',
        'tgl_Cekout',
        'tipe',
        'jmlh_Kamar',
    ];

    protected $casts = [
        'tggl_pemesanan' => 'timestamp',
    ];
}
