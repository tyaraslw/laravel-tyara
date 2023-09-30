<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengaduanControll;
use App\Http\Controllers\masyarakatControll;


Route::get('/', function () {
    return view('welcome');
});

//pengaduan
Route::get('/home', [pengaduanControll::class, 'index']);
Route::get('/pengaduan', [pengaduanControll::class, 'pengaduan']);
Route::post('/isi-pengaduan', [pengaduanControll::class, 'proses_tambah_pengaduan']);
Route::get('/isi-pengaduan', [pengaduanControll::class, 'tampil_isi']);

//masyarakat
Route::get('/masyarakat', [pengaduanControll::class, 'masyarakat']);
Route::post('/isi-masyarakat', [pengaduanControll::class, 'proses_tambah_masyarakat']);
Route::get('/isi-masyarakat', [pengaduanControll::class, 'tampil_isiM']);
// Route::get('/isi-masyarakat', [masyarakatControll::class, 'tampil_isiM']);

//petugas
Route::get('/petugas', [pengaduanControll::class, 'petugas']);
Route::post('/isi-petugas', [pengaduanControll::class, 'proses_tambah_petugas']);
Route::get('/isi-petugas', [pengaduanControll::class, 'tampil_isiP']);

Route::get('/login', function () {
    return view('login');
});

// Route::get('/isi-pengaduan', function () {
//     return view('isi-pengaduan');
// });
