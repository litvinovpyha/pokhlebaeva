@extends('layouts.main')

@section('content')
    <div class="py-16 sm:py-24 lg:py-32 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-xl p-8 space-y-6">
            <div class="text-center">
                <svg class="mx-auto size-16 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg>
                <h1 class="text-2xl font-bold text-gray-900 mt-4">{{ $user->name }}</h1>
                <p class="text-sm text-gray-600">{{ $user->email }}</p>
                <span class="inline-block mt-2 px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-sm">
                    {{ ucfirst($user->role) }}
                </span>
            </div>
        </div>
        <h2 class="text-2xl font-bold text-gray-900 mt-4">Доступные:</h2>
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($courses as $course)
                <div
                    class="flex items-center sm:justify-between gap-4 bg-gray-50 rounded-xl p-4 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center gap-4 flex-1 min-w-0">

                        <div class="flex flex-col min-w-0">
                            <p class="font-semibold text-gray-900 hover:text-indigo-600 break-words whitespace-normal truncate">
                                {{ $course->name }}
                            </p>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <form action="{{ route('user.revokeCourse', [$user->id, $course->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-full sm:w-auto bg-red-500 hover:bg-red-600 text-white text-sm font-medium py-2 px-4 rounded-md whitespace-nowrap">
                                Удалить доступ
                            </button>
                        </form>
                    </div>
                </div>

            @endforeach
        </div>
        <h2 class="text-2xl font-bold text-gray-900 mt-10">Доступные курсы (не назначены):</h2>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 mt-4">
            @foreach ($allCourses as $course)
                @if (!$courses->contains($course))
                    <div
                        class="flex items-center sm:justify-between gap-4 bg-gray-50 rounded-xl p-4 shadow-sm hover:shadow-md transition">
                        <div class="flex items-center gap-4 flex-1 min-w-0">
                            <div class="flex flex-col min-w-0">
                                <p class="font-semibold text-gray-900 break-words whitespace-normal truncate">
                                    {{ $course->name }}
                                </p>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <form action="{{ route('user.assignSingleCourse', [$user->id, $course->id]) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium py-2 px-4 rounded-md whitespace-nowrap">
                                    Дать доступ
                                </button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>


    </div>
@endsection