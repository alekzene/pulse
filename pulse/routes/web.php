<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\ProfileController;

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
])->name('tables');         //just use the tables path //also shows the unhashed password
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

Route::get('/reset-pass', function () {
    return view('reset-pass');
});

Route::post('/reset-password', [AuthController::class, 
    'resetPassword'
])->name('reset-password');

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
})->name('privacy');

Route::get('/privacy-change-email', function () {
    return view('privacy-change-email');
})->name('privacy-change-email');

Route::post('/update-email', [AuthController::class, 
    'updateEmail'
])->name('update-email');

Route::get('/privacy-change-password', function () {
    return view('privacy-change-password');
})->name('privacy-change-password');

Route::post('/update-password', [AuthController::class, 
    'updatePassword'
])->name('update-password');

Route::get('/create-post', function () {
    return view('create-post');
})->name('create-post');

Route::post('/logout', [AuthController::class,
        'logout'
 ])->name('logout');

 Route::get('/help-2', function () {
    return view('help-2');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile-2', [UserInfoController::class, 
    'showProfile'
])->name('profile-2');

Route::post('/update-user-info', [UserInfoController::class, 
    'updateUserInfo'
])->name('update-user-info');

Route::post('/update-user-bio', [UserInfoController::class, 
    'updateUserBio'
])->name('update-user-bio');

Route::post('/upload-profile-image', [ProfileController::class, 
    'uploadProfileImage'
]);

Route::post('/update-profile-image-url', [ProfileController::class, 
    'updateProfileImageUrl'
]);

Route::get('/navbar', [ProfileController::class, 
    'getProfileInfo'
]);