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

Route::view('/template', 'template.v_template');

Route::view('/admin', 'admin.dashboard');

Route::view('/tabel', 'admin.user');

Route::view('/landing', 'landing.landing');

//LOGIN

Auth::routes();

Route::view('/home', 'home');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home')->middleware('is_admin');