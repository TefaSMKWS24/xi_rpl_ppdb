<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\validator;

class TabelBerkarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tabel_berkas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel_berkas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'kk' => 'required',
            'ijazah' => 'required',
            'akta' => 'required',
            'ktp_ortu' => 'required',
           ]);

           $data = [
            'kk' => $request->kk,
            'ijazah' => $request->ijazah,
            'akta' => $request->akta,
            'ktp_ortu' => $request->ktp_ortu,
           ];

           DB::table('tabel_berkas')->insert($data);

           return redirect()->view('tabel_berkas');
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
        $data = DB::table('tabel_berkas')->where('tabel_berkas', $id)->first();
        return view('tabel_berkas', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate ([
            'kk' => 'required',
            'ijazah' => 'required',
            'akta' => 'required',
            'ktp_ortu' => 'required',
           ]);

           $data = [
            'kk' => $request->kk,
            'ijazah' => $request->ijazah,
            'akta' => $request->akta,
            'ktp_ortu' => $request->ktp_ortu,
           ];
           DB::table('tabel_berkas')->insert($data);

           return redirect()->view('tabel_berkas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
