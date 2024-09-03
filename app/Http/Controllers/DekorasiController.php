<?php

namespace App\Http\Controllers;

use App\Models\Dekorasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DekorasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dekorasi = Dekorasi::all();
        return view('admin.dekorasi', compact('dekorasi'));
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
        if ($request->hasFile('foto_dekorasi')) {
            $fotoPath = $request->file('foto_dekorasi')->store('foto_dekorasi', 'public');
        };
 
        Dekorasi::create([
            'nama_dekorasi' => $request->input('nama_dekorasi'),
            'deskripsi_dekorasi' => $request->input('deskripsi_dekorasi'),
            'harga_dekorasi' => $request->input('harga_dekorasi'),
            'foto_dekorasi' => $fotoPath,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Dekorasi $dekorasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dekorasi $id_dekorasi)
    {
        $dekorasi = Dekorasi::find($id_dekorasi);
        return view('admin/dekorasi', compact('dekorasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $dekorasi = Dekorasi::findOrFail($id);

        if ($request->hasFile('foto_dekorasi')) {
            if ($dekorasi->foto_dekorasi) {
                Storage::delete('public/' . $dekorasi->foto_dekorasi);
            }
            $dekorasi->foto_dekorasi = $request->file('foto_dekorasi')->store('foto_dekorasi', 'public');
        }

        $dekorasi->update([
            'nama_dekorasi' => $request->input('nama_dekorasi'),
            'deskripsi_dekorasi' => $request->input('deskripsi_dekorasi'),
            'harga_dekorasi' => $request->input('harga_dekorasi'),
            'foto_dekorasi' => $dekorasi->foto_dekorasi,
        ]);

        return redirect()->route('dekorasi.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dekorasi $dekorasi)
    {
        //
    }
}
