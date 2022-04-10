<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    use HasFactory;
    public $table = "wisata";
    protected $fillable = [
        'nama_wisata',
        'fasilitas',
        'kuota',
        'keterangan',
    ];

}
