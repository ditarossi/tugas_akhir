<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

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
        return view('user_view.isi', compact(
            'datas'
        ));
    }

    // public function admin()
    // {
    //     return view('admin2.isi');
    // }



}

//1. home -> user_view.isi
//2. admin -> admin.dashboard