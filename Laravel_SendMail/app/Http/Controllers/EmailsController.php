<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailsController extends Controller
{
    public function index(){
        return view('emails');
    }
    public function send(Request $request){
       
        $data = [
            'name' => $request->name,
            'image' => $request->file('image')
        ];
        $to = 'sabinashaganova23@gmail.com';
        \Mail::to($to) -> send(new \App\Mail\EmailsMail($data));

        echo 'Sending will be successfully';
    }
}
