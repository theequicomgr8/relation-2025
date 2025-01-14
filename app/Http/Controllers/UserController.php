<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
class UserController extends Controller
{
    public function index(){
        // $users = User::with('company')->get();
        $users = User::with('company')->whereHas('company',function($query){
            $query->where('name','like','%Yahoo%');
        })->get();
        return $users;
    }

    
}
