<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class MyCoursesController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $courses = $user->courses;
            if ($courses->isEmpty()) {
                return redirect(to: '/kursy/online-kursy');
            }
            return view('mycourses.index', compact('courses'));
        }

        return redirect('/');
    }

    public function show($courseId): View
    {
        $course = Course::findOrFail($courseId);
        return view('mycourses.show', compact('course'));
    }


}
