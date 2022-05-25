<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Detail;
use App\Models\Resi;
use App\Models\Pemesanan;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datas = Wisata::all();
        $pemesanan = Pemesanan::all();
        return view('user_view.isi', compact(
            'datas', 'pemesanan'
        ));
    }

    public function download()
    {
        $pemesanan = Pemesanan::all();
        $datas = Wisata::all();
        $pdf = PDF::loadView('user_view.isi', [
            'pemesanan'=> $pemesanan,
            'datas'=>$datas,
        ]);

        return $pdf->download('tiket.pdf');
    }

}
