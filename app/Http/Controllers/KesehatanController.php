<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\validator;

class KesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kesehatan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kesehatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'gol_darah' => 'required',
            'tb' => 'required',
            'bb' => 'required',
            'penyakit_yang_pernah_diderita' => 'required',
           ]);

           $data = [
            'gol_darah' => $request->gol_darah,
            'tb' => $request->tb,
            'bb' => $request->bb,
            'penyakit_yang_pernah_diderita' => $request->penyakit_yang_pernah_diderita,
           ];

           DB::table('kesehatan')->insert($data);

           return redirect()->view('kesehatan.index');
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
        $data = DB::table('kesehatan')->where('kesehatan', $id)->first();
        return view('kesehatan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate ([
            'gol_darah' => 'required',
            'tb' => 'required',
            'bb' => 'required',
            'penyakit_yang_pernah_diderita' => 'required',
           ]);

           $data = [
            'gol_darah' => $request->gol_darah,
            'tb' => $request->tb,
            'bb' => $request->bb,
            'penyakit_yang_pernah_diderita' => $request->penyakit_yang_pernah_diderita,
           ];
           DB::table('kesehatan')->where('kesehatan', $id)->update($data);
           return redirect()->view('kesehatan.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
