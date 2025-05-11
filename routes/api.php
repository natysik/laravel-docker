<?php

use App\Http\Controllers\Api\Book\{
	DestroyController,
	IndexController,
	ShowController,
	StorageController,
	UpdateController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
	return $request->user();
})->middleware('auth:sanctum');

Route::get('/book', IndexController::class);
Route::get('/book/{id}', ShowController::class);
Route::post('/books', StorageController::class);
Route::patch('/books/{id}', UpdateController::class);
Route::delete('/book/{id}', DestroyController::class);