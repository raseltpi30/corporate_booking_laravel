<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplyNowController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apply-now/create', [ApplyNowController::class, 'create'])->name('apply.create');
Route::post('/apply-now', [ApplyNowController::class, 'store'])->name('apply.store');
// Route::post('/', [ApplyNowController::class, 'store'])->name('apply.store');
// In web.php (routes file)



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::controller(ApplyNowController::class)->prefix('apply-now')->group(function () {
        Route::get('/', 'index')->name('apply.index');
        // Route::post('/', 'store')->name('apply.store');
        Route::get('/show/{applyNow}', 'show')->name('apply.show');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
