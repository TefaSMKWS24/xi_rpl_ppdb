<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\validator;

class DataWaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data_wali.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data_wali.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nama' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'hubungan_dengan_siswa' => 'required',
           ]);

           $data = [
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'hubungan_dengan_siswa' => $request->hubungan_dengan_siswa,
           ];

           DB::table('data_wali')->insert($data);

           return redirect()->view('data_wali.index');
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
        $data = DB::table('data_wali')->where('data_wali', $id)->first();
        return view('data_wali.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate ([
            'nama' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'hubungan_dengan_siswa' => 'required',
           ]);

           $data = [
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'hubungan_dengan_siswa' => $request->hubungan_dengan_siswa,
           ];


           DB::table('data_wali')->where('data_wali, $id')->update($data);
           return redirect()->view('data_wali.iindex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('data_wali')->where('data_wali, $id')->update($data);
           return redirect()->view('data_wali.iindex');
    }
}
