<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tamuController;
use Illuminate\Support\Facades\Route;
use App\Models\bukuTamu;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $data['pengaju'] = bukuTamu::orderBy('created_at', 'desc')->take(10)->get();
    
    // dd($data['pengaju']);
    return view('dashboard')->with($data);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('BukuTamu', [tamuController::class, 'index'])->name('tamu');
Route::post('pengajuan', [tamuController::class, 'create'])->name('pengajuan');

Route::get('admin', [adminController::class, 'index'])->name('admin');

require __DIR__.'/auth.php';