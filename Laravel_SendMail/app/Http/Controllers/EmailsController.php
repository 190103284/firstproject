<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class EmailsController extends Controller
{
    public function index(){
        return view('emails');
    }


    public function show(){
        return view('form');
    }

    public function saveform(Request $request){
        return $request->input();
    }


public function store(Request $request){
   
    
        dd($request->all());
        $form = Form::create([
            'name'=>$request->input('name'),
            'surname'=>$request->input('surname'),
            'email'=>$request->input('email'),
        ]);
        return redirect('/form');
    
   
}

    public function send(Request $request){
       
        $data = [

            'name' => $request->name,
            'surname' => $request -> surname,
            'image' => $request->file('image')
        ];
        $to = 'sabinashaganova23@gmail.com';
        \Mail::to($to) -> send(new \App\Mail\EmailsMail($data));

        echo 'Your email successfully sent';
    }
}
