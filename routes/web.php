<?php

use App\Http\Controllers\DekorasiController;
use App\Http\Controllers\DishesController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaincourseController;
use App\Models\Maincourse;
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
    Route::get('/admin', [HomeController::class, 'Dadmin']);
});

// Routes untuk user biasa
Route::middleware(['auth', 'can:user'])->group(function () {
    Route::get('/user', [HomeController::class, 'Duser']);
});

// maincourse
Route::get('/admin/maincourse', [MaincourseController::class, 'index'])->name('admin.index');
Route::post('/admin/maincourse/store',[MaincourseController::class,'store'])->name('admin.store');
Route::get('/admin/maincourse/{id_maincourse}/edit', [MaincourseController::class ,'edit'])->name('admin.edit');
Route::put('/admin/maincourse/{id_maincourse}', [MaincourseController::class ,'update'])->name('admin.update');

// dishes
Route::get('/admin/dishes', [MaincourseController::class, 'index'])->name('admin.indexD');
Route::post('/admin/dishes/store',[MaincourseController::class,'storeD'])->name('admin.storeD');
Route::get('/admin/dishes/{id_dishes}/edit', [MaincourseController::class ,'editD'])->name('admin.editD');
Route::put('/admin/dishes/{id_dishes}', [MaincourseController::class ,'updateD'])->name('admin.updateD');

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
