<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserDashController;
use App\Http\Controllers\AdminDashController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;


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
    Route::get('/register_inst', App\Http\Livewire\Auth\RegisterInst::class)->name('register_inst');
    Route::get('/register_privat', App\Http\Livewire\Auth\RegisterPrivat::class)->name('register_privat');
    Route::get('/login',App\Http\Livewire\Auth\Login::class)->name('login');
});

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/user/dashboard', App\Http\Livewire\User\Uebersicht::class)->name('user_dashboard');
    Route::get('/user/antraege', App\Http\Livewire\User\Antraege::class)->name('user_antraege');
    Route::get('/user/antrag/{application_id}', App\Http\Livewire\User\Antrag::class)->name('user_antrag');
    Route::get('/user/gesuch', App\Http\Livewire\User\Gesuch::class)->name('user_gesuch');
    Route::get('/user/nachrichten', App\Http\Livewire\User\Message::class)->name('user_nachrichten');
    Route::get('/user/profile', App\Http\Livewire\User\Profile::class)->name('user_profile');
    Route::get('/user/dateien', App\Http\Livewire\User\Datei::class)->name('user_dateien');
    Route::get('/logout',App\Http\Livewire\Auth\Logout::class)->name('logout');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin/dashboard', [AdminDashController::class,'index'])->name('admin_dashboard');
    Route::get('/admin/users', App\Http\Livewire\Admin\Users::class)->name('admin_users');
    Route::get('/admin/antrag/{application_id}', App\Http\Livewire\Admin\Antrag::class)->name('admin_antrag');
    Route::get('/admin/applications', App\Http\Livewire\Admin\Applications::class)->name('admin_applications');
    Route::get('/admin/projects', App\Http\Livewire\Admin\Projects::class)->name('admin_projects');
    Route::get('/admin/settings', App\Http\Livewire\Admin\Settings::class)->name('admin_settings');
    Route::get('/logout',App\Http\Livewire\Auth\Logout::class)->name('logout');
});


Route::middleware('guest')->group(function () {
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

});