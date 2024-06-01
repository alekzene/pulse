<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 
    'showLoginForm'
])->name('login');

Route::post('/login', [AuthController::class, 
    'login'
]);

Route::get('/create-acct', function () {
    return view('create-acct');
})->name('create-acct');

Route::post('/create-acct', [AuthController::class, 
    'createAccount'
])->name('create-acct');

///////////////////
Route::get('/tables', [AuthController::class, 
    'index'                 //Use this for chekcking users in the database for logging in
])->name('tables');         //just use the tables path
//////////////////

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::post('/help', [AuthController::class, 
    'Help'
])->name('help');

Route::get('/feed', function () {
    return view('feed');
});

// ->middleware('auth');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/reset-pass', function () {
    return view('reset-pass');
});

Route::get('/reset-pass-done', function () {
    return view('reset-pass-done');
})->name('reset-pass-done');

 Route::get('/search-result', function () {
    return view('search-result');
});

Route::get('/notification', function () {
    return view('notification');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/privacy-change-email', function () {
    return view('privacy-change-email');
});

Route::get('/privacy-change-password', function () {
    return view('privacy-change-password');
});