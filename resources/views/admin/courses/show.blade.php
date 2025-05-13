@extends('admin.layouts.app') {{-- или ваш основной layout --}}

@section('content')
    <div class="max-w-screen-xl mx-auto mt-6 px-4">
        <h1 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-white">{{ $course->name }}</h1>

        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 space-y-4">
            <p class="text-gray-700 dark:text-gray-300"><strong>ID:</strong> {{ $course->id }}</p>
            <p class="text-gray-700 dark:text-gray-300"><strong>Название</strong> {{ $course->name }}</p>
            <p class="text-gray-700 dark:text-gray-300"><strong>Цена</strong> {{ $course->price }}</p>
            <p class="text-gray-700 dark:text-gray-300"><strong>Дата создания:</strong> {{ $course->created_at->format('d.m.Y H:i') }}</p>

            @if ($course->image)
                <div>
                    <p class="text-gray-700 dark:text-gray-300"><strong>Изображение:</strong></p>
                    <img src="{{ asset('storage/' . $course->image) }}" alt="Изображение курса" class="mt-2 rounded w-full max-w-md">
                </div>
            @endif

            <div class="flex gap-4 mt-6">
                <a href="{{ route('courses.edit', $course->id) }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded">
                    Редактировать
                </a>

                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" onsubmit="return confirm('Удалить курс?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-600 hover:bg-red-700 text-white text-sm font-medium px-4 py-2 rounded">
                        Удалить
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
