@extends('layouts.main')
@section('title', 'Онлайн курс маникюра и педикюра — Обучение с нуля | Indigo')

@section('content')
<div class="bg-white">
        <div class="relative isolate">
            <!-- Фоновое изображение -->
            <div class="absolute inset-0 -z-10 bg-cover bg-[position:69%_center] opacity-90"
                style="background-image: url('{{ asset('images/banner.png') }}'); height: auto;">
            </div>
            <!-- Контент -->
            <div class="mx-auto max-w-2xl py-32 lg:max-w-3xl lg:py-56 text-white text-center">
                <h1
                    class="text-3xl font-bold tracking-tight sm:text-6xl text-white drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)] uppercase">
                    Онлайн курс маникюра и педикюра — стань профессионалом с нуля               </h1>
                <p
                    class="mt-8 text-lg font-medium sm:text-xl text-neutral-900 drop-shadow-[0_1px_2px_rgba(0,0,0,0.3)] uppercase">
                    Научим делать «Дорогой» маникюр <br>
                    и зарабатывать от 400K <br>
                    СКИДКА до -30 % на обучение 

                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ route('callback') }}"
                        class="rounded-md bg-white text-neutral-900 px-5 py-3 text-sm font-semibold shadow hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-white">
                        Заказать звонок
                    </a>
                    <a href="{{ route('online')}}" class="text-sm font-semibold text-white-900  hover:text-white underline">
                        Онлайн курсы →
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('partials.guarantee', ['showFirstVideo' => false])
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">онлайн курс
                    маникюра "идеальный комбинированный+ аппаратный"</h2>
                <p class="mt-4 text-gray-500  text-center">Программа курса включает:</p>
                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/manicure/manicure.jpg') }}" alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="pt-4 pb-2">
                            <dt class="font-medium text-gray-900">Три коммерческие техники маникюра:</dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Аппаратный по мокрому- подходит к любому типу кожи (фрезы)</li>
                                <li>Комбинированный одной фрезой/щипчики</li>
                                <li>Скоростной комби фреза/ ножнички</li>
                            </ul>

                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Покрытие «под кутикулу»</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Покрытие «под кутикулу» с идеальными бликами</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Техника правильной формы ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Технику правильного опила формы ногтей (овал,
                                миндаль, мягкий квадрат)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Работа с фрезами</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Работу фрезами без пропилов</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Два способа реставрации сломанного ногтя</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Два способа реставрации сломанного ногтя :полигелем
                                и ниточным протезированием</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Техника правильной формы ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Технику правильного опила формы ногтей (овал,
                                миндаль, мягкий квадрат)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Дизайн</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Экспресс дизайн (френч, стемпинг, пигменты, стразы,
                                слайдеры)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4 pb-2">
                            <dt class="font-medium text-gray-900">SPA уход
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4 pb-2">
                            <dt class="font-medium text-gray-900">Способы фотосъемки ваших работ</dt>
                        </div>
                    </div>
                </dl>
                <div class="div grid grid-cols-1 lg:grid-cols-2 ">
                    <div class="px-0 py-4 flex items-center justify-center">
                        <div
                            class="relative bg-gray-900/90 backdrop-blur-lg text-white rounded-2xl px-3 py-6 sm:p-12 w-full max-w-2xl shadow-xl ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 bg-red-500 text-white text-1xl font-bold uppercase px-3 py-1 rounded-xl shadow-md">
                                -70% до 5 мая
                            </div>

                            <!-- Заголовок -->
                            <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                                цена онлайн курса маникюра
                                "ИДЕАЛЬНЫЙ комбинированный+аппаратный"
                                тариф самостоятельный
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">25 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">7 500 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                    <span class="text-white font-medium">625 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    36 видео уроков
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Видео уроки в HD качестве
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Обратная связь с тренером
                                </li>

                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Рассрочка, Kaspi Red
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БЕЗ СЕРТИФИКАТА
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                                class="mt-8 block w-full rounded-md bg-indigo-500 px-5 py-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                    <div class="px-0 py-4 flex items-center justify-center">
                        <div
                            class="relative bg-gray-900/90 backdrop-blur-lg text-white rounded-2xl px-3 py-6 sm:p-12 w-full max-w-2xl shadow-xl ring-1 ring-white/10">
                            <div
                                class="absolute top-0 right-0 bg-red-500 text-white text-1xl font-bold uppercase px-3 py-1 rounded-xl shadow-md">
                                -70% до 5 мая
                            </div>

                            <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                                цена онлайн курса маникюра
                                "ИДЕАЛЬНЫЙ комбинированный+аппаратный"
                                тариф с сертификатом
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">30 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">9 000 ₸</span>
                                </p>
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                    <span class="text-white font-medium">750 ₸/мес.</span>
                                </p>

                            </div>
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    36 видео уроков
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Видео уроки в HD качестве
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Обратная связь с тренером
                                </li>

                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Рассрочка, Kaspi Red
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Сертификат (электронный)

                                </li>
                            </ul>
                            <a href="{{ route('callback') }}"
                                class="mt-8 block w-full rounded-md bg-indigo-500 px-5 py-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.coursesingup', ['title' => 'Вам стоит записаться на курс в школу INDIGO, если вы:'])
    @include('partials.reviews', ['video' => 'false', 'content' => 'onlinemanicure'])
    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['olya', 'veronika', 'vika']])
@endsection