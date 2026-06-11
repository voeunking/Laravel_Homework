<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories',[CategoryController::class,'index'])
->name('categories.index');
Route::get('/categories/create',[CategoryController::class,'create'])
->name('categories.create');
Route::post('/categories/store', [CategoryController::class,'store'])
  ->name('categories.store');
Route::get('/categories/show', [CategoryController::class, 'show'])
  ->name('categories.show');
Route::get('/categories/{id}', [CategoryController::class, 'edit'])
  ->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])
    ->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])
    ->name('categories.destroy');
