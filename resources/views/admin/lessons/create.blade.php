@extends('layouts.main')
@section('content')
    <div class=" bg-white shadow p-6 space-y-6 overflow-y-auto">
        <div class="bg-white dborder border-gray-200 rounded-lg shadow-none">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Создать урок</h2>

                <form action="{{ route('lessons.store') }}" method="POST" enctype="multipart/form-data" id="lesson-form">
                    @csrf

                    <div class="space-y-4">
                        {{-- Название урока --}}
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 ">Название
                                урока</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                            @error('title')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror

                            <label for="course_id" class="text-sm font-medium text-gray-700 ">Выберите
                                курс</label>
                            <select name="course_id" id="course_id" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>

                            @error('course_id')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Контентные блоки --}}
                        <div id="contents" class="space-y-4"></div>

                        {{-- Кнопка добавления контента --}}
                        <div class="flex flex-wrap gap-2">
                            <button type="button" onclick="addContent('text')"
                                class="px-3 py-1 bg-gray-200 rounded w-full sm:w-auto">
                                + Текст
                            </button>
                            <button type="button" onclick="addContent('image')"
                                class="px-3 py-1 bg-gray-200 rounded w-full sm:w-auto">
                                + Изображение
                            </button>
                            <button type="button" onclick="addContent('pdf')"
                                class="px-3 py-1 bg-gray-200 rounded w-full sm:w-auto">
                                + PDF
                            </button>
                            <button type="button" onclick="addContent('youtube')"
                                class="px-3 py-1 bg-gray-200 rounded w-full sm:w-auto">
                                + YouTube
                            </button>
                        </div>

                        {{-- Кнопка сохранить --}}
                        <div class="mt-4">
                            <button type="submit"
                                class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 ">
                                Сохранить урок
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- JS --}}
    <script>
        let contentCount = 0;

        function addContent(type) {
            const container = document.getElementById('contents');
            const index = contentCount++;

            let html = '';
            if (type === 'text') {
                html = `
                            <div class="border p-4 rounded bg-gray-50">
                                <input type="hidden" name="contents[${index}][type]" value="text">
                                <label class="block text-sm font-medium text-gray-700">Текст</label>
                                <textarea name="contents[${index}][content]" rows="4" class="w-full mt-1 p-2 border rounded"></textarea>
                            </div>
                        `;
            } else if (type === 'image') {
                html = `
                            <div class="border p-4 rounded bg-gray-50">
                                <input type="hidden" name="contents[${index}][type]" value="image">
                                <label class="block text-sm font-medium text-gray-700">Изображение</label>
                                <input type="file" name="contents[${index}][content]" accept="image/*" class="w-full mt-1">
                            </div>
                        `;
            } else if (type === 'pdf') {
                html = `
                            <div class="border p-4 rounded bg-gray-50">
                                <input type="hidden" name="contents[${index}][type]" value="pdf">
                                <label class="block text-sm font-medium text-gray-700">PDF файл</label>
                                <input type="file" name="contents[${index}][content]" accept=".pdf" class="w-full mt-1">
                            </div>
                        `;
            } else if (type === 'youtube') {
                html = `
                            <div class="border p-4 rounded bg-gray-50">
                                <input type="hidden" name="contents[${index}][type]" value="youtube">
                                <label class="block text-sm font-medium text-gray-700">Ссылка на YouTube</label>
                                <input type="text" name="contents[${index}][content]" class="w-full mt-1 p-2 border rounded" placeholder="https://www.youtube.com/watch?v=...">
                            </div>
                        `;
            }

            container.insertAdjacentHTML('beforeend', html);
        }
    </script>
@endsection
