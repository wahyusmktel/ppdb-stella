<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

// Halaman Landing Page (Publik)
Route::get('/', [LandingPageController::class, 'index'])->name('landing.page');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// === GRUP RUTE ADMIN KITA ===
// 'prefix' => 'admin' -> semua URL akan diawali /admin/...
// 'middleware' => ['auth', 'admin'] -> HARUS login DAN HARUS admin
Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {

    // Rute: /admin/dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Di sinilah nanti kita akan menambahkan rute CRUD
    // Misal: Route::resource('services', ServiceController::class);

    // 2. TAMBAHKAN RUTE INI
    // Ini akan otomatis membuat rute untuk:
    // - admin.services.index (GET)
    // - admin.services.create (GET)
    // - admin.services.store (POST)
    // - admin.services.show (GET)
    // - admin.services.edit (GET)
    // - admin.services.update (PUT/PATCH)
    // - admin.services.destroy (DELETE)
    Route::resource('services', ServiceController::class);
});

require __DIR__ . '/auth.php';
