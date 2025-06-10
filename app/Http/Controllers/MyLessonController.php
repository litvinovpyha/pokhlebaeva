<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class MyLessonController extends Controller
{
    public function show($courseId, $lessonId)
{
    $course = Course::findOrFail($courseId);
    $lesson = Lesson::where('course_id', $courseId)->with('contents')->findOrFail($lessonId);

    return view('mycourses.lesson', compact('course', 'lesson'));
}

}
