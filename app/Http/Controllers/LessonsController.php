<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\LessonContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class LessonsController extends Controller
{
    public function index(): View
    {

        $lessons = Lesson::all();
        return view('admin.lessons.index', compact('lessons'));
    }

    public function create(): View
    {
        $courses = Course::all();
        return view('admin.lessons.create', compact('courses'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => 'required|string|max:255',
                'course_id' => 'required',
                'contents' => 'required|array|min:1',
                'contents.*.type' => 'required|in:text,image,pdf,youtube',
                'contents.*.content' => 'required',
            ]
        );

        $lesson = Lesson::create([
            'title' => $validated['title'],
            'course_id' => $validated['course_id'],

        ]);

        foreach ($validated['contents'] as $index => $item) {
            switch ($item['type']) {
                case 'image':
                case 'pdf':
                    $file = $request->file("contents.$index.content");
                    if ($file && $file->isValid()) {
                        $path = $file->store('lesson_files', 'public');
                        $lesson->contents()->create([
                            'type' => $item['type'],
                            'content' => $path,
                            'position' => $index,
                        ]);
                    }
                    break;

                case 'youtube':
                    if (preg_match('/^https:\/\/(www\.)?youtube\.com\/watch\?v=.+$/', $item['content'])) {
                        $lesson->contents()->create([
                            'type' => $item['type'],
                            'content' => $item['content'],
                            'position' => $index,
                        ]);
                    } else {
                        return back()->withErrors(["contents.$index.content" => 'Введите корректную ссылку на YouTube.'])->withInput();
                    }
                    break;

                case 'text':
                    $lesson->contents()->create([
                        'type' => $item['type'],
                        'content' => $item['content'],
                        'position' => $index,
                    ]);
                    break;
            }
        }

        return redirect()->route('lessons.show', compact('lesson'));
    }
    public function show(Lesson $lesson): View
    {
        return view('admin.lessons.show', compact('lesson'));
    }
    public function edit(Lesson $lesson): View
    {
        return view('admin.lessons.edit', compact('lesson'));
    }

    public function update(Request $request, Lesson $lesson)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'contents' => 'nullable|array',
            'contents.*.id' => 'nullable|integer|exists:lesson_contents,id',
            'contents.*.type' => 'required_with:contents|string|in:text,image,pdf,youtube',
            'contents.*.content' => 'required_with:contents',
        ]);

        $lesson->title = $validated['title'];
        $lesson->save();

        $existingContentIds = $lesson->contents()->pluck('id')->toArray();
        $receivedContentIds = [];

        if (isset($validated['contents'])) {
            foreach ($validated['contents'] as $index => $item) {
                $contentId = $item['id'] ?? null;
                $receivedContentIds[] = $contentId;

                switch ($item['type']) {
                    case 'image':
                    case 'pdf':
                        // Для файлов может быть новое или не менялось
                        $file = $request->file("contents.$index.content");

                        if ($contentId) {
                            // Обновляем существующий блок
                            $content = $lesson->contents()->find($contentId);
                            if ($file && $file->isValid()) {
                                // Если есть новый файл - обновляем путь
                                $path = $file->store('lesson_files', 'public');
                                $content->content = $path;
                            }
                            // Если файла нет, значит файл не меняется - оставляем старый путь
                            $content->position = $index;
                            $content->save();
                        } else {
                            // Новый блок
                            if ($file && $file->isValid()) {
                                $path = $file->store('lesson_files', 'public');
                                $lesson->contents()->create([
                                    'type' => $item['type'],
                                    'content' => $path,
                                    'position' => $index,
                                ]);
                            }
                        }
                        break;

                    case 'youtube':
                        if (preg_match('/^https:\/\/(www\.)?youtube\.com\/watch\?v=.+$/', $item['content'])) {
                            if ($contentId) {
                                $content = $lesson->contents()->find($contentId);
                                $content->content = $item['content'];
                                $content->position = $index;
                                $content->save();
                            } else {
                                $lesson->contents()->create([
                                    'type' => $item['type'],
                                    'content' => $item['content'],
                                    'position' => $index,
                                ]);
                            }
                        } else {
                            return back()
                                ->withErrors(["contents.$index.content" => 'Введите корректную ссылку на YouTube.'])
                                ->withInput();
                        }
                        break;

                    case 'text':
                        if ($contentId) {
                            $content = $lesson->contents()->find($contentId);
                            $content->content = $item['content'];
                            $content->position = $index;
                            $content->save();
                        } else {
                            $lesson->contents()->create([
                                'type' => $item['type'],
                                'content' => $item['content'],
                                'position' => $index,
                            ]);
                        }
                        break;
                }
            }
        }
        return redirect()->route('lessons.show', compact('lesson'))->with('success', 'Урок успешно обновлён!');
    }
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('lessons.index')->with('success', 'Урок успешно удалён!');
    }
}
