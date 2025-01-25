<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\validator;

class DataNilaiControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data_nilai.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data_nilai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'mapel' => 'required',
            'semester' => 'required',

           ]);

           $data = [
            'mapel' => $request->mapel,
            'semester' => $request->semester,
           ];

           DB::table('data_nilai')->insert($data);

           return redirect()->view('data_nilai.index');
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
