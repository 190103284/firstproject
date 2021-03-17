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
    //Return post which id is equal to post_id

    public function accept_post_id(Request $request){
        $post = Post::find($request->post_id);

        if ($post == null){
            return response (['message' => 'There is no such post'] , 404);
        }
     
        return response ($post , 200);
    }
}


