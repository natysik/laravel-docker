<?php

use App\Http\Controllers\Api\Book\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
	return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'book'], function(){
	Route::get('/', IndexController::class);
});
