<?php

namespace App\Http\Controllers;

use App\Models\LessonContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LessonContentController extends Controller
{
    public function destroy(LessonContent $content)
    {
        // Удалим файл, если это image или pdf
        if (in_array($content->type, ['image', 'pdf']) && Storage::disk('public')->exists($content->content)) {
            Storage::disk('public')->delete($content->content);
        }

        $lessonId = $content->lesson_id;
        $content->delete();

        return redirect()->route('lessons.show', $lessonId)->with('success', 'Блок удалён.');
    }
}
