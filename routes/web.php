<?php

use Illuminate\Support\Facades\Route;

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
Route::view('/template', 'template.v_template');

Route::view('/admin', 'admin.dashboard');

Route::view('/tabel', 'admin.user');

//masyarakat umum
Route::view('/landing', 'landing.isi');
Route::view('/sejarah', 'landing.sejarah');
Route::view('/struktur', 'landing.struktur');
Route::view('/komunitas', 'landing.komunitas');
Route::view('/kerjasama', 'landing.kerjasama');

//user
Route::view('/user_view', 'user_view.isi');

//LOGIN

Auth::routes();

Route::view('/home', 'home');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home')->middleware('is_admin');