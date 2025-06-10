@extends('layouts.main')
@section('content')
<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 sm:px-6  lg:max-w-7xl lg:px-8">
        <h3 class="text-2xl text-gray-900 text-center mb-6">{{ $lesson->title }}</h3>
        @php
            $sortedContents = $lesson->contents->sortBy('position');
        @endphp
        <div class="space-y-6">
            @foreach ($sortedContents as $content)
                @switch($content->type)
                    @case('text')
                        <p class="text-gray-700">{{ $content->content }}</p>
                        @break
                    @case('image')
                        <img src="{{ asset('storage/' . $content->content) }}" alt="Image for {{ $lesson->title }}" class="mx-auto rounded-md max-h-60 object-contain">
                        @break
                    @case('pdf')
                    <div class="relative w-full pb-[56.25%] my-6">
    <embed src="{{ asset('storage/' . $content->content) }}" type="application/pdf" class="absolute top-0 left-0 w-full h-full" />
</div>
<a href="{{ asset('storage/' . $content->content) }}" target="_blank" class="text-blue-600 underline">
                            Скачать PDF
                        </a>
                        @break
                    @case('youtube')
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe class="w-full h-48 rounded-md"
                                src="https://www.youtube.com/embed/{{ $content->content }}"
                                title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                        </div>
                        @break
                @endswitch
            @endforeach
        </div>
    </div>
</div>
@endsection
