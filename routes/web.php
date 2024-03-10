<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\TwoFactorController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\ProfileController;
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
    return redirect(app()->getLocale());
});

Route::group(['prefix' => '{locale}', 'middleware' => 'setLocale'], function () {
    Route::view('/', 'home.index')->name('index');
    Route::view('disclaimer', 'home.disclaimer')->name('disclaimer');
    Route::view('impressum', 'home.impressum')->name('impressum');
    Route::view('datenschutz', 'home.datenschutz')->name('datenschutz');
    Route::get('verify/resend', [TwoFactorController::class, 'resend'])->name('verify.resend');
    Route::resource('verify', TwoFactorController::class)->only(['index', 'store']);

    Route::middleware('guest')->group(function () {
        Route::get('register-inst', App\Http\Livewire\Auth\RegisterInst::class)->name('registerInst');
        Route::get('register-privat', App\Http\Livewire\Auth\RegisterPrivat::class)->name('registerPrivat');
        Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('login', [AuthenticatedSessionController::class, 'store']);
    });
    //TODO: 'twofactor' muss hier und bei Admin wieder rein
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('user/dashboard', App\Http\Livewire\User\Uebersicht::class)->name('user_dashboard');
        Route::get('user/antraege', App\Http\Livewire\User\Antraege::class)->name('user_antraege');
        Route::get('user/antrag/{application_id}', App\Http\Livewire\User\Antrag::class)->name('user_antrag');
        Route::get('user/gesuch', App\Http\Livewire\User\Gesuch::class)->name('user_gesuch');
        Route::get('user/nachrichten', App\Http\Livewire\User\AllMessages::class)->name('user_nachrichten');
        Route::get('user/nachricht/{application_id}', App\Http\Livewire\User\Message::class)->name('user_nachricht');
        Route::get('user/profile', [ProfileController::class, 'edit'])->name('user_profile.edit');
        Route::patch('user/profile', [ProfileController::class, 'update'])->name('user_profile.update');
        Route::get('user/dateien', App\Http\Livewire\User\Datei::class)->name('user_dateien');
        Route::get('user/delete', App\Http\Livewire\User\DeleteAccount::class)->name('user_delete');
        //Route::delete('user/delete', App\Http\Livewire\User\DeleteAccount::class)->name('user_delete');
    });

    Route::group(['middleware' => ['admin']], function () {
        Route::get('admin/dashboard', App\Http\Livewire\Admin\Uebersicht::class)->name('admin_dashboard');
        Route::get('admin/users', App\Http\Livewire\Admin\Users::class)->name('admin_users');
        Route::get('admin/antrag/{application_id}', App\Http\Livewire\Admin\Antrag::class)->name('admin_antrag');
        Route::get('admin/applications', App\Http\Livewire\Admin\Applications::class)->name('admin_applications');
        Route::get('admin/projects', App\Http\Livewire\Admin\Projects::class)->name('admin_projects');
        Route::get('admin/settings', App\Http\Livewire\Admin\Settings::class)->name('admin_settings');
        Route::get('admin/profile', [ProfileController::class, 'edit'])->name('admin_profile.edit');
        Route::patch('admin/profile', [ProfileController::class, 'update'])->name('admin_profile.update');
    });

    Route::middleware('guest')->group(function () {
        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
        Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
    });

    Route::middleware('auth')->group(function () {
        Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');
        Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
        Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')
            ->name('verification.send');
        Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
        Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
        Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
        Route::put('password', [PasswordController::class, 'update'])->name('password.update');
        Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    });
});
