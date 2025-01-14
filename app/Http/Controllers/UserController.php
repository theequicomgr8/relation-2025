<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        //$data=User::with('post')->get();
        

        $data=User::with('post')->whereHas('post',function($query){
            $query->where('id',4);
        })->get();
        //dd($data);
        return $data;
    }    
}
