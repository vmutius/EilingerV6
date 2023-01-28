<?php

use App\Http\Livewire\Auth\RegisterInst;
use App\Http\Livewire\Auth\RegisterPrivat;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Password\Reset;
use App\Http\Livewire\User\Antrag;
use App\Http\Livewire\User\Profile;
use App\Http\Livewire\User\Gesuch;
use App\Http\Livewire\User\Message;
use App\Http\Livewire\User\Datei;
use App\Http\Livewire\User\Settings;
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
    Route::get('/login',Login::class)->name('login');
    Route::get('/reset', Reset::class)->name('password_reset');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserDashController::class,'index'])->name('user_dashboard');
    Route::get('/antrag', Antrag::class)->name('user_antrag');
    Route::get('/gesuch', Gesuch::class)->name('user_gesuch');
    Route::get('/nachrichten', Message::class)->name('user_nachrichten');
    Route::get('/profile', Profile::class)->name('user_profile');
    Route::get('/dateien', Datei::class)->name('user_dateien');
    Route::get('/einstellungen', Settings::class)->name('user_einstellungen');
});
