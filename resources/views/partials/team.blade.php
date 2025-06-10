@props([
    'title',
    'persons',
])
<div class="bg-gray-50 p-4">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase">{{ $title }}</h2>
        </div>
        <div class="mt-6 grid gap-10 sm:grid-cols-1 lg:grid-cols-2 max-w-7xl mx-auto">
            @foreach ($persons as $person )
            @include('partials.teambody.' . $person)
            @endforeach
        </div>
    </div>