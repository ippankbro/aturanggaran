<?php

namespace App\Http\Controllers;

use App\Models\Sumber;
use App\Models\Kategori;
use App\Models\Pendapatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendapatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pendapatan.index',[
            'title' => 'Data Pendapatan',
            'pendapatans'=> Pendapatan::all()
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
        return view('pendapatan.tambah',[
            'title'=> 'Tambah Data pendapatan',
            'sumbers'=>Sumber::all(),
            'kategoris'=>Kategori::where('type','pendapatan')->get(),
            // 'user_id'=>Auth::user()->id
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
            'sumber_id'=>'required',
            'nominal'=>'required|integer',
            'kategori_id'=>'required',
            'catatan' => 'required|min:3|max:255'
        ]);
        $validateData['user_id'] = Auth::user()->id;

        // return $validateData;
        Pendapatan::create($validateData);
        return redirect('pendapatans')->with('success','Tambah Data Pendapatan berhasil');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendapatan $pendapatan)
    {
        //
        return view('pendapatan.edit',[
            'title'=> 'Edit Data Pendapatan',
            'sumbers'=>Sumber::all(),
            'kategoris'=>Kategori::where('type','Pendapatan')->get(),
            'pendapatan'=>$pendapatan
            // 'user_id'=>Auth::user()->id
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendapatan $pendapatan)
    {
        //
        $validateData = $request->validate([
            'sumber_id'=>'required',
            'nominal'=>'required|integer',
            'kategori_id'=>'required',
            'catatan' => 'required|min:3|max:255'
        ]);
        $validateData['user_id'] = Auth::user()->id;

        Pendapatan::find($pendapatan->id)->update($validateData);
        return redirect('pendapatans')->with('success','Edit Data pendapatan berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendapatan $pendapatan)
    {
        //
        Pendapatan::destroy($pendapatan->id);
        return redirect('pendapatans')->with('success', 'Hapus data berhasil');
    }
}
