@extends('layouts.main')
@section('content')
    <div class="py-32 bg-white dark:bg-gray-800 shadow p-6 space-y-6 overflow-y-auto">
        <div class="bg-white dark:bg-white border border-gray-200 rounded-lg shadow-none">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-black mb-4">Редактировать урок:</h2>
                <form action="{{ route('lessons.update', $lesson) }}" method="POST" enctype="multipart/form-data"
                    id="lesson-form">
                    @csrf
                    @method('PUT')
                    <div class="space-y-4">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-black">
                                Название урока</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $lesson->title) }}"
                                required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:text-black dark:border-gray-700">
                            @error('title')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div id="contents" class="space-y-4">

                        </div>
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
                        <div class="mt-4">
                            <button type="submit"
                                class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600">
                                Сохранить изменения
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        let contentCount = {{ count($lesson->contents) }};

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
