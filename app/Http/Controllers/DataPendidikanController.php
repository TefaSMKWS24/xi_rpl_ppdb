<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\validator;

class DataPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data_pendidikan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data_pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'diterima_disekolah_tanggal' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',

           ]);

           $data = [
            'diterima_disekolah_tanggal' => $request->diterima_disekolah_tanggal,
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
           ];

           DB::table('data_pendidikan')->insert($data);

           return redirect()->view('data_pendidikan.index');
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
