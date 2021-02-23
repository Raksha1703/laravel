<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/add', [CustomerController::class, 'add'])->name('save.add');
Route::post('/add', [CustomerController::class, 'save'])->name('save.add');
Route::get('/display', [CustomerController::class, 'list']);
Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('edit.add');
Route::get('/delete/{id}', [CustomerController::class, 'delete']);
Route::get('/update/{id}', [CustomerController::class, 'update'])->name('update.add');






