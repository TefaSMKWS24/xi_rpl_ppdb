<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\validator;

class DataPrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data_prestasi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data_prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nama_prestasi' => 'required',
            'tahun' => 'required',
            'penyelenggara' => 'required',
            'tempat' => 'required',
            'piagam' => 'required',
           ]);

           $data = [
            'nama_prestasi' => $request->nama_prestasi,
            'tahun' => $request->tahun,
            'penyelenggara' => $request->penyelenggara,
            'tempat' => $request->tempat,
            'piagam' => $request->piagam,
           ];

           DB::table('data_prestasi')->insert($data);

           return redirect()->view('data_prestasi.index');
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
        //
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
