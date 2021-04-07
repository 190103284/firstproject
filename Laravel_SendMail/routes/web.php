<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailsController;
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




Route::get('/emails', 'EmailsController@index')->name('emails');
Route::post('/emails/send', 'EmailsController@send')->name('emails.send');

Route::get('/form' , 'EmailsController@show');
//Route::post('/forms', 'EmailsController@store')->name('addimage');


//Route::post('/save' , 'EmailsController@saveform')->name('addimage');

Route::get('post', [EmailsController::class ,'index']);




Route::post('/store' , [EmailsController::class, 'store'])->name('addimage');
