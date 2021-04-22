<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;

class UserController extends Controller
{
    public function insertRecord(){
        $contact = new Contact();
        $contact->contact_phone = "+77772589641";
        $user = new User();
        $user->name = "Iliyas";
        $user->email = "iliyaskuanysh@gmail.com";
        $user->password = encrypt('secret');
        $user->save();
        $user->contact()->save($contact);
        return "Record has been created successfully!";
    }

    public function fetchContactByUser($id){
        $contact = User::find($id)->contact;
        return $contact;
    }
}
