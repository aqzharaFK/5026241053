<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KeranjangbelanjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert1', function () {
    return view('pert1');
});

Route::get('pert2', function () {
    return view('pert2');
});

Route::get('pert3', function () {
    return view('pert3');
});

Route::get('tgaspert3', function () {
    return view('tugaspert3');
});

Route::get('pert4', function () {
    return view('pert4');
});

Route::get('Pertemuan5', function () {
    return view('Pertemuan5');
});

Route::get('bju', function () {
    return view('tugaspert5uniqlo');
});


Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);


Route::get('/pegawainama{nama}', [PegawaiController::class, 'index']); //jangan lupa diganti
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::get('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud table pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

//crud table keranjang
Route::get('/keranjang', [KeranjangbelanjaController::class, 'index']);
Route::get('/tambah', [KeranjangbelanjaController::class, 'tambah']);
Route::post('/store', [KeranjangbelanjaController::class, 'store']);
Route::get('/hapus/{id}', [KeranjangbelanjaController::class, 'hapus']);
