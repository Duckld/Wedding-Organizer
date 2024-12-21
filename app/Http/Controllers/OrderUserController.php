<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;

class OrderUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user(); // Mengambil data user yang sedang login
        $pemesanan = Pemesanan::all();
        return view('user.order', compact('pemesanan', 'user'));
    }

    public function viewInvoice($id_pemesanan)
    {
        // Ambil data pemesanan dari database berdasarkan ID
        $pemesanan = Pemesanan::find($id_pemesanan);

        // Periksa apakah data pemesanan ditemukan
        if (!$pemesanan) {
            return redirect()->back()->with('error', 'Data pemesanan tidak ditemukan.');
        }

        // Data yang akan dikirim ke view
        $data = [
            'id_pemesanan' => $pemesanan->id_pemesanan,
            'id_customer' => $pemesanan->id_customer,
            'tanggal_pemesanan' => $pemesanan->tanggal_pemesanan,
            'tanggal_acara' => $pemesanan->tanggal_acara,
            'total_biaya' => $pemesanan->total_biaya,
        ];

        // Return view dengan data
        return view('user.invoice', $data);
    }

    public function downloadInvoice($id_pemesanan)
    {
        // Ambil data pemesanan dari database berdasarkan ID
        $pemesanan = Pemesanan::find($id_pemesanan);

        // Periksa apakah data pemesanan ditemukan
        if (!$pemesanan) {
            return redirect()->back()->with('error', 'Pemesanan tidak ditemukan.');
        }

        // Data yang akan dikirim ke view
        $data = [
            'id_pemesanan' => $pemesanan->id_pemesanan,
            'id_customer' => $pemesanan->id_customer,
            'tanggal_pemesanan' => $pemesanan->tanggal_pemesanan,
            'tanggal_acara' => $pemesanan->tanggal_acara,
            'total_biaya' => $pemesanan->total_biaya,
        ];

        // Render view untuk PDF
        $pdf = FacadePdf::loadView('user.invoice', $data);

        // Download PDF
        return $pdf->download('invoice_' . $id_pemesanan . '.pdf');
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
