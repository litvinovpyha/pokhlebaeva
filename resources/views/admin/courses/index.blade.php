@extends('admin.layouts.app')

@section('content')
<div class="max-w-screen-xl mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Список курсов</h1>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($courses as $course)
      <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-sm overflow-hidden">
        <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->name }}" class="w-full h-48 object-cover">
        
        <div class="p-4">
          <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">{{ $course->name }}</h2>
          <p class="text-gray-600 dark:text-gray-300 mb-4">Цена: <span class="font-bold">{{ $course->price }}₸</span></p>

          <div class="flex flex-col gap-2">
            <a href="{{ route('courses.edit', $course->id) }}"
               class="text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded w-full">
              Редактировать
            </a>
            <a href="{{ route('courses.show', $course) }}"
               class="text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded w-full">
              Перейти
            </a>
            <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                  onsubmit="return confirm('Вы уверены, что хотите удалить курс?');">
              @csrf
              @method('DELETE')
              <button type="submit"
                      class="text-center bg-red-600 hover:bg-red-700 text-white text-sm font-medium px-4 py-2 rounded w-full">
                Удалить
              </button>
            </form>
          </div>

        </div>
      </div>
    @endforeach
  </div>
</div>

@endsection