<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConsoleController extends Controller
{
    public function show(Request $request)
    {
        $query = User::query();

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }


        $users = $query
            ->orderBy('name')
            ->paginate(7)  
            ->withQueryString();

        return view('admin.console', compact('users'));
    }


}
