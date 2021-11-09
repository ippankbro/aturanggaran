<?php

namespace App\Http\Controllers;

use App\Models\Rencana;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kategori.index',[
            'title'=>'Master Kategori',
            'kategoris'=> Kategori::all(),
            'page' => 'kategori'
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('kategori.tambah',[
            'title'=>'Form Tambah Kategori',
            'types' => ['pendapatan','pengeluaran'],
            'rencanas' => Rencana::all()
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
            'nama' => 'required|unique:kategoris|min:3|max:25',
            'type' => 'required',
            'rencana_id' => 'required',
            'catatan' => 'max:255' 
        ]);

        // dd('validasi berhasil');
            Kategori::create($validateData);
            return redirect('kategoris')->with('success','Tambah Data berhasil');
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
    public function edit(Kategori $kategori)
    {
        
        return view('kategori.edit',[
            'title'=>'Form Edit Kategori',
            'kategori'=>$kategori,
            'types' => ['pendapatan','pengeluaran'],
            'rencanas' => Rencana::all()
        ]);

        
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Kategori $kategori)
    {
        //
        $validateData = $request->validate([
            'nama' => 'required|unique:kategoris|min:3|max:25',
            'type' => 'required',
            'rencana_id' => 'required',
            'catatan' => 'max:255' 
        ]);
        Kategori::find($kategori->id)->update($validateData);
        return redirect('kategoris')->with('success','Edit Data berhasil');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        //
        Kategori::destroy($kategori->id);
        return redirect('/kategoris')->with('success', 'Hapus data berhasil');
    }
    public function getData(){
        return Kategori::all();
    }
}
