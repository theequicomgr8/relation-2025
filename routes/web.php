<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;


Route::get('/',[UserController::class,'index']);

Route::get('/belongs',[CompanyController::class,'index']);
