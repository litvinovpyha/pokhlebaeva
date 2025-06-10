@extends('layouts.main')
@section('title', 'Курсы маникюра, педикюра и дизайна ногтей в Алматы обучение с дипломом и сертификатом')

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
                    Обучение маникюру, педикюру и дизайну ногтей на курсах с дипломом в Алматы
                    </h1>
                <p
                    class="mt-8 text-lg font-medium sm:text-xl text-neutral-900 drop-shadow-[0_1px_2px_rgba(0,0,0,0.3)] uppercase">
                    Обучаем с нуля до топ-мастера <br> за 2 месяца. Сертификат, практика<br> и скидка до -30% — начни карьеру уже сегодня!


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
    <!-- Базовый курс маникюра "идеальный комбинированный" -->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">Базовый курс маникюра "идеальный комбинированный"
                </h2>
                <p class="mt-4 text-gray-500  text-center">Программа курса включает:</p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/manicure/manicure-pedicure-intensiv.jpg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900">Две коммерческие техники маникюра:</dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Комбинированный одной фрезой/щипчики</li>
                                <li>Японский маникюр (экоглянцевание ,без гель покрытия)</li>
                            </ul>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Необрезной маникюр</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Работу с кутиклером (необрезной маникюр)</dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Гель покрытие «под кутикулу»</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Гель покрытие «под кутикулу» с идеальными бликами в
                                двух техниках
                                Технику правил</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Техника правильной формы ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Технику правильного опила формы ногтей (овал, мягкий
                                квадрат, квадрат, миндаль)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Работа с фрезами</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Работу фрезами без пропилов</dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Архитектура ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Архитектуру ногтей, четкий квадрат, восстановление
                                углов, френч</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Два способа реставрации сломанного ногтя</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Два способа реставрации сломанного ногтя :полигелем
                                и ниточным протезированием</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Экспресс дизайны </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">(френч, стемпинг, пигменты, стразы, слайдеры,
                                кошачий глаз, фольга, поталь, сухоцветы, втирка)</dd>
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
                                -37% до 5 мая
                            </div>

                            <!-- Заголовок -->
                            <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                            цена Базового курса маникюра
                            "ИДЕАЛЬНЫЙ комбинированный"
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">143 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">89 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                    <span class="text-white font-medium">7 417 ₸/мес.</span>
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
                                    5 занятий по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                    </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    7 отработок на моделях + урок по базовым дизайнам
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
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Рассрочка, Kaspi Red
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
    <!-- интенсивный курс маникюра "идеальный комбинированный+ аппаратный" -->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">интенсивный
                    курс маникюра
                    "идеальный комбинированный+ аппаратный"</h2>
                <p class="mt-4 text-gray-500  text-center">Программа курса включает:</p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/manicure/manicure-couse.jpg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900">Три коммерческие техники маникюра:</dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Комбинированный одной фрезой/щипчики</li>
                                <li>Аппаратный маникюр (две техники)</li>
                                <li>Японский маникюр (экоглянцевание ,без гель покрытия)</li>
                            </ul>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Необрезной маникюр</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Работу с кутиклером (необрезной маникюр)</dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Гель покрытие «под кутикулу»</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Гель покрытие «под кутикулу» с идеальными бликами в
                                двух техниках
                                Технику правил</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Техника правильной формы ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Технику правильного опила формы ногтей (овал, мягкий
                                квадрат, квадрат, миндаль)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Работа с фрезами</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Работу фрезами без пропилов</dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Архитектура ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Архитектуру ногтей, четкий квадрат, восстановление
                                углов, френч</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Два способа реставрации сломанного ногтя</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Два способа реставрации сломанного ногтя :полигелем
                                и ниточным протезированием</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Экспресс дизайны </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">(френч, стемпинг, пигменты, стразы, слайдеры,
                                кошачий глаз, фольга, поталь, сухоцветы, втирка)</dd>
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
                                -38% до 5 мая
                            </div>

                            <!-- Заголовок -->
                            <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                                цена интенсивного курса маникюра
                                "ИДЕАЛЬНЫЙ комбинированный+аппаратный"
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">200 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">123 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                    <span class="text-white font-medium">10 333 ₸/мес.</span>
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
                                    7 занятий по 6- 8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    11 отработок на моделях + урок по базовым дизайнам
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
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Рассрочка, Kaspi Red
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
    <!-- Базовый курс маникюра и педикюра -->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">Базовый курс
                    маникюра и педикюра</h2>
                <p class="mt-4 text-gray-500  text-center">Программа курса включает:</p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/manicure/manicure-pedicure.jpg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900">ТДве коммерческие техники маникюра:</dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Комбинированный одной фрезой/щипчики</li>
                                <li>Японский маникюр (экоглянцевание ,без гель покрытия)</li>
                            </ul>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Необрезной маникюр</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Работу с кутиклером (необрезной маникюр)</dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Гель покрытие «под кутикулу»</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Гель покрытие «под кутикулу» с идеальными бликами в
                                двух техниках
                                Технику правил</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Техника правильной формы ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Технику правильного опила формы ногтей (овал, мягкий
                                квадрат, квадрат, миндаль)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Работа с фрезами</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Работу фрезами без пропилов</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Архитектура ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Архитектуру ногтей, четкий квадрат, восстановление
                                углов, френч</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Два способа реставрации сломанного ногтя</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Два способа реставрации сломанного ногтя :полигелем
                                и ниточным протезированием</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Экспресс дизайны </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">(френч, стемпинг, пигменты, стразы, слайдеры,
                                кошачий глаз, фольга, поталь, сухоцветы, втирка)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4 pb-2">
                            <dt class="font-medium text-gray-900">SPA уход
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4 pb-2">
                            <dt class="font-medium text-gray-900">Способы фотосъемки ваших работ</dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Эстетический педикюр</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Эстетическому педикюру с обработкой стоп в
                                аппаратной технике (диски)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Правильный опил ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Правильную технику опила формы ногтей при педикюре
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Обработка пальчиков</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Комбинированную технику обработки пальчиков
                                (фреза+щипчики)</dd>
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
                                -37% до 5 мая
                            </div>

                            <!-- Заголовок -->
                            <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                                цена базового курса маникюра
                                и педикюра
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">172 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">108 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                    <span class="text-white font-medium">9 000 ₸/мес.</span>
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
                                    6 занятий по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    9 отработок на моделях + урок по базовым дизайнам
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
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Рассрочка, Kaspi Red
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
    <!-- Интенсивный курс маникюра и педикюра -->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">Интенсивный
                    курс маникюра и педикюра</h2>
                <p class="mt-4 text-gray-500  text-center">Программа курса включает:</p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/manicure/manicure-pedicure-intensiv.jpg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900">Три коммерческие техники маникюра:</dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Аппаратный маникюр </li>
                                <li>Комбинированный одной фрезой/щипчики</li>
                                <li>Японский маникюр (экоглянцевание ,без гель покрытия)</li>
                            </ul>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Необрезной маникюр</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Работу с кутиклером (необрезной маникюр)</dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Гель покрытие «под кутикулу»</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Гель покрытие «под кутикулу» с идеальными бликами в
                                двух техниках
                                Технику правил</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Техника правильной формы ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Технику правильного опила формы ногтей (овал, мягкий
                                квадрат, квадрат, миндаль)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Работа с фрезами</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Работу фрезами без пропилов</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Архитектура ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Архитектуру ногтей, четкий квадрат, восстановление
                                углов, френч</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Два способа реставрации сломанного ногтя</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Два способа реставрации сломанного ногтя :полигелем
                                и ниточным протезированием</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Экспресс дизайны </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">(френч, стемпинг, пигменты, стразы, слайдеры,
                                кошачий глаз, фольга, поталь, сухоцветы, втирка)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4 pb-2">
                            <dt class="font-medium text-gray-900">SPA уход
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4 pb-2">
                            <dt class="font-medium text-gray-900">Способы фотосъемки ваших работ</dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Эстетический педикюр</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Эстетическому педикюру с обработкой стоп в
                                аппаратной технике (диски)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Правильный опил ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Правильную технику опила формы ногтей при педикюре
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Обработка пальчиков</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Комбинированную технику обработки пальчиков
                                (фреза+щипчики)</dd>
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
                                -40% до 5 мая
                            </div>

                            <!-- Заголовок -->
                            <h3 class="text-sm text-center font-semibold uppercase text-indigo-400 tracking-wide pt-2 mb-4">
                                цена интенсивного курса маникюра
                                и педикюра
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">229 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">139 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                    <span class="text-white font-medium">11 584 ₸/мес.</span>
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
                                    8 занятий по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    13 отработок на моделях + урок по базовым дизайнам
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
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Рассрочка, Kaspi Red
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
    <!-- курс 3 в 1 "NAIL STYLIST" -->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">курс 3 в 1
                    "NAIL STYLIST" маникюр, педикюр, моделирование гелем</h2>
                <p class="mt-4 text-gray-500  text-center">Включает 3 блока: маникюр, педикюр и моделирование ногтей
                    полигелем</p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/manicure/manicure-pedicure-modeling.jpg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900">Три коммерческие техники маникюра:</dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Аппаратный маникюр </li>
                                <li>Комбинированный одной фрезой/щипчики</li>
                                <li>Японский маникюр (экоглянцевание ,без гель покрытия)</li>
                            </ul>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Необрезной маникюр</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Работу с кутиклером (необрезной маникюр)</dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Гель покрытие «под кутикулу»</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Гель покрытие «под кутикулу» с идеальными бликами в
                                двух техниках
                                Технику правил</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Техника правильной формы ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Технику правильного опила формы ногтей (овал, мягкий
                                квадрат, квадрат, миндаль)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Работа с фрезами</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Работу фрезами без пропилов</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Архитектура ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Архитектуру ногтей, четкий квадрат, восстановление
                                углов, френч</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Три способа реставрации сломанного ногтя</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Три способа реставрации сломанного ногтя</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Экспресс дизайны </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">(френч, стемпинг, пигменты, стразы, слайдеры,
                                кошачий глаз, фольга, поталь, сухоцветы, втирка)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4 pb-2">
                            <dt class="font-medium text-gray-900">SPA уход
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4 pb-2">
                            <dt class="font-medium text-gray-900">Способы фотосъемки ваших работ</dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Эстетический педикюр</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Эстетическому педикюру с обработкой стоп в
                                аппаратной технике (диски)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Правильный опил ногтей</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Правильную технику опила формы ногтей при педикюре
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Обработка пальчиков</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Комбинированную технику обработки пальчиков
                                (фреза+щипчики)</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Техника салонного моделирования </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Технику салонного моделирования с минимальным опилом
                                ногтей на верхние формы, три отработки, френч отрисовка</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Создание тонких и прочных ногтей </dt>
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
                                цена
                                Курса 3 в 1 "Нейл стилист:
                                маникюр+ педикюр+
                                моделирование гелем"
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">315 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">219 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                    <span class="text-white font-medium">18 333 ₸/мес.</span>
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
                                    12 занятий по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Интенсивный блок по маникюру
                                </li>

                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Блок по педикюру
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Блок по наращиванию ногтей (верхние формы)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Теория
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Экспресс дизайны
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    17 отработок на моделях
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
                                    РАССРОЧКА , KASPI RED
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
                                цена
                                Курса 2 в 1 "Нейл стилист:
                                маникюр+
                                наращивание
                                полигелем"
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">287 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">199 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                    <span class="text-white font-medium">16 666 ₸/мес.</span>
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
                                    11 занятий по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Интенсивный блок по маникюру
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Блок по наращиванию ногтей (верхние формы)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Теория
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Базовые дизайны
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    15 отработок на моделях
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
                                    РАССРОЧКА , KASPI RED
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
    <!-- повышающий курс "Японский маникюр, экоглянцевание" -->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">повышающий
                    курс "Японский маникюр, экоглянцевание"
                </h2>
                <p class="mt-4 text-gray-500  text-center">программа курса включает: </p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/manicure/japan-manicure.jpg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900">
                                Рассчитан для работающих мастеров с опытом
                                На занятиях вы узнаете:</dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Аппаратный маникюр по-мокрому </li>
                                <li>Скоростной Комбинированный маникюр одной фрезой: фреза+ ножнички/щипчики</li>
                                <li>технику японского маникюра (экоглянцевание)-маникюр без покрытия</li>
                            </ul>
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
                                Цена
                                Повышающего Курса "ЯПОНСКИЙ МАНИКЮР"
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">45 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">30 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                    <span class="text-white font-medium">2 500 ₸/мес.</span>
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
                                    1 занятие — 8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    3 отработки на моделях
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
                                    РАССРОЧКА , KASPI RED
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
                                цена
                                Курса 2 в 1 "Нейл стилист:
                                маникюр+
                                наращивание
                                полигелем"
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">287 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">199 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                    <span class="text-white font-medium">16 666 ₸/мес.</span>
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
                                    11 занятий по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Интенсивный блок по маникюру
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Блок по наращиванию ногтей (верхние формы)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Теория
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Базовые дизайны
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    15 отработок на моделях
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
                                    РАССРОЧКА , KASPI RED
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
    <!-- курс эстетического педикюра в аппаратной технике -->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">курс
                    эстетического педикюра в аппаратной технике

                </h2>
                <p class="mt-4 text-gray-500  text-center">программа курса включает: </p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/manicure/pedicure.jpg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Санитарные нормы, стерилизацию инструментов
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Правильную технику опила формы ногтей при педикюре
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Аппаратный педикюр (работа фрезами, обработка стопы
                                дисками)
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Комбинированная техника обработки пальчиков (фреза+щипчики
                                )
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Покрытие максимально близко к кутикуле
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
                                цена курса эстетического педикюра аппаратом

                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">58 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">40 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                    <span class="text-white font-medium">3 333 ₸/мес.</span>
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
                                    1 занятие — 8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    2 отработки на моделях
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
                                    РАССРОЧКА , KASPI RED
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
    <!-- повышающий курс аппаратного и комбинированного маникюра. Архитектура
             -->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">повышающий
                    курс аппаратного и комбинированного маникюра. Архитектура


                </h2>
                <p class="mt-4 text-gray-500  text-center">программа курса включает: </p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/manicure/manicure-couse.jpg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">
                                Создан для работающих мастеров с опытом , у кого остались вопросы с прошлого обучения,
                                работа над ошибками.
                                На занятиях вы узнаете:
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Санитарные нормы, стерилизацию инструментов
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Технику опила формы ногтей (овал, мягкий квадрат, четкий
                                квадрат, миндаль)
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Аппаратный маникюр по-мокрому
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Скоростной Комбинированный маникюр одной фрезой: фреза+
                                ножнички
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Архитектуру ногтей — четкий квадрат- восстановление углов

                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Выравнивание ногтевой пластины (идеальные блики)

                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Экспресс выравнивание без переворота

                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Выравнивание финишным покрытием

                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Работа над ошибками

                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Покрытие максимально близко к кутикуле - 2 техники

                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Френч, стемпинг

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
                                Цена
                                Повышающего Курса Аппаратного и комбинированного маникюра. АРХИТЕКТУРА
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">86 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">59 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                    <span class="text-white font-medium">4 999 ₸/мес.</span>
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
                                    2 занятия по 8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    3 отработки на моделях
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
                                    РАССРОЧКА , KASPI RED
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
    <!-- курс моделирования ногтей-верхние формы -->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">повышающий
                    курс аппаратного и комбинированного маникюра. Архитектура


                </h2>
                <p class="mt-4 text-gray-500  text-center">программа курса включает: </p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/manicure/manicure-modeling-course.jpg') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">
                                Рассчитан для работающих мастеров
                                На занятиях вы узнаете:
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Санитарные нормы, стерилизацию инструментов
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Маникюр при наращивании

                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Снятие старого покрытия фрезой

                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Техника салонного моделирования с минимальным опилом на
                                верхние формы, френч отрисовка

                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Создание тонких и прочных ногтей
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
                                Цена Курса моделирования ногтей -
                                верхние формы
                            </h3>
                            <div class="gap space-y-2 sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline gap-x-2 text-sm">
                                    <span class="line-through text-gray-400 text-base sm:text-sm">115 000 ₸</span>
                                    <span class="text-2xl sm:text-xl font-bold text-green-400">80 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="text-white font-medium">12 месяцев</span> по
                                    <span class="text-white font-medium">6 666 ₸/мес.</span>
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
                                    3 занятия по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    3 отработки на моделях
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
                                    РАССРОЧКА , KASPI RED
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
    @include('partials.coursesingup', ['title'=> 'Вам стоит записаться на курс маникюра и педикюра, если вы:'])


    @include('partials.reviews', ['video' => 'false','content'=> 'manicure'])
    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['olya', 'veronika', 'vika']])

@endsection