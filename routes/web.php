<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;



Route::get('/',[UserController::class,'index']);

Route::get('/belongs',[PostController::class,'index']);
