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
}
