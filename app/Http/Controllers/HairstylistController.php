<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HairstylistController extends Controller
{
    public function index(): View{
        $promotion = '-30% до 25 июня';

        return view('hairstylist', compact('promotion'));
    }
}
