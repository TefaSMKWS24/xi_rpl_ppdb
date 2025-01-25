<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\validator;

class BiodataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('biodata_siswa.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata_siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
           ]);

           $data = [
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'kewarganegaraan' => $request->kewarganegaraan,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'foto' => $request->foto,
           ];

           DB::table('biodata_siswa')->insert($data);

           return redirect()->view('biodata_siswa.index');
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
        $data = DB::table('biodata_siswa')->where('biodata_siswa', $id)->first();
       return view('biodata_siswa.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate ([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
           ]);

           $data = [
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'kewarganegaraan' => $request->kewarganegaraan,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'foto' => $request->foto,
           ];

           DB::table('biodata_siswa')->where('biodata_siswa', $id)->update($data);
           return redirect()->view('biodata_siswa.index');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
