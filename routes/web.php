<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

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

