<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LaminationController extends Controller
{
    public function index(): View{
        return view('lamination');
    }}
