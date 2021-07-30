<?php

use App\Http\Controllers\DineController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\PostController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home');
});


Route::get('/pricelist', function () {
    return view('Price List');
});

Route::get('/faqs', function () {
    return view('Faqs');
});


Route::get('equipments-main', [MainController::class, 'mainEquipment']);

Route::get('equipments-dine', [DineController::class, 'dineEquipment']);

Route::get('equipments-support', [SupportController::class, 'supportEquipment']);

Route::get('deskripsi', [DeskripsiController::class, 'deskripsiBarang']);

Route::get('posts/{slug}', [PostController::class, 'show']);
