<?php

namespace App\Http\Controllers;

use App\Models\Dekorasi;
use App\Models\Dokumentasi;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user(); // Mengambil data user yang sedang login
        return view('user.pemesanan', compact('user'));
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
        Pemesanan::create([
            'id_customer' => $request->id_customer,
            'tanggal_pemesanan' => now(),
            'tanggal_acara' => $request->tanggal_acara,
            'status_pemesanan' => 'Pending',
            'total_biaya' => $request->total_biaya, 
        ]);

        return redirect()->back()->with('success', 'data pemesanan berhasil di simpan');

    }

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

    // public function storedekorasi(Request $request)
    // {
    //     // Simpan ID dekorasi yang dipilih ke session
    //     session(['dekorasi_terpilih' => $request->input('dekorasi')]);

    //     // Redirect kembali ke halaman dekorasi
    //     return redirect()->route('booking.index');
    // }

    // public function skipdekorasi()
    // {
    //     // Tandai dekorasi sebagai skipped dengan session
    //     session(['dekorasi_terpilih' => 'skipped']);

    //     return redirect()->route('booking.index');
    // }

    // public function storedokumentasi(Request $request)
    // {
    //     // Simpan ID dokumentasi yang dipilih ke session
    //     session(['dokumentasi_terpilih' => $request->input('dokumentasi')]);

    //     // Redirect kembali ke halaman dokumentasi
    //     return redirect()->route('booking.index');
    // }

    // public function skipdokumentasi()
    // {
    //     // Tandai dokumentasi sebagai skipped dengan session
    //     session(['dokumentasi_terpilih' => 'skipped']);

    //     return redirect()->route('booking.index');
    // }

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
