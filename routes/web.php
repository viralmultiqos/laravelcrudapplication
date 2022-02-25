<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('contact',[ContactController::class,'index']);
Route::get('create',[ContactController::class,'create']);
Route::post('store',[ContactController::class,'store']);
Route::get('edit/{id}',[ContactController::class,'edit']);
Route::post('update/{id}',[ContactController::class,'update']);
