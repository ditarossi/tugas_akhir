<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    public $table = "fasilitas";
    protected $primaryKey = 'ID_Fasilitas';
    protected $fillable = [
        'Fasilitas',
        'Harga',
    ];
}
