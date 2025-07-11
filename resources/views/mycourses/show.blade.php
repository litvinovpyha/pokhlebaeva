@extends('layouts.main')

@section('content')
    <div class="bg-white py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">{{ $course->name }}</h2>

            <div class="flex justify-center mb-8">
                <img src="{{ asset('storage/' . $course->image) }}"
                     alt="{{ $course->name }}"
                     class="rounded-lg shadow-md w-full max-w-md object-cover" />
            </div>

            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Уроки курса:</h3>

            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($course->contents as $lesson)
                    <a href="{{ route('lesson.show', ['id' => $course->id, 'lesson_id' => $lesson->id]) }}"
                       class="block border rounded-lg p-4 transition shadow hover:shadow-lg hover:border-blue-500
                          {{ in_array($lesson->id, $completedLessons) ? 'bg-green-50 border-green-400' : 'bg-white border-gray-200' }}">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="text-lg font-bold text-gray-900">{{ $lesson->title }}</h4>
                            @if(in_array($lesson->id, $completedLessons))
                                <span class="inline-flex items-center justify-center w-6 h-6 bg-green-500 text-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            @endif
                        </div>

                        <p class="text-sm text-gray-600">
                            {{ in_array($lesson->id, $completedLessons) ? 'Выполнено' : '🔒 Ещё не выполнено' }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
