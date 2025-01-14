<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
class UserController extends Controller
{
    //user_id sstore in coumany table and in phone_number table store company_id
    public function index(){
        $data=User::with('getnumber')->with('company')->get();
        //return $data;
        return view('user',compact('data'));
    }    
}
