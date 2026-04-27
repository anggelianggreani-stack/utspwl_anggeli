<?php

namespace App\Http\Controllers;

use App\Models\matkul;
use Illuminate\Http\Request;

class MatkulController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('matkul.index', [
            'matkul' => Matkul::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matkul.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        Matkul::create($data);

        return redirect()->action([MatkulController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Matkul::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('matkul.edit' , [
            'matkul' => Matkul::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $data = $request->except('_token');

        Matkul::find($id)->update($data);

        return redirect()->action([MatkulController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(matkul $matkul)
    {
        Matkul::findOrFail($id)->delete();
        return redirect()->action([MatkulController::class, 'index']);
    }
}