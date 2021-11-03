<?php

namespace App\Http\Controllers;

use App\Models\Sumber;
use App\Models\Kategori;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pengeluaran.index',[
            'title'=>'Data Pengeluaran',
            'pengeluarans'=> Pengeluaran::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pengeluaran.tambah',[
            'title'=> 'Tambah Data Pengeluaran',
            'sumbers'=>Sumber::all(),
            'kategoris'=>Kategori::where('type','Pengeluaran')->get(),
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
        Pengeluaran::create($validateData);
        return redirect('pengeluarans')->with('success','Tambah Data pengeluaran berhasil');
      


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
    public function edit(Pengeluaran $pengeluaran)
    {
        
        return view('pengeluaran.edit',[
            'title'=> 'Edit Data Pengeluaran',
            'sumbers'=>Sumber::all(),
            'kategoris'=>Kategori::where('type','Pengeluaran')->get(),
            'pengeluaran'=>$pengeluaran
            // 'user_id'=>Auth::user()->id
        ]);

        // return $pengeluaran;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengeluaran $pengeluaran)
    {
        //
        $validateData = $request->validate([
            'sumber_id'=>'required',
            'nominal'=>'required|integer',
            'kategori_id'=>'required',
            'catatan' => 'required|min:3|max:255'
        ]);
        $validateData['user_id'] = Auth::user()->id;

        Pengeluaran::find($pengeluaran->id)->update($validateData);
        return redirect('pengeluarans')->with('success','Edit Data pengeluaran berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengeluaran $pengeluaran)
    {
        //
        Pengeluaran::destroy($pengeluaran->id);
        return redirect('pengeluarans')->with('success', 'Hapus data berhasil');

    }
}
