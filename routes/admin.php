<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

//-------------------- ADMIN ROUTES ----------------------//

Route::get('admin/dashboard', [AdminController::class, 'index'])
    ->middleware('role:admin')
    ->name('admin.dashboard');
