<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Bridalstyle;
use App\Models\Dekorasi;
use App\Models\Dokumentasi;
use App\Models\Gedung;
use App\Models\Hiburan;
use App\Models\Maincourse;
use App\Models\Souvenir;
use App\Models\Undangan;
use Illuminate\Http\Request;
use PHPUnit\TextUI\Configuration\Source;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maincourse = Maincourse::all();
        $gedung = Gedung::all();
        $dekorasi = Dekorasi::all();
        $dokumentasi = Dokumentasi::all();
        $hiburan = Hiburan::all();
        $bridalstyle = Bridalstyle::all();
        $souvenir = Souvenir::all();
        $undangan = Undangan::all();
        return view('user.booking', compact('maincourse', 'gedung', 'dekorasi', 'dokumentasi', 'hiburan', 'bridalstyle', 'souvenir', 'undangan'));
    }


    public function storeSession(Request $request)
    {
        // Simpan data ke session
        session([
            'jumlah_tamu' => $request->jumlah_tamu,
            'tanggal_acara' => $request->tanggal_acara,
        ]);

        return redirect()->back()->with('success', 'Data pemesanan telah disimpan ke session.');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
