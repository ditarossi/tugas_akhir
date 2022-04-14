<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuktiTf extends Model
{
    use HasFactory;
    public $table = "bukti_transaksi";
    protected $primaryKey = 'ID_BuktiTransaksi';
    protected $fillable = [
        'ID_User',
        'ID_ResiPembayara',
        'foto',
    ];
}
