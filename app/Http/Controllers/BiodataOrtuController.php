<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\validator;

class BiodataOrtuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('biodata_ortu.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata_ortu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate ([
        'nama_ayah' => 'required',
        'nama_ibu' => 'required',
        'pekerjaan_ayah' => 'required',
        'pekerjaan_ibu' => 'required',
        'alamat' => 'required',
        'agama' => 'required',
        'pendidikan_terakhir' => 'required',
        'telepon' => 'required',
       ]);

       $data = [
        'nama_ayah' => $request->nama_ayah,
        'nama_ibu' => $request->nama_ibu,
        'pekerjaan_ayah' => $request->pekerjaan_ayah,
        'pekerjaan_ibu' => $request->pekerjaan_ibu,
        'alamat' => $request->alamat,
        'agama' => $request->agama,
        'pendidikan_terakhir' => $request->pendidikan_terakhir,
        'telepon' => $request->telepon,
       ];

       DB::table('biodata_ortu')->insert($data);

       return redirect()->view('biodata_ortu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $data = DB::table('biodata_ortu')->where('biodata_ortu', $id)->first();
       return view('biodata_ortu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
