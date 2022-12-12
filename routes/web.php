<?php

use App\Http\Livewire\Auth\RegisterInst;
use App\Http\Livewire\Auth\RegisterPrivat;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserDashController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/disclaimer', 'disclaimer')->name('disclaimer');
    Route::get('/impressum', 'impressum')->name('impressum');
    Route::get('/datenschutz', 'datenschutz')->name('datenschutz');
    Route::get('/verifikation', 'verifikation')->name('verifikation');

});

Route::middleware('guest')->group(function () {
    Route::get('/register_inst', RegisterInst::class)->name('register_inst');
    Route::get('/register_privat', RegisterPrivat::class)->name('register_privat');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserDashController::class,'index'])->name('user_dashboard');
    Route::get('/antrag', [UserDashController::class,'antrag'])->name('user_antrag');
    Route::get('/gesuch', [UserDashController::class,'gesuch'])->name('user_gesuch');
    Route::get('/nachrichten', [UserDashController::class,'nachrichten'])->name('user_nachrichten');
    Route::get('/benutzer', [UserDashController::class,'benutzer'])->name('user_benutzer');
    Route::get('/dateien', [UserDashController::class,'dateien'])->name('user_dateien');
    Route::get('/einstellungen', [UserDashController::class,'einstellungen'])->name('user_einstellungen');
});
