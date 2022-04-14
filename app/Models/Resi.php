<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resi extends Model
{
    use HasFactory;
    public $table = "resi_pembayaran";
    protected $primaryKey = 'ID_Pemesanan';
    protected $fillable = [
        'ID_Pemesanan',
        'ID_User',
        'ID_Wisata',
        'Tanggal_Kunjungan',
        'fasilitas',
        'jumlah',
        'tagihan',
        'status_pembayaran',
    ];
}
