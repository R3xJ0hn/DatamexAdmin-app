<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class RegistrarController extends Controller
{
    function index(): View{
        return view('registrar.index');
    }
}
