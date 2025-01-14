<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        $data=Post::with('user')->get();
        return $data;
    }
}
