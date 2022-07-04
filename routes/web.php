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
    return view('landingpage');
})->name("landingpage");

Route::get('/registrasi', function () {
    return view('register');
})->name("register");

<<<<<<< HEAD
Route::get('/verify', function () {
    return view('verify');
})->name("verify");
=======
Route::get('/reset_password', function () {
    return view('resetPassword');
});
>>>>>>> e8bd4a3058f285dd6fd9e8828e6a404d5cd23529

Route::get('/mahasiswa', function () {
    return view('mahasiswa/dashboard');
})->name("mahasiswa");

Route::get('/mahasiswa/project', function () {
    return view('mahasiswa/proyek');
})->name("proyekMahasiswa");

Route::get('/mahasiswa/myproject', function () {
    return view('mahasiswa/iproyek');
})->name("myproyekMahasiswa");

Route::get('/mahasiswa/myproject/add', function () {
    return view('mahasiswa/tambahProyek');
})->name("AddMyproyekMahasiswa");

Route::get('/mahasiswa/myproject/update', function () {
    return view('mahasiswa/editProyek');
})->name("updateMyproyekMahasiswa");

Route::get('/mahasiswa/profile', function () {
    return view('mahasiswa/profil');
})->name("profilMahasiswa");

Route::get('/organisasi', function () {
    return view('organisasi/dashboard');
})->name("organisasi");

Route::get('/organisasi/myevent', function () {
    return view('organisasi/ievent');
})->name("myEventOrganisasi");

Route::get('/organisasi/myevent/update', function () {
    return view('organisasi/editEvent');
})->name("updateMyEventOrganisasi");

Route::get('/organisasi/tambah_kegiatan', function () {
    return view('organisasi/tambahEvents');
})->name("tambahOrganisasi");

Route::get('/organisasi/profile', function () {
    return view('organisasi/profil');
})->name("profilOrganisasi");

Route::get('/organisasi/detail', function () {
    return view('organisasi/detailProfil');
});

Route::get('/mahasiswa/detail', function () {
    return view('mahasiswa/detailProfil');
});

