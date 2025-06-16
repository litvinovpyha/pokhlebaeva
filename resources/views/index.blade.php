@extends('layouts.main')
@section('title', 'Курсы парикмахеров и мастеров маникюра в Алматы | Indigo')
@section('content')
    <div>
        <div class="relative isolate">
            <div class="absolute inset-0 -z-10 bg-cover bg-[position:69%_center] opacity-90"
                style="background-image: url('{{ asset('images/banner.jpg') }}'); height: auto;">
            </div>
            <div class="mx-auto max-w-2xl  py-32 lg:max-w-3xl lg:py-56 text-center">
                <h1
                    class="text-4xl font-bold tracking-tight sm:text-6xl drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)] uppercase text-white">
                    Курсы парикмахеров, колористов и мастеров маникюра в Алматы
                </h1>
                <p
                    class="mt-8 text-lg font-medium sm:text-2xl drop-shadow-[0_1px_2px_rgba(0,0,0,0.3)] uppercase text-neutral-900">
                    КРЕПКИЙ ФУНДАМЕНТ ВАШИХ ЗНАНИЙ </br>
                    СКИДКА до - 40% на обучение
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ route('callback') }}"
                        class="rounded-md p-3 text-sm font-semibold shadow bg-white text-neutral-900">
                        Заказать звонок
                    </a>
                    <a href="{{ route('online')}}" class="text-sm font-semibold underline text-white">
                        Онлайн курсы →
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('partials.guarantee')
    <div class="p-4 bg-gray-100">
        <div class="mx-auto max-w-7xl">
            <div class="mx-auto max-w-2xl lg:max-w-none sm:py-24 lg:py-32">
                <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 lg:grid-cols-4 lg:gap-x-6">
                    @php
                        $items = [
                            ['route' => 'hailstylist', 'title' => 'Курсы парикмахеров, колористов', 'img' => 'images/hairstylist/coloristika.jpeg'],
                            ['route' => 'manicure', 'title' => 'курсы маникюра, педикюра и наращивания ногтей', 'img' => 'images/manicure/manicure-pedicure-intensiv.jpg'],
                            ['route' => 'onlinemanicure', 'title' => 'онлайн курс маникюра', 'img' => 'images/manicure/manicure.jpg'],
                            ['route' => 'lamination', 'title' => 'онлайн курс ламинирования ресниц', 'img' => 'images/lamination/eyelashlamination.jpg'],
                        ];
                    @endphp
                    @foreach ($items as $index => $item)
                        <a href="{{ route($item['route']) }}"
                            class="group relative p-2 rounded-lg flex flex-col h-full {{ $index % 2 === 0 ? 'bg-white' : 'bg-gray-200' }}">
                            <h2 class="text-2xl text-center font-semibold text-gray-900 uppercase mb-2">
                                {{ $item['title'] }}
                            </h2>
                            <div class="mt-auto">
                                <img src="{{ asset($item['img']) }}" alt=""
                                    class="no-modal w-full rounded-lg object-cover group-hover:opacity-75 max-sm:h-80 sm:aspect-2/1 lg:aspect-square">
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('partials.reviews', ['video' => 'false', 'content' => 'index'])
    @include('partials.coursesingup', ['title' => 'Вам стоит записаться на курс в школу INDIGO, если вы:'])
    @include('partials.fivesection')
    @include('partials.team', ['title' => 'Наша команда', 'persons' => ['veronika', 'karina', 'olya', 'vika']])
    @include('partials.atmosphere')
    <div class="p-4 bg-gray-100">
        <h3 class="text-4xl font-semibold tracking-tight sm:text-5xl mb-2 text-center uppercase text-gray-900">
            УЗНАТЬ ПОДРОБНЕЕ О КУРСАХ </h3>
        <div class="mx-auto max-w-7xl">
            <div id="accordion-collapse" data-accordion="collapse" class="mt-5">
                <h3 id="accordion-collapse-heading-10">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 bg-gray-800 gap-3"
                        data-accordion-target="#accordion-collapse-body-10" aria-expanded="true"
                        aria-controls="accordion-collapse-body-10">
                        <span class="uppercase">Все еще думаете что рано идти учиться или уже поздно?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h3>
                <div id="accordion-collapse-body-10" class="hidden" aria-labelledby="accordion-collapse-heading-10">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-blue-600 dark:text-blue-500">Обучение в нашей школе можно проходить с 14 лет
                            и
                            до бесконечности, главное Ваше желание!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-7xl">
            <div id="accordion-collapse" data-accordion="collapse" class="mt-5">
                <h3 id="accordion-collapse-heading-11">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 bg-gray-800 gap-3"
                        data-accordion-target="#accordion-collapse-body-11" aria-expanded="true"
                        aria-controls="accordion-collapse-body-11">
                        <span class="uppercase">Есть ли у вас рассрочка?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h3>
                <div id="accordion-collapse-body-11" class="hidden" aria-labelledby="accordion-collapse-heading-11">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-blue-600 dark:text-blue-500">Да, Вы можете обучаться в рассрочку от Kaspi
                            Bank,
                            Kaspi Red, Halyk bank</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-7xl">
            <div id="accordion-collapse" data-accordion="collapse" class="mt-5">
                <h3 id="accordion-collapse-heading-12">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 bg-gray-800 gap-3"
                        data-accordion-target="#accordion-collapse-body-12" aria-expanded="true"
                        aria-controls="accordion-collapse-body-12">
                        <span class="uppercase">Как производится оплата?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h3>
                <div id="accordion-collapse-body-12" class="hidden" aria-labelledby="accordion-collapse-heading-12">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-blue-600 dark:text-blue-500">До начала занятий:</p>
                        <p class="mb-2 text-blue-600 dark:text-blue-500">1. Наличными</p>
                        <p class="mb-2 text-blue-600 dark:text-blue-500">2. Картой</p>
                        <p class="mb-2 text-blue-600 dark:text-blue-500">3. QR код</p>
                        <p class="mb-2 text-blue-600 dark:text-blue-500">4. рассрочка Kaspi Red</p>
                        <p class="mb-2 text-blue-600 dark:text-blue-500">5. кредит Kaspi Kredit </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-7xl">
            <div id="accordion-collapse" data-accordion="collapse" class="mt-5">
                <h3 id="accordion-collapse-heading-13">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 bg-gray-800 gap-3"
                        data-accordion-target="#accordion-collapse-body-13" aria-expanded="true"
                        aria-controls="accordion-collapse-body-13">
                        <span class="uppercase">Как выглядит ваш сертификат?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h3>
                <div id="accordion-collapse-body-13" class="hidden" aria-labelledby="accordion-collapse-heading-13">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <img class="w-[250px]" src="{{ asset('images/accordion/sertificate.jpg') }}" alt="">
                        <p class="mb-2 text-blue-600 dark:text-blue-500">Выдается именной сертификат на русском и
                            английском
                            языках</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-7xl">
            <div id="accordion-collapse" data-accordion="collapse" class="mt-5">
                <h3 id="accordion-collapse-heading-14">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 bg-gray-800 gap-3"
                        data-accordion-target="#accordion-collapse-body-14" aria-expanded="true"
                        aria-controls="accordion-collapse-body-14">
                        <span class="uppercase">Обучаются ли в нашей школе ученики из ближнего и дальнего
                            зарубежья?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h3>
                <div id="accordion-collapse-body-14" class="hidden" aria-labelledby="accordion-collapse-heading-14">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-blue-600 dark:text-blue-500">Да, у нас проходят обучение из России,
                            Узбекистана,
                            Киргизстана, Турции, ОАЭ, Катара, Канады, Европы, США</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection