<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
class UserController extends Controller
{
    public function index(){
        $data=User::with('latestpost')->get();
        return $data;
        return view('user',compact('data'));
    }    
}
