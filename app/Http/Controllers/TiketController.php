<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Tiket::all();
        return view('admin2.tiket.tabel_tiket', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Tiket;
        return view('admin2.tiket.create_tiket', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Tiket;
        $model->ID_Pemesanan = $request->ID_Pemesanan;
        $model->ID_User = $request->ID_User;
        $model->ID_ResiPembayaran = $request->ID_ResiPembayaran;
        $model->ID_BuktiTransaksi = $request->ID_BuktiTransaksi;
        $model->ID_Wisata = $request->ID_Wisata;
        $model->Tanggal_Kunjungan = $request->Tanggal_Kunjungan;
        $model->fasilitas = $request->fasilitas;
        $model->jumlah = $request->jumlah;
        $model->status_pembayaran = $request->status_pembayaran;
        $model->save();

        return redirect('tbl_tiket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Tiket::find($id);
        return view('admin2.tiket.update_tiket', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Tiket::find($id);

        $model->ID_Pemesanan = $request->ID_Pemesanan;
        $model->ID_User = $request->ID_User;
        $model->ID_ResiPembayaran = $request->ID_ResiPembayaran;
        $model->ID_BuktiTransaksi = $request->ID_BuktiTransaksi;
        $model->ID_Wisata = $request->ID_Wisata;
        $model->Tanggal_Kunjungan = $request->Tanggal_Kunjungan;
        $model->fasilitas = $request->fasilitas;
        $model->jumlah = $request->jumlah;
        $model->status_pembayaran = $request->status_pembayaran;
        $model->save();

        return redirect('tbl_tiket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Tiket::find($id);
        $model->delete();
        return redirect('tbl_tiket');
    }
}
