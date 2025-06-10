@props([
    'video',
    'content',
    
])
<section class="bg-white p-4 sm:py-32">
    <div class="mx-auto max-w-7xl lg:px-8">
        <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl mb-10 text-center uppercase">
            Отзывы наших учеников
        </h2>
        <div class="swiper">
            <div class="swiper-wrapper">
            @include('partials.reviews.' . $content)
            </div>
        </div>
    </div>
</section>
@if ($video == 'true')
<section class="bg-gray-50 p-4">
    <div class="mx-auto max-w-7xl">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
            <div class="aspect-video rounded-xl overflow-hidden shadow-lg">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/yGRufn6I7W4" title="Видеоотзыв 1"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="aspect-video rounded-xl overflow-hidden shadow-lg">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/PlT42xIOOYM" title="Видеоотзыв 2"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="aspect-video rounded-xl overflow-hidden shadow-lg">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/keqld_YG7QM" title="Видеоотзыв 3"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="aspect-video rounded-xl overflow-hidden shadow-lg">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/LkLDdNyBiCM" title="Видеоотзыв 4"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
@endif