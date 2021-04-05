<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
          'image' => 'required|mimes:jpeg|dimensions:min_width=1000,min_height=400'
        ]);
$image = $request -> file(key:'image')->storePublicly(path:'public/images/index');
dd($image);
        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content,
          'image' => $request->image
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}