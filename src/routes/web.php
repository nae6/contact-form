<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;


Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);

require __DIR__.'/auth.php';

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin');

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth'])->name('dashboard');