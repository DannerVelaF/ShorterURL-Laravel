<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\URLController;
use Illuminate\Support\Facades\Route;

Route::get('/', [URLController::class, 'index']);
Route::get('/list', [URLController::class, 'list']);

Route::post('/store', [URLController::class, 'store'])->name('store');
Route::get('/{short_url}', [URLController::class, 'redirect'])->name('redirect');


require __DIR__ . '/auth.php';
