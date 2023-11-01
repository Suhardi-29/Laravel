<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/',function() {
    return view('welcome');
});

route::get('/salam', function(){
    return "Assalamu'alaikum selamat belajar laravel";
});
//tambah routing dengan prameter

route::get('/staff/{nama}/{devisi}', function($nama,$devisi){
    return 'Nama Pegawai: '.$nama.'<br> Dapertemen : '.$devisi;
});
//routing dengan memanggil nama file dari view
route::get('/kondisi', function(){
    return view('kondisi');
});
route::get('/nilai', function(){
    return view('coba.nilai');
});

//routing dengan view dan array data
route::get('/daftarnilai', function(){
    return view('coba.daftar');
});
