<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



//user_id store in coumany table and in phone_number table store company_id
Route::get('/',[UserController::class,'index']);


