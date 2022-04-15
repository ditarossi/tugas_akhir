<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    public $table = "tiket";
    protected $primaryKey = 'ID_Tiket';
    protected $fillable = [
        'ID_Pemesanan',
        'ID_User',
        'ID_ResiPembayaran',
        'ID_BuktiTransaksi',
        'ID_Wisata',
        'Tanggal_Kunjungan',
        'fasilitas',
        'jumlah',
        'status_pembayaran',
    ];
}
