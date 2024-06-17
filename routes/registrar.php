<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrarController;

//-------------------- Registrar ROUTES ----------------------//

Route::get('registrar/dashboard', [RegistrarController::class, 'index'])
    ->middleware('role:registrar')
    ->name('registrar.dashboard');



