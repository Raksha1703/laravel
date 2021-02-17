<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/add', [CustomerController::class, 'add'])->name('save.add');
Route::post('/add', [CustomerController::class, 'save'])->name('save.add');
Route::get('/display', [CustomerController::class, 'list']);




