@extends('layouts.main')

@section('content')
    <div class="bg-white py-12">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8">
            <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data"
                  class="bg-white rounded-xl shadow-lg p-6 space-y-6">
                @csrf
                @method('PUT')

                {{-- Название --}}
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Название курса</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $course->name) }}"
                           required
                           class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-900">
                </div>

                {{-- Цена --}}
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Цена (₸)</label>
                    <input type="number" id="price" name="price" value="{{ old('price', $course->price) }}"
                           required
                           class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-900">
                </div>

                {{-- Изображение --}}
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Изображение</label>
                    <input type="file" id="image" name="image"
                           class="w-full px-4 py-2 border border-gray-300 rounded-md text-gray-900 bg-white file:border-0 file:bg-blue-50 file:text-blue-700 file:font-medium file:px-4 file:py-2 file:rounded-md cursor-pointer">

                    @if ($course->image)
                        <div class="mt-4">
                            <p class="text-sm text-gray-500 mb-2">Текущее изображение:</p>
                            <img src="{{ asset('storage/' . $course->image) }}" alt="Изображение курса"
                                 class="w-full max-w-xs rounded shadow">
                        </div>
                    @endif
                </div>

                {{-- Кнопка сохранения --}}
                <div class="flex justify-end">
                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-6 py-2 rounded-md transition duration-200">
                        Сохранить изменения
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
