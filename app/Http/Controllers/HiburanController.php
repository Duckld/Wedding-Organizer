<?php

namespace App\Http\Controllers;

use App\Models\Hiburan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HiburanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hiburan = Hiburan::all();
        return view('admin.hiburan', compact('hiburan'));
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
        if ($request->hasFile('foto_hiburan')) {
            $fotoPath = $request->file('foto_hiburan')->store('foto_hiburan', 'public');
        };
 
        Hiburan::create([
            'nama_paket_hiburan' => $request->input('nama_paket_hiburan'),
            'deskripsi_hiburan' => $request->input('deskripsi_hiburan'),
            'harga_sewa_hiburan' => $request->input('harga_sewa_hiburan'),
            'foto_hiburan' => $fotoPath,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Hiburan $hiburan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hiburan $id_hiburan)
    {
        $hiburan = Hiburan::find($id_hiburan);
        return view('admin/hiburan', compact('hiburan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hiburan = Hiburan::findOrFail($id);

        if ($request->hasFile('foto_hiburan')) {
            if ($hiburan->foto_hiburan) {
                Storage::delete('public/' . $hiburan->foto_hiburan);
            }
            $hiburan->foto_hiburan = $request->file('foto_hiburan')->store('foto_hiburan', 'public');
        }

        $hiburan->update([
            'nama_paket_hiburan' => $request->input('nama_paket_hiburan'),
            'deskripsi_hiburan' => $request->input('deskripsi_hiburan'),
            'harga_sewa_hiburan' => $request->input('harga_sewa_hiburan'),
            'foto_hiburan' => $hiburan->foto_hiburan,
        ]);

        return redirect()->route('hiburan.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hiburan $hiburan)
    {
        //
    }
}
