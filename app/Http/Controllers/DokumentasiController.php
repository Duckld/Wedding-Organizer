<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use App\Models\DokumentasiImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumentasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokumentasi = Dokumentasi::all();
        return view('admin.dokumentasi', compact('dokumentasi'));
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
        // Upload Foto Menu
        $fotoPath = null;
        if ($request->hasFile('foto_dokumentasi')) {
            $fotoPath = $request->file('foto_dokumentasi')->store('foto_dokumentasi', 'public');
        };

        $dokumentasi = Dokumentasi::create([
            'nama_paket_dokumentasi' => $request->input('nama_paket_dokumentasi'),
            'jenis_dokumentasi' => $request->input('jenis_dokumentasi'),
            'deskripsi_dokumentasi' => $request->input('deskripsi_dokumentasi'),
            'harga_dokumentasi' => $request->input('harga_dokumentasi'),
            'foto_dokumentasi' => $fotoPath,
        ]);
    
        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                $imagePath = $file->store('multiple_foto_dokumentasi', 'public');
                DokumentasiImage::create([
                    'dokumentasi_id' => $dokumentasi->id_dokumentasi,
                    'image_path' => $imagePath,
                ]);
            }
        } 
        return redirect()->back()->with('success', 'Dokumentasi berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokumentasi $dokumentasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokumentasi $id_dokumentasi)
    {
        $dokumentasi = Dokumentasi::find($id_dokumentasi);
        return view('admin/dokumentasi', compact('dokumentasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);

        if ($request->hasFile('foto_dokumentasi')) {
            if ($dokumentasi->foto_dokumentasi) {
                Storage::delete('public/' . $dokumentasi->foto_dokumentasi);
            }
            $dokumentasi->foto_dokumentasi = $request->file('foto_dokumentasi')->store('foto_dokumentasi', 'public');
        }

        $dokumentasi->update([
            'nama_paket_dokumentasi' => $request->input('nama_paket_dokumentasi'),
            'jenis_dokumentasi' => $request->input('jenis_dokumentasi'),
            'deskripsi_dokumentasi' => $request->input('deskripsi_dokumentasi'),
            'harga_dokumentasi' => $request->input('harga_dokumentasi'),
            'foto_dokumentasi' => $dokumentasi->foto_dokumentasi,
        ]);

        return redirect()->route('dokumentasi.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokumentasi $dokumentasi)
    {
        //
    }
}
