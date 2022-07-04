<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VerificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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

Route::get('/', function (Request $request) {
    return view('landingpage')->with([
        "user"=>$request->user()
    ]);
})->name("landingpage");

Route::get('/profile', function () {
    return view('mahasiswa.profil');
})->name("profile");

Route::get('register',[AuthController::class, 'registerView'])
    ->name('registerView');
Route::post('register',[AuthController::class, 'register'])
    ->name('register');

Route::post('/login',[AuthController::class, 'login'])
    ->name('login');

Route::get('/logut', [AuthController::class, 'logout'])
    ->name('logout');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/email/verify', [VerificationController::class, 'show'])
        ->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
        ->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', [VerificationController::class, 'resend'])
        ->name('verification.resend');
});

Route::group(['middleware' => ['auth']], function() {
    //only verified account can access with this group
    Route::group(['middleware' => ['verified']], function() {
        /**
         * Dashboard Routes
         */
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::post('/dashboard', [DashboardController::class, 'search'])->name('dashboard.search');
        Route::post('/dashboard/user', [DashboardController::class, 'searchUser'])->name('dashboard.searchUser');

        Route::post('/profile/update_password', [ProfileController::class, 'update_password'])->name('update_password');

        Route::get('/my_project', [ProjectController::class, 'index'])->name('my_projectView');
        Route::post('/my_project', [ProjectController::class, 'indexSearch'])->name('my_projectSearch');
        Route::get('/my_project/add', [ProjectController::class, 'addView'])->name('add_projectView');
        Route::post('/my_project/add', [ProjectController::class, 'add'])->name('add_project');

        Route::get('/my_event', [EventController::class, 'index'])->name('my_eventView');
        Route::get('/my_event/add', [EventController::class, 'addView'])->name('add_eventView');
        Route::post('/my_event/add', [EventController::class, 'add'])->name('add_event');
    });
    Route::get('/profile', [ProfileController::class, 'index'])->name('profileView');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile');
    Route::post('/my_profile', [ProfileController::class, 'storeOrg'])->name('my_profile');
});

//Route::get('/forgot-password', function () {
//    return view('auth.forgot-password');
//})
//    ->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');







Route::get('/verify', function () {
    return view('verify');
})->name("verify");
Route::get('/reset_password', function () {
    return view('resetPassword');
});

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

