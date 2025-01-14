<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
class CompanyController extends Controller
{
    public function index(){
        $data=Company::with('user')->get();
        return $data;
    }
}
