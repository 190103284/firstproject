<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ApiController extends Controller
{
    //Test function return all posts in your database

    public function test(Request $request ){
        $tests = Post::orderBy('id')->take(5)->get();
        

        return response($tests, 200);
    }
}
