<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ManicureController extends Controller
{
    public function index(): View{
        return view('manicure');
    }
}
