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
                    Обучаем с нуля до топ-мастера <br> за 2 месяца. Сертификат, практика<br> и скидка до -30% — начни
                    карьеру уже сегодня!


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
    <!-- Базовый курс маникюра "идеальный комбинированный"                     DONE-->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">Базовый курс
                    маникюра "идеальный комбинированный"
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
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Две коммерческие техники маникюра</dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Комбинированный маникюр одной фрезой + работа ножничками или щипчиками
                                    Идеальная техника, востребованная в салонах — быстро, безопасно и качественно.

                                </li>
                                <li> Японский маникюр (экоглянцевание)
                                    Экоуход без геля, идеально подходит для клиентов с чувствительными ногтями.

                                </li>
                            </ul>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900"> Гель-покрытие под кутикулу с идеальными бликами
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Вы отработаете две техники, чтобы добиться
                                идеального покрытия и зеркального блика.</dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Формы ногтей: от овала до миндаля
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Пошаговая техника правильного опила и подбора формы
                                под руку клиента.

                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Работа с фрезами без пропилов
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Научитесь работать быстро, уверенно и без риска
                                травм.
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Архитектура ногтей и реставрация
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Построение чёткой формы, восстановление углов,
                                создание идеального квадрата, ровного френча и ремонт сломанных ногтей.
                            </dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900"> Экспресс-дизайны, которые продаются
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Вы узнаете, как быстро и просто делать трендовые
                                дизайны: Френч • Стемпинг • Пигменты • Стразы • Слайдеры • Кошачий глаз • Фольга • Поталь •
                                Сухоцветы • Втирка
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900"> SPA-уход для рук и ногтей
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Дополнительная услуга в прайсе, повышающая чек и
                                лояльность клиента.
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900"> Мобильная фотосъёмка ваших работ
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Научитесь снимать свои работы красиво —
                                даже на телефон.</dd>
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
    <!-- интенсивный курс маникюра "идеальный комбинированный+ аппаратный"     DONE -->
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
                            <dt class="font-medium text-gray-900">Маникюр — 3 ключевые техники, которые приносят доход:
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Аппаратный маникюр — современная и быстрая техника
                                </li>
                                <li>Комбинированный одной фрезой + щипчики/ножнички — для плотной и чистой обработки
                                </li>
                                <li>Японский маникюр (экоглянцевание) — уход без покрытия, подходит даже беременным и
                                    аллергикам
                                </li>
                            </ul>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900"> Гель-покрытие под кутикулу с идеальными бликами
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Вы отработаете две техники, чтобы добиться
                                идеального покрытия и зеркального блика.</dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Формы ногтей: от овала до миндаля
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Пошаговая техника правильного опила и подбора формы
                                под руку клиента.

                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Работа с фрезами без пропилов
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Научитесь работать быстро, уверенно и без риска
                                травм.
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Архитектура ногтей и реставрация
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Построение чёткой формы, восстановление углов,
                                создание идеального квадрата, ровного френча и ремонт сломанных ногтей.
                            </dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900"> Экспресс-дизайны, которые продаются
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Вы узнаете, как быстро и просто делать трендовые
                                дизайны: Френч • Стемпинг • Пигменты • Стразы • Слайдеры • Кошачий глаз • Фольга • Поталь •
                                Сухоцветы • Втирка
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900"> SPA-уход для рук и ногтей
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Дополнительная услуга в прайсе, повышающая чек и
                                лояльность клиента.
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900"> Мобильная фотосъёмка ваших работ
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Научитесь снимать свои работы красиво —
                                даже на телефон.</dd>
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
                            <dt class="font-medium text-gray-900">Маникюр — 3 ключевые техники, которые приносят доход:
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Аппаратный маникюр — современная и быстрая техника
                                </li>
                                <li>Комбинированный одной фрезой + щипчики/ножнички — для плотной и чистой обработки
                                </li>
                                <li>Японский маникюр (экоглянцевание) — уход без покрытия, подходит даже беременным и
                                    аллергикам
                                </li>
                            </ul>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Дополнительно вы освоите:</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Гель-покрытие «под кутикулу» с зеркальным бликом
                                (2 техники)
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Правильный опил форм: овал, квадрат, мягкий
                                квадрат, миндаль
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Работа с фрезами без пропилов — безопасно и
                                уверенно
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Архитектура ногтя: чёткий квадрат, восстановление
                                формы, френч
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Ремонт и реставрация сломанного ногтя
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Быстрые и модные дизайны: френч, стразы, слайдеры,
                                пигменты, втирка, поталь, кошачий глаз, фольга, сухоцветы
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ SPA-уход для рук и ногтей
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Правила фотосъёмки для Instagram и портфолио (даже
                                на телефон)
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">🦶 Педикюр — эстетика + безопасность:
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Эстетический педикюр с аппаратной обработкой стоп
                                (на дисках)
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Комбинированная техника обработки пальчиков: фреза +
                                щипчики

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Опил формы ногтей при педикюре.
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">
                                💡 И главное:
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✅ Реальная практика на моделях

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✅ Поддержка тренера и разбор ошибок

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✅ Все материалы и инструменты включены

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✅ После курса — возможность трудоустройства и
                                постоянная обратная связь
                            </dd>
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
    <!-- Интенсивный курс маникюра и педикюра                                  DONE-->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">Интенсивный
                    курс маникюра и педикюра</h2>
                <p class="mt-4 text-gray-500  text-center">Программа включает полный спектр востребованных коммерческих
                    техник, которые вы сможете использовать в работе сразу после окончания курса:
                </p>

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
                            <dt class="font-medium text-gray-900">Маникюр — 3 ключевые техники, которые приносят доход:
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Аппаратный маникюр — современная и быстрая техника
                                </li>
                                <li>Комбинированный одной фрезой + щипчики/ножнички — для плотной и чистой обработки
                                </li>
                                <li>Японский маникюр (экоглянцевание) — уход без покрытия, подходит даже беременным и
                                    аллергикам
                                </li>
                            </ul>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Дополнительно вы освоите:</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Гель-покрытие «под кутикулу» с зеркальным бликом
                                (2 техники)
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Правильный опил форм: овал, квадрат, мягкий
                                квадрат, миндаль
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Работа с фрезами без пропилов — безопасно и
                                уверенно
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Архитектура ногтя: чёткий квадрат, восстановление
                                формы, френч
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Ремонт и реставрация сломанного ногтя
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Быстрые и модные дизайны: френч, стразы, слайдеры,
                                пигменты, втирка, поталь, кошачий глаз, фольга, сухоцветы
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ SPA-уход для рук и ногтей
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Правила фотосъёмки для Instagram и портфолио (даже
                                на телефон)
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">🦶 Педикюр — эстетика + безопасность:
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Эстетический педикюр с аппаратной обработкой стоп
                                (на дисках)
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Комбинированная техника обработки пальчиков: фреза +
                                щипчики

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Опил формы ногтей при педикюре.
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">
                                💡 И главное:
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✅ Реальная практика на моделях

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✅ Поддержка тренера и разбор ошибок

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✅ Все материалы и инструменты включены

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✅ После курса — возможность трудоустройства и
                                постоянная обратная связь
                            </dd>
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
    <!-- курс 3 в 1 "NAIL STYLIST"                                             DONE -->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">
                    курс 3 в 1 <br>
                    "NAIL STYLIST" <br>
                    Маникюр, Педикюр, Моделирование ногтей
                </h2>
                <p class="mt-4 text-gray-500  text-center">Полноценная профессия с нуля до уверенного мастера — за один
                    курс.
                    Вы получите сильную базу, узнаете все современные техники и выйдете с готовым портфолио.</p>

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
                            <dt class="font-medium text-gray-900">💅 Блок 1: Коммерческий маникюр</dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Аппаратный маникюр по-мокрому — техника повышенной деликатности
                                </li>
                                <li>Комбинированный маникюр одной фрезой + щипчики/ножнички — чисто и быстро
                                </li>
                                <li>Японский маникюр (экоглянцевание) — натуральный уход без гель-покрытия
                                </li>
                            </ul>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Дополнительно вы освоите:</dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Гель-покрытие «под кутикулу» с зеркальным бликом
                                (2 техники)
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Правильный опил форм: овал, квадрат, мягкий
                                квадрат, миндаль
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Работа с фрезами без пропилов — безопасно и
                                уверенно
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Архитектура ногтя: чёткий квадрат, восстановление
                                формы, френч
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Ремонт и реставрация сломанного ногтя
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Быстрые и модные дизайны: френч, стразы, слайдеры,
                                пигменты, втирка, поталь, кошачий глаз, фольга, сухоцветы
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ SPA-уход для рук и ногтей
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✔ Правила фотосъёмки для Instagram и портфолио (даже
                                на телефон)
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">🦶 Блок 2: Эстетический педикюр:

                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Эстетический педикюр с аппаратной обработкой стоп
                                (на дисках)
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Комбинированная техника обработки пальчиков: фреза +
                                щипчики

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Опил формы ногтей при педикюре.
                            </dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">💎 Блок 3: Салонное моделирование ногтей
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Моделирование на верхние формы — без перегрузки и
                                излишнего опила

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Френч-отрисовка — чёткий стильный результат
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Тонкие и прочные ногти — правильная архитектура и
                                материалы

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">3 практики моделирования — на моделях
                            </dd>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">💼 После курса вы:
                                Соберёте портфолио
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Получите сертификат
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Сможете начать зарабатывать сразу

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Получите поддержку тренера и школы

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">При желании — выйдете на трудоустройство
                            </dd>
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
    <!-- повышающий курс "Японский маникюр, экоглянцевание"                    DONE -->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">повышающий
                    курс "Японский маникюр, экоглянцевание"
                </h2>
                <p class="mt-4 text-gray-500  text-center">Для действующих мастеров, которые хотят выйти на новый уровень
                </p>

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
                                Этот курс — идеальное решение, если вы уже работаете в сфере ногтевого сервиса и хотите:
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>расширить список услуг
                                </li>
                                <li>освоить премиальную технику для клиентов, которые не носят гель
                                </li>
                                <li>научиться работать быстро, чисто и безопасно
                                </li>
                            </ul>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">🔍 Что вы освоите на курсе:

                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500"><span class="font-medium text-gray-900">💧
                                    Аппаратный маникюр по-мокрому</span> <br>
                                Деликатная техника, подходящая даже для чувствительной кожи. Повышенная безопасность,
                                минимальный риск травматизации.

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500"><span class="font-medium text-gray-900">⚡
                                    Комбинированный маникюр одной фрезой</span><br>
                                Узнаете, как выполнять чистую обработку одной фрезой + ножнички/щипчики. Ускорение времени
                                работы до 30%.

                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500"><span class="font-medium text-gray-900">🌿 Японский
                                    маникюр (экоглянцевание) </span><br>
                                Натуральная техника ухода — без покрытия.
                                Подходит для беременных, аллергиков и поклонников естественного образа.
                                Освоите поэтапную процедуру восстановления, шлифовки и полировки ногтевой пластины с
                                применением паст и пудр на основе природных компонентов.
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">🎓 Формат:
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Только практика
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Индивидуальный подход
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Все материалы включены
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Диплом повышения квалификации
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">💼 После курса вы:
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Вы сможете предлагать премиальные услуги в прайсе
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Привлечёте новую аудиторию — включая клиентов,
                                отказавшихся от геля
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Получите уверенность и отточенную технику
                            </dd>
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
    <!-- курс эстетического педикюра в аппаратной технике                      DONE-->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">курс
                    эстетического педикюра в аппаратной технике

                </h2>
                <p class="mt-4 text-gray-500  text-center">Премиальная услуга, которую клиенты ценят за безопасность,
                    комфорт и идеальный результат
                </p>

                <dl class="mt-3 grid grid-cols-1 lg:grid-cols-2 items-center  gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <div class="left-dl">
                        <div class="pt-4">
                            <dd class="mt-2 text-sm text-gray-500 flex justify-center"> <img
                                    src="{{ asset('images/manicure/pedicure.jpg') }}" alt="Блок по коммерческим стрижкам"
                                    class="w-full max-w-xs rounded-lg shadow-md object-cover"></dd>
                        </div>
                    </div>
                    <div class="right-dl">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">📌 Санитарные нормы и стерилизация
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Как обеспечить полную безопасность для клиента
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Все этапы дезинфекции и стерилизации инструмента
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Работа с одноразовыми материалами
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">📐 Правильная форма ногтей
                                Опил с учётом анатомии </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Как создавать эстетичную и стойкую форму
                            </dd>

                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">⚙ Аппаратная обработка стоп
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Шлифовка стоп и пяток дисками разной абразивности
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Безопасная техника без риска ожогов и порезов
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">✂ Комбинированная техника для пальчиков
                                Совмещение фрезы и щипчиков
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Чистая обработка кутикулы и боковых валиков
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Минимум травматизации — максимум эстетики
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">💅 Покрытие гель-лаком
                                Техника «под кутикулу» </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">Работа с плотными пигментами и нюдовыми оттенками
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900"> 📸 Дополнительно:
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✅ Рекомендации по фотографированию ваших работ
                            </dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900"> 🎓 В результате:
                            </dt>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✅ У вас будет чёткая техника + понимание анатомии
                                стоп
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✅ Научитесь работать быстро и безопасно
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✅ Расширите перечень услуг и поднимете средний чек
                            </dd>
                            <dd class="mt-2 pb-2 text-sm text-gray-500">✅ Получите сертификат и поддержку
                                тренера после курса
                            </dd>
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
    <!-- повышающий курс аппаратного и комбинированного маникюра. Архитектура  DONE-->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">Повышающий
                    курс
                    Аппаратный и комбинированный маникюр + Архитектура ногтей
                </h2>
                <p class="mt-4 text-gray-500  text-center">Для действующих мастеров, которые хотят устранить пробелы в
                    знаниях, улучшить технику и повысить качество своих работ.</p>
                <p class="mt-4 text-gray-500 text-center">🎓 Если после предыдущего обучения у вас остались вопросы — этот
                    курс поможет закрыть все «белые пятна» и выйти на новый профессиональный уровень.</p>

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
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">🔒 Безопасность и гигиена Актуальные санитарные нормы</dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Стерилизация и дезинфекция инструментов
                                </li>
                                <li>Организация рабочего места мастера
                                </li>
                            </ul>
                        </div>
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">✍ Правильный опил формы
                                Овальная, мягкий квадрат, четкий квадрат, миндаль</dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Как избежать ошибок в симметрии и длине
                                </li>

                            </ul>
                        </div>
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">⚙ Аппаратный маникюр по-мокрому
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Техника безопасной и деликатной обработки
                                </li>
                            </ul>
                        </div>
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">⚡ Комбинированный маникюр
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Быстрая техника «одна фреза + ножнички»
                                </li>
                                <li>Уменьшение времени работы без потери качества
                                </li>
                            </ul>
                        </div>
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">🧱 Архитектура ногтей
                                Восстановление углов</dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Создание чёткой формы — особенно квадрата
                                </li>
                                <li>Реставрация и коррекция формы
                                </li>
                            </ul>
                        </div>
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">✨ Выравнивание ногтевой пластины
                                Идеальные блики с минимальным количеством материала</dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Экспресс-выравнивание без переворота
                                </li>
                                <li>Выравнивание топом — когда и как применять
                                </li>
                            </ul>
                        </div>
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">🖌 Покрытие под кутикулу
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Две техники с идеальным бликом</li>
                                <li>Как избежать затеков и «отслоек»
                                </li>
                            </ul>
                        </div>
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">🎨 Дизайн
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Быстрый классический френч
                                </li>
                                <li>Стемпинг: техника и особенности нанесения
                                </li>
                            </ul>
                        </div>
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">💬 В завершении:
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Разбор ошибок учеников
                                </li>
                                <li>Индивидуальные рекомендации от тренера
                                </li>
                                <li>Ответы на вопросы по сложным случаям из практики
                                </li>
                            </ul>
                        </div>
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">🎓 Что вы получите:
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Прокачанную технику
                                </li>
                                <li>Уверенность в работе
                                </li>
                                <li>Повышение качества сервиса и среднего чека
                                </li>
                                <li>Сертификат повышения квалификации
                                </li>
                                <li>Поддержку тренера после курса</li>
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
    <!-- курс моделирования ногтей-верхние формы                               DONE -->
    <div class="bg-white p-4">
        <div class="mx-auto grid max-w-2xl items-center gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl uppercase  text-center">Повышающий
                    курс
                    Моделирование ногтей на верхние формы
                </h2>
                <p class="mt-4 text-gray-500  text-center">Для практикующих мастеров, готовых выйти на новый уровень!
                </p>

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
                                Курс создан для опытных специалистов, желающих освоить современную и быструю технику
                                моделирования без классических бумажных форм. Минимальный опил, высокая прочность и эстетика
                                результата — всё это вы освоите под руководством профессионального тренера.
                            </dt>
                        </div>

                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">🔒 Блок безопасности
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Обновлённые санитарные нормы
                                </li>
                                <li>Пошаговая стерилизация и дезинфекция инструментов
                                </li>
                                <li>Организация безопасного и эргономичного рабочего пространства
                                </li>
                            </ul>
                        </div>
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">✨ Подготовка к моделированию
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Правильный маникюр перед наращиванием
                                </li>
                                <li>Удаление старого материала фрезой без повреждения ногтевой пластины
                                </li>
                            </ul>
                        </div>
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">🏗 Техника салонного моделирования
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Моделирование на верхние формы: пошаговый алгоритм
                                </li>
                                <li>Минимальный опил — больше времени на качество и дизайн
                                </li>
                                <li>Отрисовка френча: эстетика и точность линий
                                </li>
                                <li>Баланс толщины и прочности: как делать лёгкие, но надёжные ногти
                                </li>
                            </ul>
                        </div>
                        <div class="border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">🧰 После прохождения курса вы:
                            </dt>
                            <ul class="list-disc pl-5 text-sm text-gray-500 pt-4">
                                <li>Освоите актуальную технику моделирования
                                </li>
                                <li>Сократите время на процедуру без потери качества
                                </li>
                                <li>Улучшите эстетику и стойкость результата
                                </li>
                                <li>Получите сертификат повышения квалификации
                                </li>
                                <li>Получите обратную связь от тренера по вашим работам</li>
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
    @include('partials.coursesingup', ['title' => 'Вам стоит записаться на курс маникюра и педикюра, если вы:'])


    @include('partials.reviews', ['video' => 'false', 'content' => 'manicure'])
    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['olya', 'veronika', 'vika']])

@endsection