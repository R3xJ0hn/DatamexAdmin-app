<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    function index(): View{
        return view('admin.pages.dashboard');
    }

    function sections(): View{
        return view('admin.pages.sections');
    }

    function schoolyear(): View{
        return view('admin.pages.schoolyear');
    }


}
