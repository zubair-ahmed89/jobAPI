<?php

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users',[UsersController::class,'fatch']);
