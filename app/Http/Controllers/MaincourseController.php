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
        $dishes = Dishes::all();
        $maincourse = Maincourse::all();
        return view('admin.katering', compact('maincourse', 'dishes'));
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

        $maincourse = Maincourse::create([
            'nama_paket_maincourse' => $request->input('nama_paket_maincourse'),
            'deskripsi_makanan' => $request->input('deskripsi_makanan'),
            'harga_paket' => $request->input('harga_paket'),
        ]);
    
        if ($request->hasFile('foto_menu')) {
            foreach ($request->file('foto_menu') as $file) {
                $imagePath = $file->store('foto_menu', 'public');
                MaincourseImage::create([
                    'maincourse_id' => $maincourse->id_maincourse,
                    'image_path' => $imagePath,
                ]);
            }
        }
        return redirect()->back()->with('success', 'Maincourse berhasil disimpan!');
    }

    public function storeD(Request $request)
    {
        $dishes = Dishes::create([
            'nama_paket_dishes' => $request->input('nama_paket_dishes'),
            'deskripsi_makanan' => $request->input('deskripsi_makanan'),
            'harga_paket' => $request->input('harga_paket'),
        ]);
    
        if ($request->hasFile('foto_menu')) {
            foreach ($request->file('foto_menu') as $file) {
                $imagePath = $file->store('foto_menuD', 'public');
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
    public function show(Maincourse $id_maincourse)
    {
        $maincourse = Maincourse::with('images')->findOrFail($id_maincourse);
        return view('maincourse.show', compact('maincourse'));
    }

    public function showD(Dishes $id_dishes)
    {
        $dishes = Dishes::with('images')->findOrFail($id_dishes);
        return view('dishes.show', compact('dishes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maincourse $id_maincourse)
    {
        $maincourse = Maincourse::find($id_maincourse);
        return view('admin/maincourse', compact('maincourse'));
    }

    public function editD(Maincourse $id_dishes)
    {
        $dishes = Dishes::find($id_dishes);
        return view('admin/dishes', compact('dishes'));
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

    public function updateD(Request $request, $id_dishes)
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
    public function destroy(Maincourse $id_maincourse)
    {
        // $maincourse = Maincourse::findOrFail($id_maincourse);
        // $maincourse->delete();
        // return redirect('admin/Vendor')->with('success', 'Vendor berhasil dihapus!.');
    }
}
