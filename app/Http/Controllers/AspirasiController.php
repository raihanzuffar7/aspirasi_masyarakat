<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreaspirasiRequest;
use App\Http\Requests\UpdateaspirasiRequest;
use App\Models\aspirasi;
use Illuminate\Http\Request;
use App\Http\Controllers\StorageFileController;
use App\Models\Aspirasi as ModelsAspirasi;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspirasis = Aspirasi::all();
        return view('welcome', ['aspirasis'=>$aspirasis,"title" => "Home"]); 


    }
    public function admin(){
        $aspirasis = Aspirasi::all(); //untuk menampung semua variable yang ada di aspirasis
        return view('Admin',
        ['aspirasis'=>$aspirasis, 
        'title'=> 'admin'
    ]);
    }

    public function profile(){
        return view('Profile', ["title" => "Profile"]); 
    }

    public function post(Request $request) //menambahkan data
    {
        $inputs = $request->validate([
            'nik' => 'required|numeric',
            'id_kategori' => 'required',
            'lokasi' => 'required',
            'keterangan'=> 'required',
        ]);
        Aspirasi::create($inputs);
        return back()->with('succes', 'Anda Telah Berhasil Menginput Data');
    }
     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreaspirasiRequest  $request
     * @param  \App\Models\Aspirasi\ $aspirasi
     * @return \Illuminate\Http\Response
     */

    public function store(StoreaspirasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function show(aspirasi $aspirasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aspirasi  $aspirasi 
     * @return \Illuminate\Http\Response
     */
    public function edit(aspirasi $aspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaspirasiRequest  $request
     * @param  \App\Models\aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request) //untuk menambah data
    {
        $aspirasi = Aspirasi::find($id);
        $aspirasi->keterangan = 'selesai';
        $aspirasi->save();
        return back()->with('update', 'Done');
    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request) //untuk menghapus data
    {
        Aspirasi::destroy($id);
        return back()->with('delete', 'Data Berhasil dihapus');
    }
}
