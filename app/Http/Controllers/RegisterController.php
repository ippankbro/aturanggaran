<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index',[
            'title'=>'Halaman Register Req'
        ]);
    }
    public function store(Request $request){
       
        $validatedData = $request->validate([
            'name'=> 'required|min:3|max:255',
            'email'=>'required|unique:users|email:dns',
            'password'=>'required'
        ]);
    $validatedData['password'] = Hash::make($validatedData['password']);

    User::create($validatedData);
    // $request->session()->flash('success', 'Registrasi berhasil silahkan login');
    return redirect('/login')->with('success', 'Registrasi berhasil silahkan login');
    }
}
