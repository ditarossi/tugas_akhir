<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    public $table = "pemesanan";
    protected $primaryKey = 'ID_User';
    protected $fillable = [
        'ID_User',
        'ID_Wisata',
        'Tanggal_Kunjungan',
        'fasilitas',
        'jumlah',
        'tagihan',
        'status_pembayaran',
    ];
}
