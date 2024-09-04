<?php

namespace App\Http\Controllers;

use App\Models\Undangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $undangan = Undangan::all();
        return view('admin.undangan', compact('undangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fotoPath = null;
        if ($request->hasFile('foto_undangan')) {
            $fotoPath = $request->file('foto_undangan')->store('foto_undangan', 'public');
        };
 
        Undangan::create([
            'bahan_undangan' => $request->input('bahan_undangan'),
            'deskripsi_undangan' => $request->input('deskripsi_undangan'),
            'harga_undangan' => $request->input('harga_undangan'),
            'foto_undangan' => $fotoPath,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Undangan $undangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Undangan $id_undangan)
    {
        $undangan = Undangan::find($id_undangan);
        return view('admin/undangan', compact('undangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $undangan = Undangan::findOrFail($id);

        if ($request->hasFile('foto_undangan')) {
            if ($undangan->foto_undangan) {
                Storage::delete('public/' . $undangan->foto_undangan);
            }
            $undangan->foto_undangan = $request->file('foto_undangan')->store('foto_undangan', 'public');
        }

        $undangan->update([
            'bahan_undangan' => $request->input('bahan_undangan'),
            'deskripsi_undangan' => $request->input('deskripsi_undangan'),
            'harga_undangan' => $request->input('harga_undangan'),
            'foto_undangan' => $undangan->foto_undangan,
        ]);

        return redirect()->route('undangan.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Undangan $undangan)
    {
        //
    }
}
