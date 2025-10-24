<?php

use Illuminate\app\Http\Controllers\PerusahaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', PerusahaanController::class, 'Home');