<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    function index(): View{
        return view('admin.index');
    }
}
