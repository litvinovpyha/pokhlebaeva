@extends('admin.layouts.app')
@section('content')
<div class="max-w-screen-xl mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Редактировать курс</h1>

  <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data"
        class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 space-y-6">
    @csrf
    @method('PUT')

    {{-- Название --}}
    <div>
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название курса</label>
      <input type="text" id="name" name="name" value="{{ old('name', $course->name) }}"
             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
             required>
    </div>

    {{-- Цена --}}
    <div>
      <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Цена (₸)</label>
      <input type="number" id="price" name="price" value="{{ old('price', $course->price) }}"
             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
             required>
    </div>
    {{-- Изображение --}}
    <div>
      <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Изображение</label>
      <input type="file" id="image" name="image"
             class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-white dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
      @if ($course->image)
        <div class="mt-2">
          <p class="text-sm text-gray-500 dark:text-gray-400">Текущее изображение:</p>
          <img src="{{ asset('storage/' . $course->image) }}" alt="Изображение курса"
               class="w-full max-w-xs mt-1 rounded shadow">
        </div>
      @endif
    </div>

    {{-- Кнопка сохранения --}}
    <div class="flex justify-end">
      <button type="submit"
              class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-6 py-2 rounded">
        Сохранить изменения
      </button>
    </div>
  </form>
</div>
@endsection