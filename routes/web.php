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
    return view('dashboardadmin');
})->middleware(['auth', 'verified'])->name('dashboardadmin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/kontak', function () {
    return view('kontak');
})->middleware(['auth', 'verified'])->name('kontak');
Route::get('/informasi', function () {
    return view('informasi');
})->middleware(['auth', 'verified'])->name('informasi');
Route::get('/isiDataDiri', function () {
    return view('isiDataDiri');
})->middleware(['auth', 'verified'])->name('isiDataDiri');



Route::middleware('auth')->group(function () {
    // Route::get('/home', [HomeController::class, 'index'])->name('home') ;

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
