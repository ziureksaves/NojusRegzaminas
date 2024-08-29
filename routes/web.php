<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/products', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/skateboards/1', function () {
    return view('skateboards.1');
});
Route::get('/skateboards/2', function () {
    return view('skateboards.1');
});
Route::get('/skateboards/3', function () {
    return view('skateboards.1');
});
Route::get('/skateboards/4', function () {
    return view('skateboards.1');
});
Route::get('/skateboards/placeholder', function () {
    return view('skateboards.placeholder');
});