<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\BridalstyleController;
use App\Http\Controllers\DekorasiController;
use App\Http\Controllers\DishesController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\HiburanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\MaincourseController;
use App\Http\Controllers\OrderUserController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\SouvenirController;
use App\Http\Controllers\UndanganController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route untuk Admin
Route::middleware(['auth', 'can:admin'])->group(function () {
    // Route::get('/admin', [HomeController::class, 'Dadmin']);
    Route::get('/admin', [HomeController::class, 'dashboard']);
    Route::get('/admin/profile', [HomeController::class, 'Profile']);
    Route::get('/admin/pembayaran', [HomeController::class, 'Pembayaran']);
    Route::get('/admin/order', [HomeController::class, 'Order']);
    Route::get('/admin/pending-order', [HomeController::class, 'PendingOrder'])->name('pending-order');
    Route::post('/admin/pending-order/confirm/{id}', [HomeController::class, 'confirm'])->name('pendingorder.confirm');
    Route::get('/admin/confirm-order', [HomeController::class, 'ConfirmOrder']);
    Route::get('/admin/ongoing-order', [HomeController::class, 'OngoingOrder']);
    Route::get('/admin/finished-order', [HomeController::class, 'FinishOrder']);
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/dashboard'); // Redirect ke halaman dashboard
})->name('logout');

// Routes untuk user biasa
Route::middleware(['auth', 'can:user'])->group(function () {
    Route::get('/user', [HomeController::class, 'Duser']);
    Route::get('/user/profile', [ProfileUserController::class, 'index'])->middleware('auth');
    Route::post('/save-profile', [ProfileUserController::class, 'saveProfile'])->name('saveProfile');
    Route::get('/user/order', [OrderUserController::class, 'index']);
});

// order User
Route::get('/user/order/invoice/view/{id}', [OrderUserController::class, 'viewInvoice'])->name('view.invoice');
Route::get('/user/order/invoice/download/{id}', [OrderUserController::class, 'downloadInvoice'])->name('download.invoice');

// maincourse
Route::get('/admin/maincourse', [MaincourseController::class, 'index'])->name('maincourse.index');
Route::post('/admin/maincourse/store',[MaincourseController::class,'store'])->name('maincourse.store');
Route::get('/admin/maincourse/{id}', [MaincourseController::class, 'show'])->name('maincourse.show');
Route::get('/admin/maincourse/{id_maincourse}/edit', [MaincourseController::class ,'edit'])->name('maincourse.edit');
Route::put('/admin/maincourse/{id_maincourse}', [MaincourseController::class ,'update'])->name('maincourse.update');

// dishes
Route::get('/admin/dishes', [DishesController::class, 'index'])->name('dishes.index');
Route::post('/admin/dishes/store',[DishesController::class,'store'])->name('dishes.store');
Route::get('/admin/dishes/{id}', [DishesController::class, 'show'])->name('dishes.show');
Route::get('/admin/dishes/{id_dishes}/edit', [DishesController::class ,'edit'])->name('dishes.edit');
Route::put('/admin/dishes/{id_dishes}', [DishesController::class ,'update'])->name('dishes.update');

// gedung
Route::get('/admin/gedung', [GedungController::class, 'index'])->name('gedung.index');
Route::post('/admin/gedung/store',[GedungController::class,'store'])->name('gedung.store');
Route::get('/admin/gedung/{id_gedung}/edit', [GedungController::class ,'edit'])->name('gedung.edit');
Route::put('/admin/gedung/{id}', [GedungController::class ,'update'])->name('gedung.update');

// dekorasi
Route::get('/admin/dekorasi', [DekorasiController::class, 'index'])->name('dekorasi.index');
Route::post('/admin/dekorasi/store',[DekorasiController::class,'store'])->name('dekorasi.store');
Route::get('/admin/dekorasi/{id_dekorasi}/edit', [DekorasiController::class ,'edit'])->name('dekorasi.edit');
Route::put('/admin/dekorasi/{id}', [DekorasiController::class ,'update'])->name('dekorasi.update');

// dokumentasi
Route::get('/admin/dokumentasi', [DokumentasiController::class, 'index'])->name('dokumentasi.index');
Route::post('/admin/dokumentasi/store',[DokumentasiController::class,'store'])->name('dokumentasi.store');
Route::get('/admin/dokumentasi/{id_dokumentasi}/edit', [DokumentasiController::class ,'edit'])->name('dokumentasi.edit');
Route::put('/admin/dokumentasi/{id}', [DokumentasiController::class ,'update'])->name('dokumentasi.update');

// hiburan
Route::get('/admin/hiburan', [HiburanController::class, 'index'])->name('hiburan.index');
Route::post('/admin/hiburan/store',[HiburanController::class,'store'])->name('hiburan.store');
Route::get('/admin/hiburan/{id_hiburan}/edit', [HiburanController::class ,'edit'])->name('hiburan.edit');
Route::put('/admin/hiburan/{id}', [HiburanController::class ,'update'])->name('hiburan.update');

// bridalstyle
Route::get('/admin/bridalstyle', [BridalstyleController::class, 'index'])->name('bridalstyle.index');
Route::post('/admin/bridalstyle/store',[BridalstyleController::class,'store'])->name('bridalstyle.store');
Route::get('/admin/bridalstyle/{id_bridalstyle}/edit', [BridalstyleController::class ,'edit'])->name('bridalstyle.edit');
Route::put('/admin/bridalstyle/{id}', [BridalstyleController::class ,'update'])->name('bridalstyle.update');

