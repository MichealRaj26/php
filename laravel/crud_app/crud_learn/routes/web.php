<?php

use App\Http\Controllers\BasicCrudController;
use Illuminate\Support\Facades\Route;

Route::get('/basic-crud', [BasicCrudController::class, 'index'])->name('basic_crud.index');
Route::get('/basic-crud/create', [BasicCrudController::class, 'create'])->name('basic_crud.create');
Route::post('/basic-crud', [BasicCrudController::class, 'store'])->name('basic_crud.store');
Route::get('/basic-crud/edit/{id}', [BasicCrudController::class, 'edit'])->name('basic_crud.edit');
Route::put('/basic-crud/{id}', [BasicCrudController::class, 'update'])->name('basic_crud.update');
Route::get('/basic-crud/{id}', [BasicCrudController::class, 'destroy'])->name('basic_crud.delete');