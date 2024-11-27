<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplyNowController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apply-now', [ApplyNowController::class, 'index'])->name('apply.index');
Route::post('/apply-now', [ApplyNowController::class, 'store'])->name('apply.store');
