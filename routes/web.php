<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommendController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('clients',ClientController::class);
Route::resource('commends',CommendController::class);
