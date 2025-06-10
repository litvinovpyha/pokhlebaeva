<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{

    public function index():View{
        $title = 'Школа красоты Indigo';
        return view('index',compact('title'));
    }
}
