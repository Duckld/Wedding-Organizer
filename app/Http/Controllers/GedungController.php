<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\GedungImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GedungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gedung = Gedung::all();
        return view('admin.gedung', compact('gedung'));
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
        if ($request->hasFile('foto_gedung')) {
            $fotoPath = $request->file('foto_gedung')->store('foto_gedung', 'public');
        };

        $gedung = Gedung::create([
            'nama_gedung' => $request->input('nama_gedung'),
            'tipe_gedung' => $request->input('tipe_gedung'),
            'alamat_gedung' => $request->input('alamat_gedung'),
            'kapasitas_gedung' => $request->input('kapasitas_gedung'),
            'harga_sewa_gedung' => $request->input('harga_sewa_gedung'),
            'status_gedung' => $request->input('status_gedung'),
            'deskripsi_gedung' => $request->input('deskripsi_gedung'),
            'foto_gedung' => $fotoPath,
        ]);
    
        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                $imagePath = $file->store('multiple_foto_gedung', 'public');
                GedungImage::create([
                    'gedung_id' => $gedung->id_gedung,
                    'image_path' => $imagePath,
                ]);
            }
        } 
        return redirect()->back()->with('success', 'Gedung berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gedung $gedung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gedung $id_gedung)
    {
        $gedung = Gedung::find($id_gedung);
        return view('admin/gedung', compact('gedung'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $gedung = Gedung::findOrFail($id);

        if ($request->hasFile('foto_gedung')) {
            if ($gedung->foto_gedung) {
                Storage::delete('public/' . $gedung->foto_gedung);
            }
            $gedung->foto_gedung = $request->file('foto_gedung')->store('foto_gedung', 'public');
        }

        $gedung->update([
            'nama_gedung' => $request->input('nama_gedung'),
            'tipe_gedung' => $request->input('tipe_gedung'),
            'alamat_gedung' => $request->input('alamat_gedung'),
            'kapasitas_gedung' => $request->input('kapasitas_gedung'),
            'harga_sewa_gedung' => $request->input('harga_sewa_gedung'),
            'status_gedung' => $request->input('status_gedung'),
            'deskripsi_gedung' => $request->input('deskripsi_gedung'),
            'foto_gedung' => $gedung->foto_gedung,
        ]);

        return redirect()->route('gedung.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gedung $gedung)
    {
        //
    }
}
