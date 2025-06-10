@extends('layouts.main')

@section('content')
<div class="bg-white py-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($lessons as $lesson)
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                    @if ($lesson->image)
                        <img src="{{ asset('storage/' . $lesson->image) }}" alt="{{ $lesson->title }}"
                             class="aspect-square w-full object-cover lg:h-56 rounded-t-xl">
                    @endif

                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <h3 class="text-lg font-semibold text-gray-900 text-center mb-4">
                            {{ $lesson->title }}
                        </h3>
                        <div class="mt-auto flex flex-col gap-2">
                            <a href="{{ route('lessons.edit', $lesson->id) }}"
                               class="text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-200">
                                Редактировать
                            </a>

                            <a href="{{ route('lessons.show', $lesson->id) }}"
                               class="text-center bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-200">
                                Перейти
                            </a>

                            <form action="{{ route('lessons.destroy', $lesson->id) }}" method="POST"
                                  onsubmit="return confirm('Вы уверены, что хотите удалить урок?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="w-full text-center bg-red-600 hover:bg-red-700 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-200">
                                    Удалить
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
