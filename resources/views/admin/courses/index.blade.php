@extends('layouts.main')

@section('content')
    @extends('layouts.main')

    @section('content')
        <div class="h-full flex w-full justify-center items-center dark:bg-gray-800 p-2">

            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-4 md:p-2 xl:p-5">

                <!-- card  -->
                @foreach($courses as $course)
                    <div class="relative bg-white border rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 transform transition duration-500 hover:scale-105">
                        <div class="p-2 flex justify-center">
                            <a href="{{ route('courses.show', $course->id) }}">
                                <img class="rounded-md no-modal"
                                     alt="{{ $course->name }}"
                                     src="{{ asset('storage/' . $course->image) }}"
                                     loading="lazy">
                            </a>
                        </div>
                        <div class="px-4 pb-3">
                            <div>
                                <a href="{{ route('courses.show', $course->id) }}" >
                                    <h5
                                        class="text-xl font-semibold tracking-tight hover:text-violet-800 dark:hover:text-violet-300 text-gray-900 dark:text-white ">
                                        {{$course->name}}
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    @endsection

@endsection

{{--    <div class="bg-white py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($courses as $course)
                    <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                        <img src="{{ asset('storage/' . $course->image) }}"
                            alt="{{ $course->name }}"
                            class="no-modal aspect-square w-full object-cover lg:h-56 rounded-t-xl">

                        <div class="p-4 flex-1 flex flex-col justify-between">
                            <h3 class="text-lg font-semibold text-gray-900 text-center mb-4">
                                {{ $course->name }}
                            </h3>

                            <div class="mt-auto flex flex-col gap-2">
                                <a href="{{ route('courses.edit', $course->id) }}"
                                    class="text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-200">
                                    Редактировать
                                </a>

                                <a href="{{ route('courses.show', $course->id) }}"
                                    class="text-center bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-200">
                                    Перейти
                                </a>

                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                                    onsubmit="return confirm('Вы уверены, что хотите удалить курс?');">
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
--}}