// bridalstyle
Route::get('/admin/itembridalstyle', [BridalstyleController::class, 'itemindex'])->name('itembridalstyle.index');
Route::post('/admin/itembridalstyle/store',[BridalstyleController::class,'store2'])->name('itembridalstyle.store');
Route::get('/admin/itembridalstyle/{id_bridalstyle}/edit', [BridalstyleController::class ,'itemedit'])->name('itembridalstyle.edit');
Route::put('/admin/itembridalstyle/{id}', [BridalstyleController::class ,'itemupdate'])->name('bridalstyle.update');

// souvenir
Route::get('/admin/souvenir', [SouvenirController::class, 'index'])->name('souvenir.index');
Route::post('/admin/souvenir/store',[SouvenirController::class,'store'])->name('souvenir.store');
Route::get('/admin/souvenir/{id_souvenir}/edit', [SouvenirController::class ,'edit'])->name('souvenir.edit');
Route::put('/admin/souvenir/{id}', [SouvenirController::class ,'update'])->name('souvenir.update');

// undangan
Route::get('/admin/undangan', [UndanganController::class, 'index'])->name('undangan.index');
Route::post('/admin/undangan/store',[UndanganController::class,'store'])->name('undangan.store');
Route::get('/admin/undangan/{id_undangan}/edit', [UndanganController::class ,'edit'])->name('undangan.edit');
Route::put('/admin/undangan/{id}', [UndanganController::class ,'update'])->name('undangan.update');


// Booking
Route::get('/user/booking', [BookingController::class, 'index'])->name('booking.index');
Route::post('/user/booking/store-session', [BookingController::class, 'storeSession'])->name('pemesanan.storeSession');

// PEMESANAN
Route::get('/user/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::post('/user/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');
// Keranjang
Route::get('/user/keranjang', [KeranjangController::class, 'index'])->name('keranjang');

// Routing untuk gedung
Route::get('/gedung', [KeranjangController::class, 'indexgedung'])->name('pemesanangedung.index');
Route::post('/gedung', [KeranjangController::class, 'storegedung'])->name('pemesanangedung.store');
Route::post('/skip-dekorasi', [KeranjangController::class, 'skipdekorasi'])->name('skip.pemesanangedung');

// Routing untuk katering
Route::get('/katering', [KeranjangController::class, 'indexkatering'])->name('pemesanankatering.index');
Route::post('/katering', [KeranjangController::class, 'storekatering'])->name('pemesanankatering.store');
Route::post('/skip-dekorasi', [KeranjangController::class, 'skipdekorasi'])->name('skip.pemesanangedung');

// Routing untuk katering
Route::get('/katering2', [KeranjangController::class, 'indexkatering2'])->name('pemesanankatering2.index');
Route::post('/katering2', [KeranjangController::class, 'storekatering2'])->name('pemesanankatering2.store');
Route::post('/skip-dekorasi', [KeranjangController::class, 'skipdekorasi'])->name('skip.pemesanangedung');

// Routing untuk dekorasi
Route::get('/dekorasi', [KeranjangController::class, 'indexdekorasi'])->name('pemesanandekorasi.index');
Route::post('/dekorasi', [KeranjangController::class, 'storedekorasi'])->name('pemesanandekorasi.store');
Route::post('/skip-dekorasi', [KeranjangController::class, 'skipdekorasi'])->name('skip.pemesanandekorasi');

// Routing untuk dokumentasi
Route::get('/dokumentasi', [KeranjangController::class, 'indexdokumentasi'])->name('pemesanandokumentasi.index');
Route::post('/dokumentasi', [KeranjangController::class, 'storedokumentasi'])->name('pemesanandokumentasi.store');
Route::post('/skip-dokumentasi', [KeranjangController::class, 'skipdokumentasi'])->name('skip.pemesanandokumentasi');

// Routing untuk hiburan
Route::get('/hiburan', [KeranjangController::class, 'indexhiburan'])->name('pemesananhiburan.index');
Route::post('/hiburan', [KeranjangController::class, 'storehiburan'])->name('pemesananhiburan.store');
Route::post('/skip-hiburan', [KeranjangController::class, 'skiphiburan'])->name('skip.pemesananhiburan');

// Routing untuk bridalstyle
Route::get('/bridalstyle', [KeranjangController::class, 'indexbridalstyle'])->name('pemesananbridalstyle.index');
Route::post('/bridalstyle', [KeranjangController::class, 'storebridalstyle'])->name('pemesananbridalstyle.store');
Route::post('/skip-hiburan', [KeranjangController::class, 'skiphiburan'])->name('skip.pemesananhiburan');

// Routing untuk souvenir
Route::get('/souvenir', [KeranjangController::class, 'indexsouvenir'])->name('pemesanansouvenir.index');
Route::post('/souvenir', [KeranjangController::class, 'storesouvenir'])->name('pemesanansouvenir.store');
Route::post('/skip-hiburan', [KeranjangController::class, 'skiphiburan'])->name('skip.pemesananhiburan');

// Routing untuk souvenir
Route::get('/undangan', [KeranjangController::class, 'indexundangan'])->name('pemesananundangan.index');
Route::post('/undangan', [KeranjangController::class, 'storeundangan'])->name('pemesananundangan.store');
Route::post('/skip-hiburan', [KeranjangController::class, 'skiphiburan'])->name('skip.pemesananhiburan');

