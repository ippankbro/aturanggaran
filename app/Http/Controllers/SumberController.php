<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sumber;
use App\Models\User;


class SumberController extends Controller
{

    public function index()
    {
        return view('sumber.index', [
            'title' => 'Master Sumber',
            'sumbers' => Sumber::all()
        ]);
    }

    public function create()
    {
        return view('sumber.tambah', [
            'title' => 'Tambah Data Sumber',
            'users' => User::all()
        ]);
    }
    public function store(Request $request)
    {
        // return $request->all();
        $validateData = $request->validate([
            'nama' => 'required|min:5|max:25|unique:sumbers,nama',
            'norek' => 'required|min:5|max:15',
            'user_id' => 'required',
            'catatan' => 'max:255'
        ]);
        Sumber::create($validateData);
        return redirect('/sumbers')->with('success', 'Tambah data berhasil');
    }
    public function destroy(Sumber $sumber)
    {

        Sumber::destroy($sumber->id);
        return redirect('/sumbers')->with('success', 'Hapus data berhasil');
    }
    public function edit(Sumber $sumber)
    {
        return view('sumber.edit', [
            'title' => 'Edit Data Sumber',
            'sumber' => $sumber,
            'users' => User::all()
        ]);
        // return $sumber;
    }
    public function update(Request $request, Sumber $sumber)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:5|max:25|unique:sumbers,nama',
            'norek' => 'required|min:5|max:15',
            'user_id' => 'required',
            'catatan' => 'max:255'
        ]);
        Sumber::find($sumber->id)->update($validateData);
        return redirect('/sumbers')->with('success', 'Update data berhasil');
    }
}
