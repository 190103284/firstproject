<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
       $posts = Post::all();
    return view ('blog.index')->with(['post' => $posts]);
    }


    public function store (Request $request){
        Post::create([
                  'id'=>$request->id,
                  'title'=>$request->title,
                  'body'=>$request->body,
                  'timestamps'=>$request->timestamps

        ]);
        return back();
    }
        public function get_post($id){
        $postss = Post::find($id);

        if($postss == null)
        return response(['message' => 'this id does not exist'],404);

        return view ('blog.detail')->with(['post' => $postss]);
    }
}