<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use App\Models\DishesImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dishes::all();
        return view('admin.dishes.paketdishes', compact('dishes'));
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
        if ($request->hasFile('foto_menu')) {
            $fotoPath = $request->file('foto_menu')->store('foto_dishes', 'public');
        };
        
        $dishes = Dishes::create([
            'nama_paket_dishes' => $request->input('nama_paket_dishes'),
            'deskripsi_makanan' => $request->input('deskripsi_makanan'),
            'harga_paket' => $request->input('harga_paket'),
            'foto_menu' => $fotoPath,
        ]);
    
        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                $imagePath = $file->store('multiple_foto_dishes', 'public');
                DishesImage::create([
                    'dishes_id' => $dishes->id_dishes,
                    'image_path' => $imagePath,
                ]);
            }
        }
        return redirect()->back()->with('success', 'Maincourse berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dishes $id_dishes)
    {
        $dishes = Dishes::with('images')->findOrFail($id_dishes);
        return view('dishes.show', compact('dishes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dishes $id_dishes)
    {
        $dishes = Dishes::find($id_dishes);
        return view('admin/dishes', compact('dishes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dishes $id_dishes)
    {
        $dishes = Dishes::findOrFail($id_dishes);

        if ($request->hasFile('foto_menu')) {
            if ($dishes->foto_menu) {
                Storage::delete('public/' . $dishes->foto_menu);
            }
            $dishes->foto_menu = $request->file('foto_menu')->store('foto_menuD', 'public');
        }

        $dishes->update([
            'nama_paket_maincourse' => $request->input('nama_paket_maincourse'),
            'deskripsi_makanan' => $request->input('deskripsi_makanan'),
            'harga_paket' => $request->input('harga_paket'),
            'foto_menu' => $dishes->foto_menu,
        ]);

        return redirect()->route('admin.indexD')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dishes $dishes)
    {
        //
    }
}
