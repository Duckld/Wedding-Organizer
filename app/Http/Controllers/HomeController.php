<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function dashboard()
    {
        $user = User::where('usertype', 'user')->get();
        $pemesanan = Pemesanan::all();
        // Hitung jumlah user dengan usertype 'user'
        $jumlahLoginUser = DB::table('users')->where('usertype', 'user')->count();
    
        // Hitung total jumlah pemesanan
        $jumlahTotalOrder = DB::table('pemesanans')->count();
    
        // Kirimkan kedua variabel ke view
        return view('admin.dashboard', compact('jumlahLoginUser', 'jumlahTotalOrder', 'pemesanan', 'user'));
    }
     

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function Profile()
    {
        return view('admin.profile');
    }

    public function Dadmin()
    {
        $user = User::all();
        $pemesanan = Pemesanan::all();

        return view('admin.dashboard', compact('pemesanan', 'user'));
    }

    public function Pembayaran()
    {
        $pemesanan = Pemesanan::all();
        return view('admin.pembayaran', compact('pemesanan'));
    }
    
    public function Order()
    {
        $user = Auth::user(); // Mengambil data user yang sedang login
        $pemesanan = Pemesanan::all();
        return view('admin.order', compact('pemesanan', 'user'));
    } 

    public function PendingOrder()
    {
        $user = Auth::user(); // Mengambil data user yang sedang login
        $pemesanan = Pemesanan::all();

        // Ambil data berdasarkan status
        $pendingOrders = Pemesanan::where('status_pemesanan', 'pending')->get();

        return view('admin.pending-order', compact('pemesanan', 'user', 'pendingOrders'));
    }

    public function confirm($id)
    {
        // Cari data pemesanan berdasarkan ID
        $pemesanan = Pemesanan::findOrFail($id);

        // Update status menjadi "confirm"
        $pemesanan->status_pemesanan = 'Confirm';
        $pemesanan->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Status pemesanan berhasil diubah menjadi "confirm".');
    }

    public function ConfirmOrder()
    {
        $user = Auth::user(); // Mengambil data user yang sedang login
        // $pemesanan = Pemesanan::all();

        // Ambil data berdasarkan status
        $pemesanan = Pemesanan::where('status_pemesanan', 'Confirm')->get();

        return view('admin.confirm-order', compact('pemesanan','user'));
    }

    public function OngoingOrder()
    {
        $user = Auth::user(); // Mengambil data user yang sedang login

        // Ambil data berdasarkan status
        $pemesanan = Pemesanan::where('status_pemesanan', 'Ongoing')->get();

        return view('admin.ongoing-order', compact('pemesanan', 'user'));
    }
    
    public function FinishOrder()
    {
        $user = Auth::user(); // Mengambil data user yang sedang login

        // Ambil data berdasarkan status
        $pemesanan = Pemesanan::where('status_pemesanan', 'Finished')->get();

        return view('admin.finished-order', compact('pemesanan', 'user'));
    }
    

    public function Duser()
    {
        return view('user.dashboard');
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
