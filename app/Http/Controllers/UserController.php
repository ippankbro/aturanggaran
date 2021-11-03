<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.index',[
            'title'=>'Master User',
            'users'=> User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.tambah',[
            'title'=>'Form Tambah User',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $validatedData = $request->validate([
            'name'=> 'required|min:3|max:255',
            'email'=>'required|unique:users|email:dns',
            'password'=>'required'
        ]);
    $validatedData['password'] = Hash::make($validatedData['password']);

    User::create($validatedData);
    // $request->session()->flash('success', 'Registrasi berhasil silahkan login');
    return redirect('users')->with('success', 'Tambah data user berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        
        return view('user.edit',[
            'title'=>'Form Edit User',
            'user' => $user
        ]);

      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $validatedData = $request->validate([
            'name'=> 'required|min:3|max:255',
            'email'=>'required|unique:users|email:dns',
            'password'=>'required'
        ]);
    $validatedData['password'] = Hash::make($validatedData['password']);

    User::find($user->id)->update($validatedData);
    return redirect('users')->with('success', 'Ubah data berhasil');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function destroy(User $user)
    {
        //
        User::destroy($user->id);
        return redirect('/users')->with('success', 'Hapus data berhasil');
    }
}
