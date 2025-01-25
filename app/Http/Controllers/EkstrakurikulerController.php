<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\validator;

class EkstrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ekstrakurikuler.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ekstrakurikuler.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nama_ekskul' => 'required',
            'semester' => 'required',
            'nilai' => 'required',

           ]);

           $data = [
            'nama_ekskul' => $request->nama_ekskul,
            'semester' => $request->semester,
            'nilai' => $request->nilai,
           ];

           DB::table('ekstrakurikuler')->insert($data);

           return redirect()->view('ekstrakurikuler.index');
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
        $data = DB::table('ekstrakurikuler')->where('ekstrakurikuler', $id)->first();
        return view('ekstrakurikuler.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate ([
            'nama_ekskul' => 'required',
            'semester' => 'required',
            'nilai' => 'required',

           ]);

           $data = [
            'nama_ekskul' => $request->nama_ekskul,
            'semester' => $request->semester,
            'nilai' => $request->nilai,
           ];
           DB::table('ekstrakurikuler')->where('ekstrakurikuler', $id)->update($data);
           return redirect()->view('ekstrakurikuler.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
