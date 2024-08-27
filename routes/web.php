<?php

use App\Http\Controllers\DishesController;
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

Route::get('/admin/maincourse', [MaincourseController::class, 'index']);
route::post('admin/maincourse/store',[MaincourseController::class,'store'])->name('admin.store');

Route::get('/admin/dishes', [DishesController::class, 'index']);
