<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sample');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/feed', function () {
    return view('feed');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/reset-pass', function () {
    return view('reset-pass');
});

Route::get('/create-acct', function () {
     return view('create-acct');
});

 Route::get('/reset-pass-done', function () {
     return view('reset-pass-done');
 });