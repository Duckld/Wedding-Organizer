<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use App\Models\DishesImage;
use App\Models\Maincourse;
use App\Models\MaincourseImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaincourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maincourse = MainCourse::with('images')->get();
        return view('admin.maincourse.paketmaincourse', compact('maincourse'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('maincourse.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Upload Foto Menu
        $fotoPath = null;
        if ($request->hasFile('foto_menu')) {
            $fotoPath = $request->file('foto_menu')->store('foto_maincourse', 'public');
        };

        $maincourse = Maincourse::create([
            'nama_paket_maincourse' => $request->input('nama_paket_maincourse'),
            'deskripsi_makanan' => $request->input('deskripsi_makanan'),
            'harga_paket' => $request->input('harga_paket'),
            'foto_menu' => $fotoPath,
        ]);
    
        if ($request->hasFile('multiple_foto')) {
            foreach ($request->file('multiple_foto') as $file) {
                $imagePath = $file->store('multiple_foto_maincourse', 'public');
                MaincourseImage::create([
                    'maincourse_id' => $maincourse->id_maincourse,
                    'image_path' => $imagePath,
                ]);
            }
        } 
        return redirect()->back()->with('success', 'Maincourse berhasil disimpan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Maincourse $id_maincourse)
    {
        $maincourse = Maincourse::with('images')->findOrFail($id_maincourse);
        return view('maincourse.show', compact('maincourse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maincourse $id_maincourse)
    {
        $maincourse = Maincourse::find($id_maincourse);
        return view('admin/maincourse', compact('maincourse'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_maincourse)
    {
        $maincourse = Maincourse::findOrFail($id_maincourse);

        if ($request->hasFile('foto_menu')) {
            if ($maincourse->foto_menu) {
                Storage::delete('public/' . $maincourse->foto_menu);
            }
            $maincourse->foto_menu = $request->file('foto_menu')->store('foto_menu', 'public');
        }

        $maincourse->update([
            'nama_paket_maincourse' => $request->input('nama_paket_maincourse'),
            'deskripsi_makanan' => $request->input('deskripsi_makanan'),
            'harga_paket' => $request->input('harga_paket'),
            'foto_menu' => $maincourse->foto_menu,
        ]);

        return redirect()->route('admin.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maincourse $id_maincourse)
    {
        // $maincourse = Maincourse::findOrFail($id_maincourse);
        // $maincourse->delete();
        // return redirect('admin/Vendor')->with('success', 'Vendor berhasil dihapus!.');
    }
}
