<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('pulse_Welcome');
});

Route::get('/help', function () {
    return view('Help');
});

Route::get('/newsfeed', function () {
    return view('NewsFeed');
});
