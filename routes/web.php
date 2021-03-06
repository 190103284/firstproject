<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post/create' , function(){
    DB::table('post')->insert([
        'ID' => '21013567',
        'title' => 'Planet',
        'body' => 'A planet is a general term given to a relatively large mass of accreted matter in orbit around a star .',
        'timestamps' => '28 February'
    ]);
});




Route::get('/post' , function(){
    $post = Post::find(21013567);
    return $post;
});




Route::get('post', [BlogController::class ,'index']);

Route::get('blog/create' , function( ){
    return view('blog.create');
});


Route::post('blog/create' , [BlogController::class, 'store'])->name('add_client');

Route::get('post/{id}' , [BlogController::class , 'get_post']);

Route::get('/email', 'EmailController@create');
Route::post('/email', 'EmailController@sendEmail')->name('send.email');