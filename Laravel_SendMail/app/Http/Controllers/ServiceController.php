<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ServiceController extends Controller
{
    public function service($locale){
        App::setLocale($locale);
        return view("website");
    }
}
