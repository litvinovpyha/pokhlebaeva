@extends('layouts.main')

@section('content')
<div class=" min-h-screen bg-gray-100 p-8 flex justify-center">
    <div class="bg-white shadow-lg rounded-lg p-6 max-w-md w-full space-y-4">
        <p class="text-gray-900"><strong>ID:</strong> {{ $course->id }}</p>
        <p class="text-gray-900"><strong>Название:</strong> {{ $course->name }}</p>
        <p class="text-gray-900"><strong>Цена:</strong> {{ $course->price }} ₸</p>
        <p class="text-gray-900"><strong>Дата создания:</strong> {{ $course->created_at->format('d.m.Y H:i') }}</p>

        @if ($course->image)
            <div>
                <p class="text-gray-900 font-semibold mb-2">Изображение:</p>
                <img src="{{ asset('storage/' . $course->image) }}" alt="Изображение курса"
                     class="rounded w-full max-w-md shadow-md">
            </div>
        @endif

        <div class="flex gap-4 mt-6">
            <a href="{{ route('courses.edit', $course->id) }}"
               class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded-md transition duration-200 text-center flex-1">
                Редактировать
            </a>

            <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                  onsubmit="return confirm('Удалить курс?');" class="flex-1">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white text-sm font-medium px-4 py-2 rounded-md transition duration-200">
                    Удалить
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
