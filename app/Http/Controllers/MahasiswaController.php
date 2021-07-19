<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $rows = Mahasiswa::all(); 
            return view('mahasiswa.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([ 
             'mhsw_nim' => 'bail|required|unique:tb_mhsw', 
             'mhsw_nama' => 'required' 
             ], 
             [ 
             'mhsw_nim.required' => 'NIM wajib diisi', 
             'mhsw_nim.unique' => 'Nim sudah ada', 
             'mhsw_nama.required' => 'Nama wajib diisi' 
             ]); 
             
             Mahasiswa::create([ 
             'mhsw_nim' => $request->mhsw_nim, 
             'mhsw_nama' => $request->mhsw_nama, 
             'mhsw_jurusan' => $request->mhsw_jurusan, 
             'mhsw_alamat' => $request->mhsw_alamat 
             ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
