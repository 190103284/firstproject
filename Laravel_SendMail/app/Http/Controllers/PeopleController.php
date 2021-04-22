<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Schemes;

class PeopleController extends Controller
{
    public function addPeople(){
    $people = new People();
    $people->name = "Ermek";
    $people->surname = "Armanov";
    $people->email = "ermekarmanovgmail.com";
    $people->save();
    return "People sent the schema successfully !";
    }



public function addSchemes($id){
    $people = People::find($id);
    $schemes = new Schemes();
    $schemes->schema = "We receive third schema!";
    $schemes->count_of_schemes = "four";
    $people->schemes()->save($schemes);
    return "We received  schema from a client!";
}

public function getSchemaByUser($id){
    $schemes = People::find($id)->schemes;
    return $schemes;
}

}