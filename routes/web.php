<?php

use App\Http\Controllers\ProfileController;
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
    return view('informasi');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('informasi');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/kontak', function () {
    return view('kontak');
})->middleware(['auth', 'verified'])->name('kontak');
Route::get('/informasi', function () {
    return view('informasi');
})->middleware(['auth', 'verified'])->name('informasi');
Route::get('/siswaDetails', function () {
    return view('siswaDetails');
})->middleware(['auth', 'verified'])->name('siswaDetails');
Route::get('/isiDataDiri', function () {
    return view('isiDataDiri');
})->middleware(['auth', 'verified'])->name('isiDataDiri');
Route::post('/datadiricreate', [App\Http\Controllers\BiiodataController::class, 'create'])->name('biodata.create');
Route::delete('/dataPendaftar/{id}', [App\Http\Controllers\BiiodataController::class, 'delete'])->name('biodata.delete');
Route::get('/admin', function () {
    return view('dashboardadmin');
})->middleware(['auth', 'verified'])->name('dashboardadmin');
Route::get('/pembayaranFormulir', function () {
    return view('pembayaranFormulir');
})->middleware(['auth', 'verified'])->name('pembayaranFormulir');
Route::get('/dataPendaftar', function () {
    return view('dataPendaftar');
})->middleware(['auth', 'verified'])->name('dataPendaftar');



Route::middleware('auth')->group(function () {
    // Route::get('/home', [HomeController::class, 'index'])->name('home') ;

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
