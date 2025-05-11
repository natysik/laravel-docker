<?php

use App\Http\Controllers\Api\Book\{
	DestroyController,
	IndexController,
	ShowController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
	return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'book'], function(){
	Route::get('/', IndexController::class);
	Route::get('/{id}', ShowController::class);
	Route::delete('/{id}', DestroyController::class);
});
