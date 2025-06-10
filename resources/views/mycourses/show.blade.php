@extends('layouts.main')
@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <h3 class="text-2xl text-gray-900 text-center"> {{ $course->name }} </h3>
                <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->name }}"
                    class="no-modal aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                <h3 class="text-2xl text-gray-900 text-center">Уроки курса:</h3>
                @foreach ($course->contents as $lesson)
                    <a href="{{ route('lesson.show', ['id' => $course->id, 'lesson_id' => $lesson->id]) }}"
                        class="mb-6 border-b pb-4 text-center">
                        <h4 class="text-xl font-semibold mb-2">{{ $lesson->title }}</h4>
                        @foreach ($lesson->contents as $content)
                            @if ($content->type === 'text')
                                <p class="mt-2 text-gray-700">{{ $content->content }}</p>
                            @endif
                        @endforeach
                    </a>
                @endforeach
            </div>
        </div>
    </div>

@endsection