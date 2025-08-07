<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserBookController;
use App\Http\Controllers\PembacaController;

// Admin Buku Management (Resourceful untuk admin)
Route::resource('buku', BukuController::class);
Route::get('/admin/master_buku', [BukuController::class, 'index'])->name('admin.master_buku');

// Halaman awal
Route::get('/', function () {
    return view('welcome');
});

// Halaman buku untuk User
Route::get('/book', [UserBookController::class, 'index'])->name('book');
Route::get('/book/{id}', [UserBookController::class, 'show'])->name('user.book.show');

// Halaman contact umum
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Authenticated Routes (User)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin-only Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard_admin', [AdminController::class, 'index'])->name('dashboard.admin');
    Route::get('/admin/pembaca', [PembacaController::class, 'index'])->name('admin.pembaca.index');
    Route::delete('/admin/pembaca{id}', [PembacaController::class, 'destroy'])->name('admin.pembaca.destroy');
});

// Auth Routes (from Breeze/Fortify/etc.)
require __DIR__.'/auth.php';
