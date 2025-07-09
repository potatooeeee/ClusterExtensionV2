<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\InputFormController;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

// Email Verification Routes
Route::get('/email/verify', function () {
    return view('auth.verify-email'); // create this view
})->middleware('auth')->name('verification.notice');

use App\Http\Controllers\EmailVerificationController;

Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])
    ->middleware(['signed']) // no auth required!
    ->name('verification.verify');
    
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Show Login Page
Route::get('/', function () {
    return view('login');
})->name('login');

// Register
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Logout
Route::post('/logout', function () {
    Auth::logout();
    Session::flush(); // Optional: clear all session data
    return redirect()->route('login');
})->name('logout');

// Input Form Page (Protected)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/input-form', function () {
        return view('input_form');
    })->name('input_form');

    Route::get('/work-financial-plan', function () {
        return view('work_financial_plan');
    })->name('work_financial_plan');
});


// Handle Form Submission from JS
Route::post('/save-input-form', [InputFormController::class, 'store'])->name('input_form.save');
