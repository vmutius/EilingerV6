<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserDashController;
use App\Http\Controllers\AdminDashController;
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
    Route::get('/register_inst', App\Http\Livewire\Auth\RegisterInst::class)->name('register_inst');
    Route::get('/register_privat', App\Http\Livewire\Auth\RegisterPrivat::class)->name('register_privat');
    Route::get('/login',App\Http\Livewire\Auth\Login::class)->name('login');
    Route::get('/reset', App\Http\Livewire\Auth\Password\Reset::class)->name('password_reset');
});

Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard', [UserDashController::class,'index'])->name('user_dashboard');
    Route::get('/user/antrag', App\Http\Livewire\User\Antrag::class)->name('user_antrag');
    Route::get('/user/gesuch', App\Http\Livewire\User\Gesuch::class)->name('user_gesuch');
    Route::get('/user/nachrichten', App\Http\Livewire\User\Message::class)->name('user_nachrichten');
    Route::get('/user/profile', App\Http\Livewire\User\Profile::class)->name('user_profile');
    Route::get('/user/dateien', App\Http\Livewire\User\Datei::class)->name('user_dateien');
    Route::get('/user/einstellungen', App\Http\Livewire\User\Settings::class)->name('user_einstellungen');
});

Route::middleware('auth')->group(function() {
    Route::get('/admin/dashboard', [AdminDashController::class,'index'])->name('admin_dashboard');
    Route::get('/admin/users', App\Http\Livewire\Admin\Users::class)->name('admin_users');
});
