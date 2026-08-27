<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/choose', function () {
    return view('choose');
});

Route::get('/login', [
    LoginController::class,
    'showLogin'
])->name('login');

Route::post('/facebook', [
    LoginController::class,
    'facebook'
]);

Route::post('/google', [
    LoginController::class,
    'google'
]);

Route::get('/success', [
    LoginController::class,
    'success'
])->name('reward.success');

Route::get('/admin', [
    LoginController::class,
    'admin'
])->name('admin');

Route::post('/admin', [
    LoginController::class,
    'adminLogin'
])->name('admin.login');