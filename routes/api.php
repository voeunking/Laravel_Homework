<?php

use App\Http\Controllers\API\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/categories', [CategoryController::class, 'index'])->name('api.categories.index');
Route::post('/categories', [CategoryController::class, 'store'])->name('api.categories.store');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('api.categories.show');
Route::match(['put', 'patch'], '/categories/{category}', [CategoryController::class, 'update'])->name('api.categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('api.categories.destroy');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
