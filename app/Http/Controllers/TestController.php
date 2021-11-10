<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
     $data = User::all();
    
        return $data;
    }

    public function postDataTest(Request $request){

        return $request;
        // return User::all();
        // $data = ["a"=>"aba"];
        // return $data;

    }
}
