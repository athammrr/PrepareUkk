<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamars';
    protected $fillable = [
        'tipe',
        'jmlh_kamar',
        'harga',
        'keterangan',
    ];  

    public function fakamar()
    {
        return $this->hasMany(FasilitasKamar::class, 'kamar_id','id');
    }
}
