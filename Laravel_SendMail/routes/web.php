<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\ThirdController;


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



//Project
Route::get('/emails', 'EmailsController@index')->name('emails');
Route::post('/emails/send', 'EmailsController@send')->name('emails.send');

Route::get('/form' , 'EmailsController@show');
//Route::post('/forms', 'EmailsController@store')->name('addimage');


//Route::post('/save' , 'EmailsController@saveform')->name('addimage');

//Route::get('post', [EmailsController::class ,'index']);

Route::get('locale/{locale}', function($locale){
    \Session::put('locale',$locale);
    return redirect()->back();
});
//Project
Route::get('/emails/send' ,[SecondController:: class ,'local'],'EmailsController@index')->name('emails.send');
Route::get('/back' , [ThirdController:: class , 'back']);


Route::post('/store' , [EmailsController::class, 'store'])->name('addimage');

/*

Route::get('/{lang}', function($index){
    App::setlocale($locale);
    return view('website');
});*/
//Project
Route::get('website' ,[ServiceController:: class ,'service']);
Route::get('/website/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('website');
});

//Project
Route::get('/emails/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('emails');
});

//Project
Route::get('/emails/send/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('back');
});
