<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    use HasFactory;
    public $table = "wisata";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_wisata',
        'kuota',
        'harga',
        'keterangan',
    ];

    public function pemesanan()
    {
        return $this->belongsTo('App\Models\Pemesanan');
    }

    public function resi()
    {
        return $this->belongsTo('App\Models\Resi');
    }

    public function tiket()
    {
        return $this->belongsTo('App\Models\Tiket');
    }

}
