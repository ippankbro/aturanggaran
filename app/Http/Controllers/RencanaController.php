<?php

namespace App\Http\Controllers;

use App\Models\Rencana;
use Illuminate\Http\Request;

class RencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('rencana.index',[
            'title'=>'Master Perencanaan',
            'rencanas'=>Rencana::all()
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
        return view('rencana.tambah',[
            'title'=>'Tambah data rencana'
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
        $validateData = $request->validate([
            'nama'=>'required|min:3|max:25',
            'pagu'=>'required|integer',
            'catatan'=>'max:255',
        ]);

        Rencana::create($validateData);
        return redirect('rencanas')->with('success','Input data rencana berhasil ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function show(Rencana $rencana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function edit(Rencana $rencana)
    {
        //
       return view('rencana.edit',[
           'title'=>'Edit Data Rencana',
           'rencana'=> $rencana
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rencana $rencana)
    {
        //
        $validateData = $request->validate([
            'nama'=>'required|min:3|max:25',
            'pagu'=>'required|integer',
            'catatan'=>'max:255',
        ]);

        Rencana::find($rencana->id)->update($validateData);
        return redirect('rencanas')->with('success','Edit data rencana berhasil ');
        // return $validateData;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rencana $rencana)
    {
        //
        Rencana::destroy($rencana->id);
        return redirect('rencanas')->with('success','Hapus data berhasil ');
    }
}
