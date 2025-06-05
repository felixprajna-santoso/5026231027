<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
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
    return view('frontend');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/bootstrapkode2_5026231027', function () {
    return view('bootstrapkode2_5026231027');
});

Route::get('/boxmodel', function () {
    return view('boxmodel');
});

Route::get('/imagefilter', function () {
    return view('imagefilter');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/Latihan17april', function () {
    return view('Latihan17april');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/index', function () {
    return view('index');
});

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);