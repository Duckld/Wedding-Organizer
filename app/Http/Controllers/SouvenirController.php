<?php

namespace App\Http\Controllers;

use App\Models\Souvenir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SouvenirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $souvenir = Souvenir::all();
        return view('admin.souvenir', compact('souvenir'));
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
        if ($request->hasFile('foto_souvenir')) {
            $fotoPath = $request->file('foto_souvenir')->store('foto_souvenir', 'public');
        };
 
        Souvenir::create([
            'nama_paket_souvenir' => $request->input('nama_paket_souvenir'),
            'deskripsi_paket_souvenir' => $request->input('deskripsi_paket_souvenir'),
            'harga_paket_souvenir' => $request->input('harga_paket_souvenir'),
            'foto_souvenir' => $fotoPath,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Souvenir $souvenir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Souvenir $id_souvenir)
    {
        $souvenir = Souvenir::find($id_souvenir);
        return view('admin/souvenir', compact('souvenir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $souvenir = Souvenir::findOrFail($id);

        if ($request->hasFile('foto_souvenir')) {
            if ($souvenir->foto_souvenir) {
                Storage::delete('public/' . $souvenir->foto_souvenir);
            }
            $souvenir->foto_souvenir = $request->file('foto_souvenir')->store('foto_souvenir', 'public');
        }

        $souvenir->update([
            'nama_paket_souvenir' => $request->input('nama_paket_souvenir'),
            'deskripsi_paket_souvenir' => $request->input('deskripsi_paket_souvenir'),
            'harga_paket_souvenir' => $request->input('harga_paket_souvenir'),
            'foto_souvenir' => $souvenir->foto_souvenir,
        ]);

        return redirect()->route('souvenir.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Souvenir $souvenir)
    {
        //
    }
}
