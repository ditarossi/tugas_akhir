<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resi;

class ResiPembayaran extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Resi::all();
        return view('admin2.resi.tabel_resi', compact(
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
        $model = new Resi;
        return view('admin2.resi.create_resi', compact(
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
        $model = new Resi;
        $model->ID_Pemesanan = $request->ID_Pemesanan;
        $model->ID_User = $request->ID_User;
        $model->ID_Wisata = $request->ID_Wisata;
        $model->Tanggal_Kunjungan = $request->Tanggal_Kunjungan;
        $model->fasilitas = $request->fasilitas;
        $model->jumlah = $request->jumlah;
        $model->tagihan = $request->tagihan;
        $model->save();

        return redirect('tbl_resi');
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
        $model = Resi::find($id);
        return view('admin2.resi.update_resi', compact(
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
        $model = Resi::find($id);
        $model->ID_Pemesanan = $request->ID_Pemesanan;
        $model->ID_User = $request->ID_User;
        $model->ID_Wisata = $request->ID_Wisata;
        $model->Tanggal_Kunjungan = $request->Tanggal_Kunjungan;
        $model->fasilitas = $request->fasilitas;
        $model->jumlah = $request->jumlah;
        $model->tagihan = $request->tagihan;
        $model->save();

        return redirect('tbl_resi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Resi::find($id);
        $model->delete();
        return redirect('tbl_resi');
    }
}
