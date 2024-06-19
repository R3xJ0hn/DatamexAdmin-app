<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

//-------------------- ADMIN ROUTES ----------------------//

Route::prefix('admin')->middleware('role:admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('schoolyear', [AdminController::class, 'schoolyear'])->name('admin.schoolyear');
    Route::get('sections', [AdminController::class, 'sections'])->name('admin.sections');

});
