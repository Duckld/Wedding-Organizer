<?php

namespace App\Http\Controllers;

use App\Models\Bridalstyle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BridalstyleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bridalstyle = Bridalstyle::all();
        return view('admin.bridalstyle', compact('bridalstyle'));
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
        if ($request->hasFile('foto_bridalstyle')) {
            $fotoPath = $request->file('foto_bridalstyle')->store('foto_bridalstyle', 'public');
        };
 
        Bridalstyle::create([
            'nama_paket_bridalstyle' => $request->input('nama_paket_bridalstyle'),
            'deskripsi_paket' => $request->input('deskripsi_paket'),
            'harga_paket' => $request->input('harga_paket'),
            'foto_bridalstyle' => $fotoPath,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Bridalstyle $bridalstyle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bridalstyle $id_bridalstyle)
    {
        $bridalstyle = Bridalstyle::find($id_bridalstyle);
        return view('admin/bridalstyle', compact('bridalstyle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bridalstyle = Bridalstyle::findOrFail($id);

        if ($request->hasFile('foto_bridalstyle')) {
            if ($bridalstyle->foto_bridalstyle) {
                Storage::delete('public/' . $bridalstyle->foto_bridalstyle);
            }
            $bridalstyle->foto_bridalstyle = $request->file('foto_bridalstyle')->store('foto_bridalstyle', 'public');
        }

        $bridalstyle->update([
            'nama_paket_bridalstyle' => $request->input('nama_paket_bridalstyle'),
            'deskripsi_paket' => $request->input('deskripsi_paket'),
            'harga_paket' => $request->input('harga_paket'),
            'foto_bridalstyle' => $bridalstyle->foto_bridalstyle,
        ]);

        return redirect()->route('bridalstyle.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bridalstyle $bridalstyle)
    {
        //
    }
}
