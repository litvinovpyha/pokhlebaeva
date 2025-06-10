@extends('layouts.main')
<title>Онлайн-курсы маникюра, парикмахерского искусства, колористики и ламинирования — обучение с нуля</title>

@section('content')
    <div class="bg-white">

        <div
            class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-2 sm:px-6 sm:py-2 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ОНЛАЙН-КУРС «МАСТЕР МАНИКЮРА
                    "ИДЕАЛЬНЫЙ КОМБИ + АППАРАТНЫЙ ПО МОКРОМУ"»</h2>
                <p class="mt-4 text-gray-500">За 36 видеоуроков вы научитесь делать идеальный маникюр. Освоите 3
                    техники: аппаратную по-мокрому, комбинированную и классическую — простым и понятным языком.</p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Доступ</dt>
                        <dd class="mt-2 text-sm text-gray-500">Доступ к урокам на 6 месяцев</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">обратная связь</dt>
                        <dd class="mt-2 text-sm text-gray-500">Куратор всегда на связе</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">проверка Д/З</dt>
                        <dd class="mt-2 text-sm text-gray-500">выполнение и проверка Д/З в зависимости от тарифа
                        </dd>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Сертификат</dt>
                        <dd class="mt-2 text-sm text-gray-500">электронный сертификат в зависимости от тарифа
                        </dd>
                    </div>
                </dl>
                <div x-data="{ open: false }" class="relative inline-block w-full">
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="translate-y-full opacity-0"
                        x-transition:enter-end="translate-y-0 opacity-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="translate-y-0 opacity-100"
                        x-transition:leave-end="translate-y-full opacity-0" @click.outside="open = false"
                        class="fixed bottom-0 left-0 w-full z-50 bg-white rounded-t-2xl shadow-xl p-6 max-h-[90vh] overflow-y-auto">
                        <button @click="open = false" aria-label="Закрыть меню"
                            class="absolute top-8 right-5 -translate-x-1/2 text-red-600 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div class="rounded-3xl bg-white/60 p-6 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-600 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block text-indigo-600 hover:underline text-sm font-semibold">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <div class="rounded-3xl bg-gray-900 p-6 ring-1 ring-gray-900/10 text-white">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-300 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block bg-indigo-500 px-4 py-2 rounded-md text-sm font-semibold hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>

                    <span class="sm:ml-3 block">
                        <button @click="open = !open" type="button"
                            class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden uppercase">
                            Купить курс
                        </button>
                    </span>
                </div>

            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/m1.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/m2.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/m3.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/m4.jpeg') }}" alt="" class="rounded-lg bg-gray-100">
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ОНЛАЙН КУРС «КОМБИНИРОВАННЫЙ
                    МАНИКЮР»</h2>
                <p class="mt-4 text-gray-500">За 19 видео уроков научим создавать идеальный маникюр.Все о
                    комбинированном маникюре простым языком</p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Доступ</dt>
                        <dd class="mt-2 text-sm text-gray-500">С покупкой вы получаете доступ на 6 месяцев</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">обратная связь</dt>
                        <dd class="mt-2 text-sm text-gray-500">Куратор всегда на связе</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">проверка Д/З</dt>
                        <dd class="mt-2 text-sm text-gray-500">выполнение и проверка Д/З в зависимости от тарифа
                        </dd>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Сертификат</dt>
                        <dd class="mt-2 text-sm text-gray-500">электронный сертификат в зависимости от тарифа
                        </dd>
                    </div>

                </dl>

                <div x-data="{ open: false }" class="relative inline-block w-full">
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="translate-y-full opacity-0"
                        x-transition:enter-end="translate-y-0 opacity-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="translate-y-0 opacity-100"
                        x-transition:leave-end="translate-y-full opacity-0" @click.outside="open = false"
                        class="fixed bottom-0 left-0 w-full z-50 bg-white rounded-t-2xl shadow-xl p-6 max-h-[90vh] overflow-y-auto">

                        <button @click="open = false" aria-label="Закрыть меню"
                            class="absolute top-8 right-5 -translate-x-1/2 text-red-600 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div class="rounded-3xl bg-white/60 p-6 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-600 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block text-indigo-600 hover:underline text-sm font-semibold">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <div class="rounded-3xl bg-gray-900 p-6 ring-1 ring-gray-900/10 text-white">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-300 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block bg-indigo-500 px-4 py-2 rounded-md text-sm font-semibold hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>
                    <span class="sm:ml-3 block">
                        <button @click="open = !open" type="button"
                            class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden uppercase">
                            Купить курс
                        </button>
                    </span>
                </div>

            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/m4.jpeg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/m3.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/m2.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/m1.jpg') }}" alt="" class="rounded-lg bg-gray-100">
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ОНЛАЙН КУРС ДЛЯ ПАРИКМАХЕРОВ
                </h2>
                <p class="mt-4 text-gray-500">Онлайн-курс по геометрии стрижек.Онлайн-курс по колористике</p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Доступ</dt>
                        <dd class="mt-2 text-sm text-gray-500">С покупкой вы получаете доступ на 6 месяцев</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">обратная связь</dt>
                        <dd class="mt-2 text-sm text-gray-500">Куратор всегда на связе</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">проверка Д/З</dt>
                        <dd class="mt-2 text-sm text-gray-500">выполнение и проверка Д/З в зависимости от тарифа
                        </dd>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Сертификат</dt>
                        <dd class="mt-2 text-sm text-gray-500">электронный сертификат в зависимости от тарифа
                        </dd>
                    </div>

                </dl>

                <div x-data="{ open: false }" class="relative inline-block w-full">
                    <!-- Всплывающее меню -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="translate-y-full opacity-0"
                        x-transition:enter-end="translate-y-0 opacity-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="translate-y-0 opacity-100"
                        x-transition:leave-end="translate-y-full opacity-0" @click.outside="open = false"
                        class="fixed bottom-0 left-0 w-full z-50 bg-white rounded-t-2xl shadow-xl p-6 max-h-[90vh] overflow-y-auto">

                        <!-- Инструкция сверху -->
                        <button @click="open = false" aria-label="Закрыть меню"
                            class="absolute top-8 right-5 -translate-x-1/2 text-red-600 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <!-- Контент -->
                        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Самостоятельный -->
                            <div class="rounded-3xl bg-white/60 p-6 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-600 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block text-indigo-600 hover:underline text-sm font-semibold">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <!-- С сертификатом -->
                            <div class="rounded-3xl bg-gray-900 p-6 ring-1 ring-gray-900/10 text-white">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-300 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block bg-indigo-500 px-4 py-2 rounded-md text-sm font-semibold hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопка -->
                    <span class="sm:ml-3 block">
                        <button @click="open = !open" type="button"
                            class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden uppercase">
                            Купить курс
                        </button>
                    </span>
                </div>

            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/p1.jpeg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/p2.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/p3.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/p4.jpg') }}" alt="" class="rounded-lg bg-gray-100">
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ДЕМО ВЕРСИЯ КУРСА МАНИКЮРА
                    (классическая техника)
                </h2>
                <p class="mt-4 text-gray-500">Демо версия курса маникюра. 7 видео уроков </p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Доступ</dt>
                        <dd class="mt-2 text-sm text-gray-500">бесплатный</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">обратная связь</dt>
                        <dd class="mt-2 text-sm text-gray-500">Куратор всегда на связе</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">проверка Д/З</dt>
                        <dd class="mt-2 text-sm text-gray-500">выполнение и проверка Д/З в зависимости от тарифа
                        </dd>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Сертификат</dt>
                        <dd class="mt-2 text-sm text-gray-500">электронный сертификат в зависимости от тарифа
                        </dd>
                    </div>

                </dl>

                <div x-data="{ open: false }" class="relative inline-block w-full">
                    <!-- Всплывающее меню -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="translate-y-full opacity-0"
                        x-transition:enter-end="translate-y-0 opacity-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="translate-y-0 opacity-100"
                        x-transition:leave-end="translate-y-full opacity-0" @click.outside="open = false"
                        class="fixed bottom-0 left-0 w-full z-50 bg-white rounded-t-2xl shadow-xl p-6 max-h-[90vh] overflow-y-auto">

                        <!-- Инструкция сверху -->
                        <button @click="open = false" aria-label="Закрыть меню"
                            class="absolute top-8 right-5 -translate-x-1/2 text-red-600 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <!-- Контент -->
                        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Самостоятельный -->
                            <div class="rounded-3xl bg-white/60 p-6 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-600 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block text-indigo-600 hover:underline text-sm font-semibold">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <!-- С сертификатом -->
                            <div class="rounded-3xl bg-gray-900 p-6 ring-1 ring-gray-900/10 text-white">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-300 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block bg-indigo-500 px-4 py-2 rounded-md text-sm font-semibold hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопка -->
                    <span class="sm:ml-3 block">
                        <button @click="open = !open" type="button"
                            class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden uppercase">
                            Купить курс
                        </button>
                    </span>
                </div>

            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/m1.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/m2.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/m3.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/m4.jpeg') }}" alt="" class="rounded-lg bg-gray-100">
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">«Ламинирование+ботокс ресниц»
                </h2>
                <p class="mt-4 text-gray-500">За 13 видео уроков научим создавать идеальный изгиб</p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Доступ</dt>
                        <dd class="mt-2 text-sm text-gray-500">С покупкой вы получаете доступ на 6 месяцев</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">обратная связь</dt>
                        <dd class="mt-2 text-sm text-gray-500">Куратор всегда на связе</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">проверка Д/З</dt>
                        <dd class="mt-2 text-sm text-gray-500">выполнение и проверка Д/З в зависимости от тарифа
                        </dd>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Сертификат</dt>
                        <dd class="mt-2 text-sm text-gray-500">электронный сертификат в зависимости от тарифа
                        </dd>
                    </div>

                </dl>

                <div x-data="{ open: false }" class="relative inline-block w-full">
                    <!-- Всплывающее меню -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="translate-y-full opacity-0"
                        x-transition:enter-end="translate-y-0 opacity-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="translate-y-0 opacity-100"
                        x-transition:leave-end="translate-y-full opacity-0" @click.outside="open = false"
                        class="fixed bottom-0 left-0 w-full z-50 bg-white rounded-t-2xl shadow-xl p-6 max-h-[90vh] overflow-y-auto">

                        <!-- Инструкция сверху -->
                        <button @click="open = false" aria-label="Закрыть меню"
                            class="absolute top-8 right-5 -translate-x-1/2 text-red-600 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <!-- Контент -->
                        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Самостоятельный -->
                            <div class="rounded-3xl bg-white/60 p-6 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-600 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block text-indigo-600 hover:underline text-sm font-semibold">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <!-- С сертификатом -->
                            <div class="rounded-3xl bg-gray-900 p-6 ring-1 ring-gray-900/10 text-white">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-300 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block bg-indigo-500 px-4 py-2 rounded-md text-sm font-semibold hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопка -->
                    <span class="sm:ml-3 block">
                        <button @click="open = !open" type="button"
                            class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden uppercase">
                            Купить курс
                        </button>
                    </span>
                </div>

            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/l1.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/l1.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/l1.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/l1.jpg') }}" alt="" class="rounded-lg bg-gray-100">
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Онлайн-курс «ламинирование
                    бровей»
                </h2>
                <p class="mt-4 text-gray-500">За 9 видео уроков научим создавать идеальные брови</p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Доступ</dt>
                        <dd class="mt-2 text-sm text-gray-500">С покупкой вы получаете доступ на 6 месяцев</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">обратная связь</dt>
                        <dd class="mt-2 text-sm text-gray-500">Куратор всегда на связе</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">проверка Д/З</dt>
                        <dd class="mt-2 text-sm text-gray-500">выполнение и проверка Д/З в зависимости от тарифа
                        </dd>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Сертификат</dt>
                        <dd class="mt-2 text-sm text-gray-500">электронный сертификат в зависимости от тарифа
                        </dd>
                    </div>

                </dl>

                <div x-data="{ open: false }" class="relative inline-block w-full">
                    <!-- Всплывающее меню -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="translate-y-full opacity-0"
                        x-transition:enter-end="translate-y-0 opacity-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="translate-y-0 opacity-100"
                        x-transition:leave-end="translate-y-full opacity-0" @click.outside="open = false"
                        class="fixed bottom-0 left-0 w-full z-50 bg-white rounded-t-2xl shadow-xl p-6 max-h-[90vh] overflow-y-auto">

                        <!-- Инструкция сверху -->
                        <button @click="open = false" aria-label="Закрыть меню"
                            class="absolute top-8 right-5 -translate-x-1/2 text-red-600 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <!-- Контент -->
                        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Самостоятельный -->
                            <div class="rounded-3xl bg-white/60 p-6 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-600 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block text-indigo-600 hover:underline text-sm font-semibold">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <!-- С сертификатом -->
                            <div class="rounded-3xl bg-gray-900 p-6 ring-1 ring-gray-900/10 text-white">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-300 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block bg-indigo-500 px-4 py-2 rounded-md text-sm font-semibold hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопка -->
                    <span class="sm:ml-3 block">
                        <button @click="open = !open" type="button"
                            class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden uppercase">
                            Купить курс
                        </button>
                    </span>
                </div>
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/l1.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/l1.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/l1.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/l1.jpg') }}" alt="" class="rounded-lg bg-gray-100">
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Онлайн-курс «Легкий старт»
                    БЕСПЛАТНЫЙ ДОСТУП
                </h2>
                <p class="mt-4 text-gray-500">За 36 видео уроков научим создавать идеальный маникюр. 3 техники —
                    аппаратный по-мокрому, комбинированный и классический простым языком</p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Постановка целей</dt>
                        <dd class="mt-2 text-sm text-gray-500">fdfdfdfdf</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Сервис</dt>
                        <dd class="mt-2 text-sm text-gray-500"></dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Общение с клиентами
                        </dt>
                        <dd class="mt-2 text-sm text-gray-500">
                        </dd>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Упаковка</dt>
                        <dd class="mt-2 text-sm text-gray-500">
                        </dd>
                    </div>

                </dl>

                <div x-data="{ open: false }" class="relative inline-block w-full">
                    <!-- Всплывающее меню -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="translate-y-full opacity-0"
                        x-transition:enter-end="translate-y-0 opacity-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="translate-y-0 opacity-100"
                        x-transition:leave-end="translate-y-full opacity-0" @click.outside="open = false"
                        class="fixed bottom-0 left-0 w-full z-50 bg-white rounded-t-2xl shadow-xl p-6 max-h-[90vh] overflow-y-auto">

                        <!-- Инструкция сверху -->
                        <button @click="open = false" aria-label="Закрыть меню"
                            class="absolute top-8 right-5 -translate-x-1/2 text-red-600 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <!-- Контент -->
                        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Самостоятельный -->
                            <div class="rounded-3xl bg-white/60 p-6 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-600 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block text-indigo-600 hover:underline text-sm font-semibold">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <!-- С сертификатом -->
                            <div class="rounded-3xl bg-gray-900 p-6 ring-1 ring-gray-900/10 text-white">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-gray-300 text-sm">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                    class="mt-6 inline-block bg-indigo-500 px-4 py-2 rounded-md text-sm font-semibold hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопка -->
                    <span class="sm:ml-3 block">
                        <button @click="open = !open" type="button"
                            class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden uppercase">
                            Купить курс
                        </button>
                    </span>
                </div>

            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/m1.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/l1.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/p3.jpg') }}" alt="" class="rounded-lg bg-gray-100">
                <img src="{{ asset('images/m4.jpeg') }}" alt="" class="rounded-lg bg-gray-100">
            </div>
        </div>
    </div>
@endsection