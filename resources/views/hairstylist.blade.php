@extends('layouts.main')
@section('title', 'Курсы парикмахера-колориста в Алматы Обучение с нуля до топ-мастера')

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
                    Курсы парикмахера-колориста в Алматы обучение с нуля до топ-мастера
                    </h1>
                <p
                    class="mt-8 text-lg font-medium sm:text-xl text-neutral-900 drop-shadow-[0_1px_2px_rgba(0,0,0,0.3)] uppercase">
                    Обучаем с нуля до <br> 
                    профессионала за 2 месяца <br>
                    Скидка до -30% на обучение <br>
                    успей записаться!

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
    @include('partials.guarantee', ['showSecondVideo' => false])
    <!-- КУРС "Парикмахер-колорист" -->
    <div class="bg-white  p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">КУРС
                    "ПАрикмахер- колорист"</h2>
                <p class="mt-4 text-gray-500  text-center">программа курса включает 4 блока:</p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900 text-center uppercase">блок по коммерческим стрижкам </dt>

                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/hairstylist/hairstylist-commercian.jpeg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Геометрия стрижек</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Геометрия стрижек. Фундаментальные техники стрижек
                                по английской классике : круг, треугольник, квадрат + комбинации</dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Три основные техники исполнения</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Три основные техники исполнения :слои, градуировка и
                                линия</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">12 коммерческих женских стрижек</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">12 коммерческих женских экспресс стрижек-работаем по
                                авторским схемам стрижек, где вы сможете выполнить экспресс стрижку, даже если вы новичок
                            </dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">5 коммерческих мужских стрижек</dt>
                        </div>
                    </div>
                </dl>
                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900 text-center uppercase">блок по колористике </dt>

                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/hairstylist/hairstylist-colorist.jpg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl sm:p-2">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Углубленная колористика</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Углубленная колористика БАЗА+ ПОВЫШЕНИЕ</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">10 коммерческих техник окрашивания</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">топ 10 коммерческих техник окрашивания волос</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Нейтрализация нежелательного пигмента</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Научим работать с корректорами, смешивать грамотно
                                красители, расскажем что такое % оксиданта и как его использовать, как нейтрализовать
                                нежелательный пигмент. Водные, пенные бани, бани для нейтрализации
                                нежелательного пигмента, цветовые бани, американский шампунь</dd>
                        </div>
                    </div>
            </div>
            </dl>
            <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                <div class="left-dl">
                    <div class="pt-4">
                        <dt class="font-medium text-gray-900 text-center uppercase">блок по коммерческим укладкам </dt>

                        <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                src="{{ asset('images/hairstylist/hairstylist-ukladki.jpeg') }}"
                                alt="Блок по коммерческим стрижкам"
                                class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                    </div>
                </div>
                <div class="right-dl sm:p-2">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">8 коммерческих укладок на различную длину волос:</dt>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dd class="mt-2 pb-2 text-sm text-gray-500">Локоны на брашинг (турецкая техника укладки) </dt>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dd class="mt-2 pb-2 text-sm text-gray-500">Работа со стайлерами и щипцами </dt>
                    </div>
                </div>
            </dl>
            <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                <div class="left-dl">
                    <div class="pt-4">
                        <dt class="font-medium text-gray-900 text-center uppercase">блок по перманентной завивке и SPA
                            уходам</dt>

                        <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                src="{{ asset('images/hairstylist/hairstylist-spa.jpg') }}"
                                alt="Блок по коммерческим стрижкам"
                                class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                    </div>
                </div>
                <div class="right-dl sm:p-2">


                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">5 техник перманентной завивки волос, включая boost up (3
                            техники в теории и 2 техники в практике) </dt>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">SPA коктейли+реконструкция волос</dt>
                    </div>
                </div>
            </dl>
            @include('partials.accordion', ['id' => 1, 'content' => 'heirstylistfirst'])
            <div class="div grid grid-cols-1 lg:grid-cols-2 ">
                <div class="px-0 py-4 flex items-center justify-center">
                    <div
                        class="relative bg-gray-900/90 backdrop-blur-lg text-white rounded-2xl px-3 py-6 sm:p-12 w-full max-w-2xl shadow-xl ring-1 ring-white/10">
                        <!-- Метка скидки -->
                        <div
                            class="absolute top-0 right-0 bg-red-500 text-white text-1xl font-bold uppercase px-3 py-1 rounded-xl shadow-md">
                            {{ $promotion }}
                        </div>
                        <!-- Заголовок -->
                        <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                            Цена курса парикмахера - колориста
                            тариф "Интенсивный"
                        </h3>
                        <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                            <!-- Старая цена + новая -->
                            <p class="flex items-baseline gap-x-2 text-sm">
                                <span class="line-through text-gray-400 text-base sm:text-sm">250 000 ₸</span>
                                <span class="text-2xl sm:text-xl font-bold text-green-400">175 000 ₸ в месяц</span>
                            </p>
                            <p class="text-sm text-center text-gray-300 uppercase">
                                <span class="text-white font-medium">Длительность курса</span>
                                <span class="text-white font-medium">4 месяца</span>
                            </p>

                            <!-- Рассрочка -->
                            <p class="text-sm text-center text-gray-300 uppercase">
                                В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                <span class="text-white font-medium">58 333 ₸/мес.</span>
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
                                4 блока
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                В ПОДАРОК 8 дней практики
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                В ПОДАРОК ОНЛАЙН КУРС
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                длительность 4 месяца-30 занятий по 4 часа, 18 занятий по 8 часов
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Посещение занятий 3 раза в неделю
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                80% практики + углубленная теория
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
                                Чек-листы по оформлению страницы в инстаграм, общению с клиентами и личному бренду
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
                        <!-- Метка скидки -->
                        <div
                            class="absolute top-0 right-0 bg-red-500 text-white text-1xl font-bold uppercase px-3 py-1 rounded-xl shadow-md">
                            {{ $promotion }}

                        </div>

                        <!-- Заголовок -->
                        <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                            ЦЕНА Курса Парикмахера - колориста
                            ТАРИф "Ускоренный"
                        </h3>
                        <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                            <!-- Старая цена + новая -->
                            <p class="flex items-baseline gap-x-2 text-sm">
                                <span class="line-through text-gray-400 text-base sm:text-sm">500 000 ₸</span>
                                <span class="text-2xl sm:text-xl font-bold text-green-400">350 000 ₸ в месяц</span>
                            </p>
                            <p class="text-sm text-center text-gray-300 uppercase">
                                <span class="text-white font-medium">Длительность курса</span>
                                <span class="text-white font-medium">2 месяца</span>
                            </p>

                            <!-- Рассрочка -->
                            <p class="text-sm text-center text-gray-300 uppercase">
                                В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                <span class="text-white font-medium">58 333 ₸/мес.</span>
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
                                Для тех, кто ограничен по времени.


                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                4 блока
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                РАССРОЧКА, KASPI RED
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                длительность 2 месяца-30 занятий по 4 часа, 18 занятий по 8 часов
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Посещение занятий 3 раза в неделю или каждый день.
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                80% практики + углубленная теория
                            </li>

                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Чек-листы по оформлению страницы в инстаграм, общению с клиентами и личному бренду
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
                        <!-- Метка скидки -->
                        <div
                            class="absolute top-0 right-0 bg-red-500 text-white text-1xl font-bold uppercase px-3 py-1 rounded-xl shadow-md">
                            {{ $promotion }}

                        </div>

                        <!-- Заголовок -->
                        <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                            ЦЕНА Курса Парикмахера - колориста
                            ТАРИф "Практикум"
                        </h3>
                        <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                            <!-- Старая цена + новая -->
                            <p class=" items-baseline gap-x-2 text-sm">
                                <span class="line-through text-gray-400 text-base sm:text-sm">1 900 000 ₸</span>
                                <span class="text-2xl sm:text-xl font-bold text-green-400">1 300 000 ₸ за курс</span>
                            </p>

                            <!-- Рассрочка -->
                            <p class="text-sm text-gray-300">
                                В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                <span class="text-white font-medium">108 333 ₸/мес.</span>
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
                                Для тех, кто хочет больше практики



                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                4 блока
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                РАССРОЧКА, KASPI RED
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                длительность 9 месяцев-144 занятия по 4 часа
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                график-3 занятия в неделю по 4 часа, блок по колористике по 8 часов в день
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                80% практики + углубленная теория
                            </li>

                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Чек-листы по оформлению страницы в инстаграм, общению с клиентами и личному бренду
                            </li>
                        </ul>
                        <!-- Кнопка записи -->
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
    <!-- КУРС "Женский мастер - колорист" -->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-8 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">КУРС "Женский
                    мастер - колорист"</h2>

                <p class="mt-4 text-gray-500  text-center">программа курса включает 4 блока:</p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900 text-center uppercase">блок по коммерческим стрижкам </dt>

                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/hairstylist/hairstylist-commercian.jpeg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Геометрия стрижек</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Геометрия стрижек. Фундаментальные техники стрижек
                                по английской классике : круг, треугольник, квадрат + комбинации</dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Три основные техники исполнения</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Три основные техники исполнения :слои, градуировка и
                                линия</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">12 коммерческих женских стрижек</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">12 коммерческих женских экспресс стрижек-работаем по
                                авторским схемам стрижек, где вы сможете выполнить экспресс стрижку, даже если вы новичок
                            </dd>
                        </div>
                    </div>
                </dl>
                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900 text-center uppercase">блок по колористике </dt>

                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/hairstylist/hairstylist-colorist.jpg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl sm:p-2">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Углубленная колористика</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Углубленная колористика БАЗА+ ПОВЫШЕНИЕ</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">10 коммерческих техник окрашивания</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">топ 10 коммерческих техник окрашивания волос</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Нейтрализация нежелательного пигмента</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Научим работать с корректорами, смешивать грамотно
                                красители, расскажем что такое % оксиданта и как его использовать, как нейтрализовать
                                нежелательный пигмент. Водные, пенные бани, бани для нейтрализации
                                нежелательного пигмента, цветовые бани, американский шампунь</dd>
                        </div>
                    </div>
            </div>
            </dl>
            <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                <div class="left-dl">
                    <div class="pt-4">
                        <dt class="font-medium text-gray-900 text-center uppercase">блок по коммерческим укладкам </dt>

                        <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                src="{{ asset('images/hairstylist/hairstylist-ukladki.jpeg') }}"
                                alt="Блок по коммерческим стрижкам"
                                class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                    </div>
                </div>
                <div class="right-dl sm:p-2">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">8 коммерческих укладок на различную длину волос:</dt>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dd class="mt-2 pb-2 text-sm text-gray-500">Локоны на брашинг (турецкая техника укладки) </dt>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dd class="mt-2 pb-2 text-sm text-gray-500">Работа со стайлерами и щипцами </dt>
                    </div>
                </div>
            </dl>
            <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                <div class="left-dl">
                    <div class="pt-4">
                        <dt class="font-medium text-gray-900 text-center uppercase">блок по перманентной завивке и SPA
                            уходам</dt>

                        <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                src="{{ asset('images/hairstylist/hairstylist-spa.jpg') }}"
                                alt="Блок по коммерческим стрижкам"
                                class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                    </div>
                </div>
                <div class="right-dl sm:p-2">


                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">5 техник перманентной завивки волос, включая boost up (3
                            техники в теории и 2 техники в практике) </dt>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">SPA коктейли+реконструкция волос</dt>
                    </div>
                </div>
            </dl>
            @include('partials.accordion', ['id' => 2, 'content' => 'womanstylist'])
            <div class="div grid grid-cols-1 lg:grid-cols-2 ">
                <div class="px-0 py-4 flex items-center justify-center">
                    <div
                        class="relative bg-gray-900/90 backdrop-blur-lg text-white rounded-2xl px-3 py-6 sm:p-12 w-full max-w-2xl shadow-xl ring-1 ring-white/10">
                        <!-- Метка скидки -->
                        <div
                            class="absolute top-0 right-0 bg-red-500 text-white text-1xl font-bold uppercase px-3 py-1 rounded-xl shadow-md">
                            {{ $promotion }}

                        </div>

                        <!-- Заголовок -->
                        <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                            Цена курса парикмахера женского мастера
                            тариф "Интенсивный"
                        </h3>
                        <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                            <!-- Старая цена + новая -->
                            <p class="flex items-baseline gap-x-2 text-sm">
                                <span class="line-through text-gray-400 text-base sm:text-sm">250 000 ₸</span>
                                <span class="text-2xl sm:text-xl font-bold text-green-400">175 000 ₸ в месяц</span>
                            </p>
                            <p class="text-sm text-center text-gray-300 uppercase">
                                <span class="text-white font-medium">Длительность курса</span>
                                <span class="text-white font-medium">3 месяца</span>
                            </p>

                            <!-- Рассрочка -->
                            <p class="text-sm text-center text-gray-300 uppercase">
                                В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                <span class="text-white font-medium">43 750 ₸/мес.</span>
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
                                4 блока
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                В ПОДАРОК 8 дней практики
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                В ПОДАРОК ОНЛАЙН КУРС
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                длительность 3 месяца-18 занятий по 4 часа, 18 занятий по 8 часов
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Посещение занятий 3 раза в неделю
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                80% практики + углубленная теория
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
                                Чек-листы по оформлению страницы в инстаграм, общению с клиентами и личному бренду
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
                        <!-- Метка скидки -->
                        <div
                            class="absolute top-0 right-0 bg-red-500 text-white text-1xl font-bold uppercase px-3 py-1 rounded-xl shadow-md">
                            {{ $promotion }}

                        </div>

                        <!-- Заголовок -->
                        <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                            Цена курса парикмахера женского мастера
                            тариф "Ускоренный"
                        </h3>
                        <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                            <!-- Старая цена + новая -->
                            <p class="flex items-baseline gap-x-2 text-sm">
                                <span class="line-through text-gray-400 text-base sm:text-sm">750 000 ₸</span>
                                <span class="text-2xl sm:text-xl font-bold text-green-400">525 000 ₸ ЗА КУРС</span>
                            </p>
                            <p class="text-sm text-center text-gray-300 uppercase">
                                <span class="text-white font-medium">Длительность курса</span>
                                <span class="text-white font-medium">1.5 месяца</span>
                            </p>

                            <!-- Рассрочка -->
                            <p class="text-sm text-center text-gray-300 uppercase">
                                В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                <span class="text-white font-medium">43 750 ₸/мес.</span>
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
                                Для тех, кто ограничен по времени.
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                4 блока
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                В ПОДАРОК 8 дней практики
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                В ПОДАРОК ОНЛАЙН КУРС
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                РАССРОЧКА, KASPI RED
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                длительность 1.5 месяца-18 занятий по 4 часа, 18 занятий по 8 часов

                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Посещение занятий 3 раза в неделю или каждый день
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                80% практики + углубленная теория
                            </li>

                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Чек-листы по оформлению страницы в инстаграм, общению с клиентами и личному бренду
                            </li>
                        </ul>
                        <!-- Кнопка записи -->
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
    <!-- КУРС "Колористика база + повышение. Секреты идеального цвета" -->
    <div class="bg-white  p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">КУРС
                    "Колористика база + повышение. Секреты идеального цвета"</h2>
                <p class="mt-4 text-gray-500  text-center">программа курса включает :</p>
                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900 text-center uppercase">блок по колористике </dt>

                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/hairstylist/coloristika.jpeg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl sm:p-2">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Углубленная колористика</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Углубленная колористика БАЗА+ ПОВЫШЕНИЕ</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">10 коммерческих техник окрашивания</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">топ 10 коммерческих техник окрашивания волос</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Нейтрализация нежелательного пигмента</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Научим работать с корректорами, смешивать грамотно
                                красители, расскажем что такое % оксиданта и как его использовать, как нейтрализовать
                                нежелательный пигмент. Водные, пенные бани, бани для нейтрализации
                                нежелательного пигмента, цветовые бани, американский шампунь</dd>
                        </div>
                    </div>
                </dl>
                @include('partials.accordion', ['id' => 3, 'content' => 'colorist'])
                <div class="div grid grid-cols-1 lg:grid-cols-2 ">
                    <div class="px-0 py-4 flex items-center justify-center">
                        <div
                            class="relative bg-gray-900/90 backdrop-blur-lg text-white rounded-2xl px-3 py-6 sm:p-12 w-full max-w-2xl shadow-xl ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 bg-red-500 text-white text-1xl font-bold uppercase px-3 py-1 rounded-xl shadow-md">
                                {{ $promotion }}

                            </div>

                            <!-- Заголовок -->
                            <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                                Цена Курса колористики база + повышение. секреты идеального цвета

                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">460 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">320 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 мес.</span> по
                                    <span class="text-white font-medium">26 666 ₸/мес.</span>
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
                                    Блок по колористике более 10 техник: база + повышение

                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    реконструкция волоса
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    чек-листы по инстаграм и личному бренду
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    длительность -18 занятий по 8 часов
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    график-3 раза в неделю по 8 часов
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
                                    есть возможность ускоренного курса-занятия каждый день
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
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
    <!-- Экспресс КУРС "Женские стрижки - колористика" за 4 недели -->
    <div class="bg-white  p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center"> Экспресс
                    КУРС "Женские стрижки - колористика" <br> за 4 недели</h2>
                <p class="mt-4 text-gray-500  text-center">Программа курса включает :</p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900 text-center uppercase">блок по коммерческим стрижкам
                            </dt>

                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/hairstylist/hairstylist-commercian.jpeg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Геометрия стрижек</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Геометрия стрижек. Фундаментальные техники стрижек
                                по английской классике : круг, треугольник, квадрат + комбинации</dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Три основные техники исполнения</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Три основные техники исполнения :слои, градуировка и
                                линия</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">9 коммерческих женских стрижек</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">9 коммерческих женских экспресс стрижек-работаем по
                                авторским схемам стрижек, где вы сможете выполнить экспресс стрижку, даже если вы новичок
                            </dd>
                        </div>
                    </div>
                </dl>
                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900 text-center uppercase">блок по колористике </dt>

                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/hairstylist/hairstylist-colorist.jpg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl sm:p-2">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Углубленная колористика</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Углубленная колористика БАЗА+ ПОВЫШЕНИЕ</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">7 коммерческих техник окрашивания</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">топ 7 коммерческих техник окрашивания волос</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Нейтрализация нежелательного пигмента</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Научим работать с корректорами, смешивать грамотно
                                красители, расскажем что такое % оксиданта и как его использовать, как нейтрализовать
                                нежелательный пигмент. Водные, пенные бани, бани для нейтрализации
                                нежелательного пигмента, цветовые бани, американский шампунь</dd>
                        </div>
                    </div>
                </dl>
                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900 text-center uppercase">блок по коммерческим укладкам
                            </dt>

                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/hairstylist/hairstylist-ukladki.jpeg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl sm:p-2">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">7 коммерческих укладок на различную длину волос</dt>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Локоны на брашинг (турецкая техника укладки) </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Работа со стайлерами и щипцами </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">SPA коктейли+реконструкция волос
                            </dt>
                        </div>
                    </div>
                </dl>

                @include('partials.accordion', ['id' => 4, 'content' => 'womancoloristika'])
                <div class="div grid grid-cols-1 lg:grid-cols-2 ">
                    <div class="px-0 py-4 flex items-center justify-center">
                        <div
                            class="relative bg-gray-900/90 backdrop-blur-lg text-white rounded-2xl px-3 py-6 sm:p-12 w-full max-w-2xl shadow-xl ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 bg-red-500 text-white text-1xl font-bold uppercase px-3 py-1 rounded-xl shadow-md">
                                {{ $promotion }}

                            </div>

                            <!-- Заголовок -->
                            <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                                Цена Экспресс курса "Женские стрижки + колористика"
                                за 4 недели
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">615 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">430 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 мес.</span> по
                                    <span class="text-white font-medium">35 833 ₸/мес.</span>
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
                                    Для тех, кто очень ограничен по времени и сразу после обучения планирует приступить к
                                    работе или был большой перерыв в работе:

                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    3 блока
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    В ПОДАРОК ОНЛАЙН КУРС
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Предоставляем голову-манекен для постановки руки на занятиях
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    длительность 4 недели
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    80% практики + углубленная теория
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    график — 5 занятий в неделю по 6-8 часов
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
                                    Чек-листы по оформлению страницы в инстаграм, общению с клиентами и личному бренду
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
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
    <!-- Повышающий курс "Каскады. Комбинация техник "Слои" -->
    <div class="bg-white  p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center"> Повышающий
                    курс
                    "Каскады. Комбинация техник "Слои"</h2>
                <p class="mt-4 text-gray-500  text-center">Программа курса включает :</p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900 text-center uppercase">блок по коммерческим стрижкам
                            </dt>

                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/hairstylist/up-kaskadi.jpg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Комбинация техник «Слои»
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Зарисовка диаграмм
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Геометрия в технике «Слои» в треугольной, квадратной и
                                круглой геометрии
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Проборы</dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Направление пряди
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Угол подъема пряди
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Техники срезов волос
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Персонализация
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Отработка на манекене, постановка руки
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Отработка на моделях (5 моделей)
                            </dt>
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
                                {{ $promotion }}
                            </div>

                            <!-- Заголовок -->
                            <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                                Повышающий курс
                                "Каскады. Комбинация техник "Слои"
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">160 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">110 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 мес.</span> по
                                    <span class="text-white font-medium">9 166 ₸/мес.</span>
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
                                    Для тех, кто хочет изучить от и до тему «Каскадов», у кого остались вопросы после
                                    прошлых курсов:

                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    2 занятия по 8 часов
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    РАССРОЧКА, KASPI RED
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Предоставляем голову-манекен для постановки руки на занятиях
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    практики + углубленная теория
                                </li>

                            </ul>
                            <!-- Кнопка записи -->
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
    <!-- Повышающий курс "ЛИНИЯ в квадратной, круглой и треугольной геометрии+ Комбинации -->
    <div class="bg-white  p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">
                    Повышающий курс
                    "ЛИНИЯ в квадратной, круглой и
                    треугольной геометрии+ Комбинации"</h2>
                <p class="mt-4 text-gray-500  text-center">Программа курса включает :</p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/hairstylist/hairstylist-commercian.jpeg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Зарисовка диаграмм
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Геометрия в технике «Линия» в треугольной, квадратной и
                                круглой геометрии (различные виды каре)
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Проборы</dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Направление пряди
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Угол подъема пряди
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Техники срезов волос
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Персонализация
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Отработка на манекене, постановка руки
                            </dt>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Отработка на моделях (5 моделей)
                            </dt>
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
                                -30% до 5 мая
                            </div>

                            <!-- Заголовок -->
                            <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                                Повышающий курс
                                "Линия в квадратной, круглой и треугольной геометрии+ Комбинации"
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">160 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">110 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 мес.</span> по
                                    <span class="text-white font-medium">9 166 ₸/мес.</span>
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
                                    Для тех, кто хочет изучить от и до тему «Каре», у кого остались вопросы после прошлых
                                    курсов:
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    2 занятия по 8 часов
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    РАССРОЧКА, KASPI RED
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Предоставляем голову-манекен для постановки руки на занятиях
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    практики + углубленная теория
                                </li>

                            </ul>
                            <!-- Кнопка записи -->
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
    @include('partials.coursesingup', ['title' => 'Вам стоит записаться на курс парикмахера, если вы:'])
    @include('partials.reviews', ['video' => 'true', 'content' => 'hairstylist'])
    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['karina', 'veronika', 'vika']])
    <div class="relative overflow-hidden bg-white p-4">
            <div class="relative mx-auto max-w-7xl">
                <div class="grid lg:grid-cols-2 lg:gap-16 items-center">
                    <!-- Фото слева на ПК -->
                    <div class="flex flex-col items-center gap-6 lg:gap-10">
                        <h3 class="text-3xl lg:text-3xl font-bold tracking-tight text-gray-900 text-center lg:text-left">

                            Участие в BEAUBY EXPO 2024 ALMATY </h3>
                        <!-- Видео -->
                        <div class="w-full max-w-2xl aspect-video rounded-xl overflow-hidden shadow-lg">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/Gxg9fuGWhoY"
                                title="Видеоотзыв 2" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <!-- Фото -->
                        <div class="h-96 w-72 overflow-hidden rounded-2xl shadow-xl">
                            <img src="{{ asset('images/team/karina.jpg') }}" alt="Карина"
                                class="w-full h-full object-cover">
                        </div>
                    </div>



                    <!-- Текст -->
                    <div class="sm:max-w-lg">
                        <h3 class="text-3xl lg:text-4xl font-bold tracking-tight text-gray-900 text-center lg:text-left">

                            Хотите стать парикмахером в Алматы , но все еще выбираете школу? Боитесь, что не научат? </h3>

                        <p class="mt-6 text-lg text-gray-600">Ждем вас на курсе парикмахера-колориста и мы гарантируем, что
                            вы 100% научитесь или мы предоставим повторный курс за свой счет!</p>

                        <p class="mt-4 text-lg text-gray-600">Программа курса по стрижкам и колористике разработана таким
                            образом, чтобы вы сразу смогли трудоустроиться в салоны города. Наш тренер курса по
                            парикмахерскому искусству Карина Ургалиева с удовольствием поделится своим опытом и знаниями
                            наработанными в течение 22 лет.</p>

                        <p class="mt-4 text-lg text-gray-600">Базовое обучение по парикмахерскому искусству и колористике
                            рассчитано для тех, кто обучается с нуля, а также есть повышающие курсы для тех, кто хочет
                            повысить свои знания или поработать над ошибками. Стоимость курса зависит от выбранного курса.
                            Обучение можно оплатить в рассрочку без %.</p>

                        <p class="mt-4 text-lg text-gray-600">Занятия проходят в оборудованных кабинетах, с предоставлением
                            материалов и инструментов на время обучения. В школе также есть зона кухни, чай, кофе. Добраться
                            до школы можно любым удобным способом: есть рядом станция метро «Алатау», собственная парковка
                            для автомобилей, большое количество общественного транспорта.</p>

                        <p class="mt-4 text-lg text-gray-600">Стать мастером парикмахером в школе Индиго возможно за
                            короткий период: от 1 месяца до 4 месяцев, в зависимости от графика посещения. В программу курса
                            входит:</p>

                        <ul class="mt-4 text-lg text-gray-600 list-disc list-inside space-y-2">
                            <li>Блок по коммерческим женским стрижкам: формы стрижек по технике английской классики</li>
                            <li>Блок по мужским стрижкам</li>
                            <li>Блок по колористике от базы до повышения</li>
                            <li>Химическая завивка и спа уходы</li>
                            <li>Укладки</li>
                        </ul>

                        <p class="mt-6 text-lg text-gray-600 font-semibold">На занятиях изучите теорию и закрепите знания на
                            практике на моделях!</p>
                        <p class="mt-6 text-lg text-gray-600 font-semibold">Позвольте себе стать парикмахером и будьте на
                            шаг впереди конкурентов!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection