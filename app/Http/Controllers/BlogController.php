<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function test(){
$posts = Post::all();

return view ('blog.index')->with(['post' => $posts]);
    }
}
