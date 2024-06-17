<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrarController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/dashboard', function () {
    // This middleware will redirect to the dashboard based on role
})->middleware('role')->name('dashboard');


//-------------------- ADMIN ROUTES ----------------------//
Route::get('admin/dashboard', [AdminController::class, 'index'])
    ->middleware('role:admin')
    ->name('admin.dashboard');


//-------------------- Registrar ROUTES ----------------------//
Route::get('registrar/dashboard', [RegistrarController::class, 'index'])
    ->middleware('role:registrar')
    ->name('registrar.dashboard');


require __DIR__ . '/auth.php';
