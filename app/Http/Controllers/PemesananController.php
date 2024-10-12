<?php

namespace App\Http\Controllers;

use App\Models\Dekorasi;
use App\Models\Dokumentasi;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('user.pemesanan');
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
    // public function store(Request $request)
    // {

    //     // Ambil data dekorasi yang dipilih
    //     $id_dekorasi = $request->input('dekorasi');
        
    //     // Simpan ke sesi untuk digunakan di halaman lain (opsional)
    //     session(['dekorasi_terpilih' => $id_dekorasi]);

    //     // Ambil detail dekorasi yang dipilih dari database
    //     $dekorasi = Dekorasi::find($id_dekorasi);

    //     // Tampilkan halaman pemesanan item dengan data dekorasi yang dipilih
    //     return view('user.pemesanan', compact('dekorasi'));
    // }

    // Method index untuk menampilkan list dekorasi
    public function indexdekorasi()
    {
        // Ambil semua data dekorasi dari database
        $dekorasi = Dekorasi::all();

        // Cek apakah ada dekorasi yang sudah dipilih (dari session)
        $dekorasiTerpilih = session('dekorasi_terpilih');

        // Tampilkan view dan kirim data dekorasi beserta dekorasi yang dipilih (jika ada)
        return view('booking.index', compact('dekorasi', 'dekorasiTerpilih'));
    }

    // Method index untuk menampilkan list dokumentasi
    public function indexdokumentasi()
    {
        // Ambil semua data dokumentasi dari database
        $dokumentasi = Dokumentasi::all();

        // Cek apakah ada dokumentasi yang sudah dipilih (dari session)
        $dokumentasiTerpilih = session('dokumentasi_terpilih');

        // Tampilkan view dan kirim data dokumentasi beserta dokumentasi yang dipilih (jika ada)
        return view('booking.index', compact('dokumentasi', 'dokumentasiTerpilih'));
    }

    public function storedekorasi(Request $request)
    {
        // Simpan ID dekorasi yang dipilih ke session
        session(['dekorasi_terpilih' => $request->input('dekorasi')]);

        // Redirect kembali ke halaman dekorasi
        return redirect()->route('booking.index');
    }

    public function skipdekorasi()
    {
        // Tandai dekorasi sebagai skipped dengan session
        session(['dekorasi_terpilih' => 'skipped']);

        return redirect()->route('booking.index');
    }

    public function storedokumentasi(Request $request)
    {
        // Simpan ID dokumentasi yang dipilih ke session
        session(['dokumentasi_terpilih' => $request->input('dokumentasi')]);

        // Redirect kembali ke halaman dokumentasi
        return redirect()->route('booking.index');
    }

    public function skipdokumentasi()
    {
        // Tandai dokumentasi sebagai skipped dengan session
        session(['dokumentasi_terpilih' => 'skipped']);

        return redirect()->route('booking.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
