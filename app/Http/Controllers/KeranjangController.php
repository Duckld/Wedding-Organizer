<?php

namespace App\Http\Controllers;

use App\Models\Bridalstyle;
use App\Models\Dekorasi;
use App\Models\Dokumentasi;
use App\Models\Gedung;
use App\Models\Hiburan;
use App\Models\Souvenir;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $dekorasi = Dekorasi::all();
        // $dokumentasi = Dokumentasi::all();
        return view('user.keranjang');
        // , compact('dekorasi', 'dokumentasi')
    }

    public function indexgedung()
    {
        // Ambil semua data dekorasi dari database
        $gedung = Gedung::all();

        // Cek apakah ada dekorasi yang sudah dipilih (dari session)
        $gedungTerpilih = session('gedung_terpilih');

        // Tampilkan view dan kirim data dekorasi beserta dekorasi yang dipilih (jika ada)
        return view('booking.index', compact('gedung', 'gedungTerpilih'));
    }

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

    public function indexhiburan()
    {
        // Ambil semua data hiburan dari database
        $hiburan = Hiburan::all();

        // Cek apakah ada hiburan yang sudah dipilih (dari session)
        $hiburanTerpilih = session('hiburan_terpilih');

        // Tampilkan view dan kirim data hiburan beserta hiburan yang dipilih (jika ada)
        return view('booking.index', compact('hiburan', 'hiburanTerpilih'));
    }

    public function indexbridalstyle()
    {
        // Ambil semua data hiburan dari database
        $bridalstyle = Bridalstyle::all();

        // Cek apakah ada hiburan yang sudah dipilih (dari session)
        $bridalstyleTerpilih = session('bridalstyle_terpilih');

        // Tampilkan view dan kirim data hiburan beserta hiburan yang dipilih (jika ada)
        return view('booking.index', compact('bridalstyle', 'bridalstyleTerpilih'));
    }

    public function indexsouvenir()
    {
        // Ambil semua data hiburan dari database
        $souvenir = Souvenir::all();

        // Cek apakah ada hiburan yang sudah dipilih (dari session)
        $souvenirTerpilih = session('souvenir_terpilih');

        // Tampilkan view dan kirim data hiburan beserta hiburan yang dipilih (jika ada)
        return view('booking.index', compact('souvenir', 'souvenirTerpilih'));
    }

    public function storegedung(Request $request)
    {
        // Simpan ID dekorasi yang dipilih ke session
        session(['gedung_terpilih' => $request->input('gedung')]);

        // Redirect kembali ke halaman dekorasi
        return redirect()->route('booking.index');
    }

    public function storedekorasi(Request $request)
    {
        // Simpan ID dekorasi yang dipilih ke session
        session(['dekorasi_terpilih' => $request->input('dekorasi')]);

        // Redirect kembali ke halaman dekorasi
        return redirect()->route('booking.index');
    }

    public function storedokumentasi(Request $request)
    {
        // Simpan ID dokumentasi yang dipilih ke session
        session(['dokumentasi_terpilih' => $request->input('dokumentasi')]);

        // Redirect kembali ke halaman dokumentasi
        return redirect()->route('booking.index');
    }
    public function storehiburan(Request $request)
    {
        // Simpan ID dokumentasi yang dipilih ke session
        session(['hiburan_terpilih' => $request->input('hiburan')]);

        // Redirect kembali ke halaman hiburan
        return redirect()->route('booking.index');
    }

    public function storebridalstyle(Request $request)
    {
        // Simpan ID dokumentasi yang dipilih ke session
        session(['bridalstyle_terpilih' => $request->input('bridalstyle')]);

        // Redirect kembali ke halaman hiburan
        return redirect()->route('booking.index');
    }

    public function storesouvenir(Request $request)
    {
        // Simpan ID dokumentasi yang dipilih ke session
        session(['souvenir_terpilih' => $request->input('souvenir')]);

        // Redirect kembali ke halaman hiburan
        return redirect()->route('booking.index');
    }

    // Method index untuk menampilkan list dekorasi

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
        //
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
