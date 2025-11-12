<?php

use App\Http\Controllers\PerusahaanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PerusahaanController::class, 'Home']);
Route::get('about', [PerusahaanController::class, 'About']);
// Route::get('contact', [PerusahaanController::class, 'contact']);
Route::get('/contact', [PerusahaanController::class, 'contact'])->name('contact');
Route::post('/contact', [PerusahaanController::class, 'sendMessage'])->name('contact.send');
