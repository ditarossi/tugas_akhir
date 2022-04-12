<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//admin
//Route::view('/template', 'template.v_template');
//Route::view('/admin', 'admin.dashboard');
//Route::view('/tabel', 'admin.user');
// Admin

//dashboard
Route::view('/template2', 'admin2.isi');
Route::view('/admin2', 'admin2.isi');

//CRUD USER
Route::resource('tbl_user', '\App\Http\Controllers\UserController');

//CRUD WISATA
Route::resource('tbl_wisata', '\App\Http\Controllers\WisataControllers');

//CRUD PEMESANAN
Route::resource('tbl_pemesanan', '\App\Http\Controllers\PemesananController');

//masyarakat umum
Route::view('/landing', 'landing.isi');
Route::view('/sejarah', 'landing.sejarah');
Route::view('/struktur', 'landing.struktur');
Route::view('/komunitas', 'landing.komunitas');
Route::view('/kerjasama', 'landing.kerjasama');

//user
Route::view('/user_view', 'user_view.isi');
Route::view('/sejarah', 'user_view.sejarah');
Route::view('/struktur', 'user_view.struktur');
Route::view('/komunitas', 'user_view.komunitas');
Route::view('/kerjasama', 'user_view.kerjasama');

//LOGIN
Auth::routes();
//Route::view('user_view', 'user_view.isi');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('is_admin');
Route::get('/user_view', [App\Http\Controllers\HomeController::class,'index'])->name('user_view');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

//1. admin/home -> admin
//2. admin.home -> admin.dashboard

//LOGOUT
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//DataTables
//Route::get('/user', [User::class, 'index']);
