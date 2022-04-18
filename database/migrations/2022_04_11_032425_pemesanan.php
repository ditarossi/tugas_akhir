<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pemesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id('ID_Pemesanan');
            $table->string('ID_user');
            $table->string('ID_Wisata'); 
            $table->date('Tanggal_Kunjungan');    
            $table->text('fasilitas');     
            $table->integer('jumlah');  
            $table->char('tagihan', 15);  
            $table->string('status_pembayaran'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
