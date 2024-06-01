<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::post('/help', [AuthController::class, 'Help'] )->name('help');

Route::get('/feed', function () {
    return view('feed');
});

// ->middleware('auth');

Route::get('/profile', function () {
    return view('profile');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/reset-pass', function () {
    return view('reset-pass');
});

Route::get('/create-acct', function () {
    return view('create-acct');
})->name('create-acct');

Route::post('/create-acct', [AuthController::class, 'createAccount'])->name('create-acct');

Route::get('/reset-pass-done', function () {
    return view('reset-pass-done');
})->name('reset-pass-done');

 Route::get('/search-result', function () {
    return view('search-result');
});