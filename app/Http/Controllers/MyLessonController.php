<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyLessonController extends Controller
{

    public function show($courseId, $lessonId)
    {
        $course = Course::findOrFail($courseId);

        $lesson = Lesson::where('course_id', $courseId)
            ->with('contents')
            ->findOrFail($lessonId);

        $nextLesson = Lesson::where('course_id', $courseId)
            ->where('id', '>', $lesson->id)
            ->orderBy('id')
            ->first();

        $previousLesson = Lesson::where('course_id', $courseId)
            ->where('id', '<', $lesson->id)
            ->orderByDesc('id')
            ->first();

        return view('mycourses.lesson', compact('lesson', 'nextLesson', 'previousLesson', 'course'));
    }
    public function complete(Request $request, $courseId, $lessonId)
    {
        $user = auth()->user();

        $exists = DB::table('lesson_user')
            ->where('user_id', $user->id)
            ->where('lesson_id', $lessonId)
            ->first();

        if ($exists) {
            DB::table('lesson_user')
                ->where('id', $exists->id)
                ->update(['completed_at' => now()]);
        } else {
            DB::table('lesson_user')->insert([
                'user_id' => $user->id,
                'lesson_id' => $lessonId,
                'completed_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->route('mycourses.show', $courseId);
    }


}
