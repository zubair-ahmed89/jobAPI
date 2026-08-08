<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobtypeController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users',[UsersController::class,'fatch']);
Route::post('/users/create',[UsersController::class,'create']);

// Job Type All route
Route::post('/jobinsert',[JobtypeController::class,'insert']);
Route::get('/jobget',[JobtypeController::class,'fetch']);

Route::delete('/typedelete/{id}',[JobtypeController::class,'delete']);
Route::put('/typeupdate/{id}',[JobtypeController::class,'update']);


//user register all route
Route::post('/register',[AuthController::class,'register']);
//Route::get('/jobget',[AuthController::class,'fetch']);


