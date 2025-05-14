<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;git branch -m main

Route::post('register1',[AuthController::class,'store']);
Route::post('logn1',[AuthController::class,'login']);








Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
