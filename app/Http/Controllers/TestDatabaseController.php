<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestDatabase;

class TestDatabaseController extends Controller
{
    public function inputName(){
        return view('testDatabase.input');
    }

    public function saveName(Request $request){
        $data = new TestDatabase;
        $data->name = $request->get('name');
        $data->save();

        return "Oke";
    }
}
