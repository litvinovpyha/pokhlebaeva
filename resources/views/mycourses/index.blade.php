@extends('layouts.main')
@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($courses as $course)
                    <a  href="{{ route('mycourses.show', $course->id) }}" class="group relative">
                        <h3 class="text-2xl text-gray-900 text-center"> {{ $course->name }} </h3>
                        <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->name }}" 
                        class="no-modal aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                    </a>
                @endforeach
            </div>
        </div>
    </div>

@endsection