<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplyNowController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/apply-now', [ApplyNowController::class, 'index'])->name('apply.index');
// Route::post('/', [ApplyNowController::class, 'store'])->name('apply.store');
Route::controller(ApplyNowController::class)->prefix('apply-now')->group(function () {
    Route::get('/', 'index')->name('apply.index');
    Route::get('/create', 'create')->name('apply.create');
    Route::post('/', 'store')->name('apply.store');
});
