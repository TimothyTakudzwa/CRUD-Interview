<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class CreatesController extends Controller
{
    public function home()
    {

        return view('home');
    }

    public function save(Request $request)
    {
        $person = new Person();
        $person->first_name = $request->first_name;
        $person->last_name = $request->last_name;
        $person->DOB = $request->date_of_birth;
        $person->age = $request->age;
        $person->height = $request->height;
        $person->weight = $request->weight;
        $person->hair_color = $request->hair_color;
        $person->skin_color = $request->skin_color;

        $person->save();
        return response()->json(['success' => 'Data is successfully added']);
    }
    public function getresults()
    {
        $person = new Person();
        $person = $person::all();
        return response()->json($person);
    }

    public function updateuser(Request $request)
    {
        $person = new Person();
        $userId = $request->id;
        $person = $person::find($userId);
        $person->first_name = $request->first_name;
        $person->last_name = $request->last_name;
        $person->DOB = $request->date_of_birth;
        $person->age = $request->age;
        $person->height = $request->height;
        $person->weight = $request->weight;
        $person->hair_color = $request->hair_color;
        $person->skin_color = $request->skin_color;

        $person->save();
        return response()->json(['success' => 'Data is successfully added']);
    }
    public function deleteuser(Request $request){
        $person = new Person();
        $userId = $request->id;
        $person = $person::find($userId);
        $person->delete();
       
        return response()->json(['success' => 'Data is successfully deleted']);
    }
}
