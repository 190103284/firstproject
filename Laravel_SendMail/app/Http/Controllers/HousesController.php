<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Houses;
use App\Models\User;

class HousesController extends Controller
{
    public function addHouses(){
        $houses= [
            ["view"=>"Cottage"],
            ["view"=>"Multi-family"],
            ["view"=>"Palace"],
            ["view"=>"Underground House"],
            ["view"=>"Villa"],
        ];
        Houses::insert($houses);
        return "We received information about houses!";
    }
    public function addUser(){
        $user = new User();
        $user->name = "Zhaniya";
        $user->email = "eernurzhaniya@gmail.com";
        $user->password = encrypt('secret');
        $user->save();
        $houseids = [3,5];
        $user->houses()->attach($houseids);
        return "Record has been created successfully!";
    }    

    public function getAllHousesByCustomers($id){
        $user = User::find($id);
        $houses = $user->houses;
        return $houses;

    }

    public function getAllCustomersByHouses($id){
        $houses = Houses::find($id);
        $users = $houses->users;
        return $users;
    }
}
