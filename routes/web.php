<?php

use App\Http\Controllers\PostController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home');
});

Route::get('/admin', function () {
    return view('Admin');
});

Route::get('/customer', function () {
    return view('Customer');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('posts/{slug}', [PostController::class, 'show']);
