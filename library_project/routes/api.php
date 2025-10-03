<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users',[UserController::class, 'index']);
Route::get('/users/{id}',[UserController::class, 'show']);
Route::post('/users',[UserController::class, 'store']);
Route::put('/users/{id}',[UserController::class, 'update']);
Route::delete('/users/{id}',[UserController::class, 'destroy']);

Route::get('/book', function (Request $request) {
    return $request->book();
})->middleware('auth:sanctum');

Route::get('/book',[BookController::class, 'index']);
Route::get('/book/{id}',[BookController::class, 'show']);
Route::post('/book',[BookController::class, 'store']);
Route::put('/book/{id}',[BookController::class, 'update']);
Route::delete('/book/{id}',[BookController::class, 'destroy']);


