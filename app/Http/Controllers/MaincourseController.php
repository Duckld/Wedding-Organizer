<?php

namespace App\Http\Controllers;

use App\Models\Maincourse;
use Illuminate\Http\Request;

class MaincourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maincourse = Maincourse::all();
        // dd($maincourse);
        return view('admin.katering', compact('maincourse'));
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
        if ($request->hasFile('foto_menu')) {
            $fotoPath = $request->file('foto_menu')->store('foto_menu', 'public');
        };
 
        Maincourse::create([
            'nama_paket_maincourse' => $request->input('nama_paket_maincourse'),
            'deskripsi_makanan' => $request->input('deskripsi_makanan'),
            'harga_paket' => $request->input('harga_paket'),
            'foto_menu' => $fotoPath,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Maincourse $maincourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maincourse $maincourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maincourse $maincourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maincourse $id_maincourse)
    {
        $maincourse = Maincourse::findOrFail($id_maincourse);
        $maincourse->delete();
        return redirect('admin/Vendor')->with('success', 'Vendor berhasil dihapus!.');
    }
}
