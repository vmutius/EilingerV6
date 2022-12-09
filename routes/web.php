<?php

use App\Http\Livewire\Auth\RegisterInst;
use App\Http\Livewire\Auth\Login;
use App\Http\Controllers\HomeController;

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

});


Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register_inst', RegisterInst::class)->name('register_inst');
});


//Fallback Route definieren
