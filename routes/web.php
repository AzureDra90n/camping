<?php

use App\Http\Controllers\PostController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home');
});

Route::get('/equipments-main', function () {
    return view('Main Equipments');
});

Route::get('/equipments-dine', function () {
    return view('Dine Equipments');
});

Route::get('/equipments-support', function () {
    return view('Support Equipments');
});

Route::get('/Pricelist', function () {
    return view('Price List');
});

Route::get('/faqs', function () {
    return view('Faqs');
});

Route::get('posts/{slug}', [PostController::class, 'show']);
