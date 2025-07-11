<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $completedLessons = DB::table('lesson_user')
            ->where('user_id', auth()->id())
            ->pluck('lesson_id')
            ->toArray();

        $course = Course::findOrFail($courseId);
        return view('mycourses.show', compact('course','completedLessons'));
    }


}
