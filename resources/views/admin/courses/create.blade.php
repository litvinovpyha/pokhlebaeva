@extends('admin.layouts.app')
@section('content')
    <div class="max-w-screen-xl mx-auto">
        <div class="bg-white dark:bg-white border border-gray-200 rounded-lg shadow-none">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-black mb-4">Создать курс</h2>

                <!-- Форма для создания курса -->
                <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-4">
                        <!-- Поле для названия курса -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-black">Название
                                курса</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:text-black dark:border-gray-700 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Введите название курса">
                            @error('name')
                                <div class="bg-red-500 text-white p-4 rounded-lg">
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <!-- Поле для цены курса -->
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700 dark:text-black">Цена
                                курса</label>
                            <input type="number" name="price" id="price" value="{{ old('price') }}" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:text-black dark:border-gray-700 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Введите цену курса" min="0">
                            @error('price')
                                <div class="bg-red-500 text-white p-4 rounded-lg">
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <!-- Поле для загрузки изображения -->
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-black">Изображение
                                курса (jpeg,png,jpg)</label>
                            <input type="file" name="image" id="image" accept="image/*" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:text-black dark:border-gray-700 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('image')
                                <div class="bg-red-500 text-white p-4 rounded-lg">
                                    <p class="text-black-500 text-sm mt-2">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>  
                        <!-- Кнопка отправки формы -->
                        <div class="mt-4">
                            <button type="submit"
                                class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600">
                                Создать курс
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection