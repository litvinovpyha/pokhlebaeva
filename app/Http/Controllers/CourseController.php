<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    public function index(): View
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    public function create(): View
    {
        return view('admin.courses.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'price' => 'required|integer|min:0',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
                ]
            ,
            [
                'name.required' => 'Название курса обязательно для заполнения.',
                'price.required' => 'Цена курса обязательна для заполнения и может быть равна 0.',
                'image.required' => 'Изображение курса обязательно для загрузки.',
                'image.image' => 'Файл должен быть изображением (jpeg, png, jpg).',
                'image.mimes' => 'Изображение должно быть в одном из форматов: jpeg, png, jpg.',
                'image.max' => 'Размер изображения не должен превышать 1MB.',
            ]
        );
        $course = new Course();
        $course->name = $validated['name'];
        $course->price = $validated['price'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courses', 'public');
            $course->image = $imagePath;
        }


        $course->save();

        return redirect()->route('courses.show', $course)->with('success', 'Курс успешно создан!');
    }
    public function show(Course $course): View
    {
        return view('admin.courses.show', compact('course'));
    }
    public function edit(Course $course): View
    {
        return view('admin.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'price' => 'required|integer|min:0',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            ],
            [
                'name.required' => 'Название курса обязательно для заполнения.',
                'price.required' => 'Цена курса обязательна для заполнения и может быть равна 0.',
                'image.image' => 'Файл должен быть изображением (jpeg, png, jpg).',
                'image.mimes' => 'Изображение должно быть в одном из форматов: jpeg, png, jpg.',
                'image.max' => 'Размер изображения не должен превышать 1MB.',
            ]
        );

        // Обновление данных курса
        $course->name = $validated['name'];  // Обновляем имя курса
        $course->price = $validated['price'];  // Обновляем цену курса

        // Если изображение было загружено, обрабатываем его
        if ($request->hasFile('image')) {
            // Удаляем старое изображение, если оно существует
            if ($course->image) {
                \Storage::disk('public')->delete($course->image);
            }

            // Загружаем новое изображение
            $imagePath = $request->file('image')->store('courses', 'public');
            $course->image = $imagePath;  // Обновляем путь к изображению
        }

        // Сохраняем обновлённые данные
        $course->save();

        // Перенаправляем с сообщением об успехе
        return redirect()->route('courses.show', parameters: $course)->with('success', 'Курс успешно обновлён!');

    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Курс успешно удалён!');
    }

}
