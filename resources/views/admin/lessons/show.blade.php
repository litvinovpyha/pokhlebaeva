@extends('layouts.main')
@section('content')
    <div class=" py-32 h-screen bg-gray-100 dark:bg-gray-900 shadow-lg p-8 space-y-8">
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 space-y-4">
            <p class="text-gray-700 dark:text-gray-300"><strong>ID:</strong> {{ $lesson->id }}</p>
            <p class="text-gray-700 dark:text-gray-300"><strong>Название урока:</strong> {{ $lesson->title }}</p>
            <p class="text-gray-700 dark:text-gray-300"><strong>Дата создания:</strong>
                {{ $lesson->created_at->format('d.m.Y H:i') }}</p>


            @foreach ($lesson->contents as $content)
                <div class="relative bg-white dark:bg-gray-700 rounded shadow p-6 mt-6">

                    <form action="{{ route('lesson-contents.destroy', $content->id) }}" method="POST"
                        onsubmit="return confirm('Удалить этот блок?');" class="top-2 right-2 z-20">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800 text-2xl font-bold leading-none">
                            &times;
                        </button>
                    </form>

                    {{-- Тип контента --}}
                    @if ($content->type == 'text')
                        <div>
                            <p class="text-gray-700 dark:text-gray-300"><strong>Текст:</strong></p>
                            <p class="mt-2 text-gray-700 dark:text-gray-300">{{ $content->content }}</p>
                        </div>
                    @elseif ($content->type == 'image')
                        <div>
                            <p class="text-gray-700 dark:text-gray-300"><strong>Изображение:</strong></p>
                            <img src="{{ asset('storage/' . $content->content) }}" alt="Изображение контента"
                                class="mt-2 rounded w-full max-w-md">
                        </div>
                    @elseif ($content->type == 'pdf')
                        <div>
                            <p class="text-gray-700 dark:text-gray-300"><strong>PDF файл:</strong></p>
                            <a href="{{ asset('storage/' . $content->content) }}" target="_blank"
                                class="text-blue-600 hover:text-blue-700">
                                Скачать PDF
                            </a>
                        </div>
                    @elseif ($content->type == 'youtube')
                        <div>
                            <p class="text-gray-700 dark:text-gray-300"><strong>Видео на YouTube:</strong></p>
                            <a href="{{ $content->content }}" target="_blank" class="text-blue-600 hover:text-blue-700">
                                Смотреть видео
                            </a>
                        </div>
                    @endif
                </div>
            @endforeach



            <div class="flex gap-4 mt-6">
                <a href="{{ route('lessons.edit', $lesson->id) }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded">
                    Редактировать
                </a>

                <form action="{{ route('lessons.destroy', $lesson->id) }}" method="POST"
                    onsubmit="return confirm('Удалить урок?');">
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