<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{

    public function edit(User $user): View
    {
        $courses = $user->courses;
        $allCourses = Course::all();

        return view('admin.user.edit', compact('user', 'courses', 'allCourses'));
    }
    public function assignSingleCourse(User $user, Course $course)
    {
        $user->courses()->syncWithoutDetaching([$course->id]);
    
        return redirect()->back()->with('success', 'Доступ к курсу "' . $course->name . '" предоставлен.');
    }
    
    public function revokeCourse(User $user, Course $course)
    {
        $user->courses()->detach($course->id);

        return redirect()->back()->with('success', 'Доступ к курсу удалён.');
    }


}
