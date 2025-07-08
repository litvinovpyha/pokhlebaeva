@extends('layouts.main')


@section('title', 'Онлайн-курсы маникюра, парикмахерского искусства, колористики и ламинирования — обучение с нуля')

@section('meta_description', 'Выбирай онлайн-курсы маникюра, парикмахерского искусства, колористики и ламинирования от школы Indigo. Учись из любой точки, получай сертификат, практикуйся и начинай зарабатывать уже через 2 месяца.')

@section('meta_keywords', 'онлайн курсы маникюра, обучение парикмахеров онлайн, курсы колористики, курсы ламинирования, курсы красоты онлайн, Indigo школа красоты')
@section('jsonld')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [
            {
              "@type": "Course",
              "name": "Онлайн курс маникюра Идеальный комбинированный + аппаратный",
              "description": "Обучение маникюра Идеальный комбинированный + аппаратный. Онлайн курс, С Дипломом, старт карьеры с Indigo.",
              "provider": {
                "@type": "Organization",
                "name": "Indigo",
                "url": "{{ url('/') }}"
      }
    },
       {
      "@type": "Course",
      "name": "Онлайн курс Ламинирование + ботокс ресниц",
      "description": "Обучение Ламинирование и ботокс ресниц с нуля. Онлайн курс, Диплом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
    {
      "@type": "Course",
      "name": "Онлайн курс Ламинирование бровей",
      "description": "Обучение ламинированию ресниц онлайн. Для мастеров бровистов. С дипломом Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
        {
      "@type": "Course",
      "name": "Онлайн курс для парикмахеров",
      "description": "Онлайн обучение по геометрии стрижек. с Дипломом indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
        {
      "@type": "Course",
      "name": "Демо-курс маникюра — Классическая техника",
      "description": "Бесплатный демо-курс маникюра из 7 видеоуроков. Классическая техника, доступна кураторская поддержка и электронный сертификат в зависимости от тарифа.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      },
      "isAccessibleForFree": true
    },
    {
      "@type": "Course",
      "name": "Онлайн-курс «Легкий старт» — Маникюр за 36 уроков",
      "description": "Бесплатный онлайн-курс из 36 видеоуроков. Освой 3 техники: аппаратный, комбинированный и классический маникюр. Подходит для новичков.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      },
      "isAccessibleForFree": true
    }
  ]
}
    </script>
@endsection

@section('content')
    <div class="bg-white">
        <div
            class="grid items-center max-w-2xl grid-cols-1 px-4 py-2 mx-auto gap-x-8 gap-y-16 sm:px-6 sm:py-2 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ОНЛАЙН-КУРС «МАСТЕР МАНИКЮРА
                    "ИДЕАЛЬНЫЙ КОМБИ + АППАРАТНЫЙ ПО МОКРОМУ"»</h1>
                <p class="mt-4 text-gray-500">За 36 видеоуроков вы научитесь делать идеальный маникюр. Освоите 3
                    техники: аппаратную по-мокрому, комбинированную и классическую — простым и понятным языком.</p>

                <dl class="grid grid-cols-1 mt-16 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">Доступ</dt>
                        <dd class="mt-2 text-sm text-gray-500">Доступ к урокам на 6 месяцев</dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">обратная связь</dt>
                        <dd class="mt-2 text-sm text-gray-500">Куратор всегда на связе</dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">проверка Д/З</dt>
                        <dd class="mt-2 text-sm text-gray-500">выполнение и проверка Д/З в зависимости от тарифа
                        </dd>
                    </div>
                    <div class="pt-4 border-t border-gray-200">
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
                                class="absolute text-red-600 -translate-x-1/2 rounded top-8 right-5 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>

                        <div class="grid max-w-4xl grid-cols-1 gap-6 mx-auto lg:grid-cols-2">
                            <div class="p-6 rounded-3xl bg-white/60 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-600">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block mt-6 text-sm font-semibold text-indigo-600 hover:underline">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <div class="p-6 text-white bg-gray-900 rounded-3xl ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-300">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block px-4 py-2 mt-6 text-sm font-semibold bg-indigo-500 rounded-md hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>

                    <span class="block sm:ml-3">
                        <button @click="open = !open" type="button"
                                class="flex items-center justify-center w-full px-8 py-3 mt-10 text-base font-medium text-white uppercase bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">
                            Купить курс
                        </button>
                    </span>
                </div>

            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/manicure/combi-manicure.jpeg') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/manicure/japan-manicure.webp') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/manicure/manicure-couse.webp') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/manicure/manicure-pedicure-modeling.webp') }}" alt=""
                     class="bg-gray-100 rounded-lg">
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div
            class="grid items-center max-w-2xl grid-cols-1 px-4 py-24 mx-auto gap-x-8 gap-y-16 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ОНЛАЙН КУРС «КОМБИНИРОВАННЫЙ
                    МАНИКЮР»</h2>
                <p class="mt-4 text-gray-500">За 19 видео уроков научим создавать идеальный маникюр.Все о
                    комбинированном маникюре простым языком</p>

                <dl class="grid grid-cols-1 mt-16 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">Доступ</dt>
                        <dd class="mt-2 text-sm text-gray-500">С покупкой вы получаете доступ на 6 месяцев</dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">обратная связь</dt>
                        <dd class="mt-2 text-sm text-gray-500">Куратор всегда на связе</dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">проверка Д/З</dt>
                        <dd class="mt-2 text-sm text-gray-500">выполнение и проверка Д/З в зависимости от тарифа
                        </dd>
                    </div>
                    <div class="pt-4 border-t border-gray-200">
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
                                class="absolute text-red-600 -translate-x-1/2 rounded top-8 right-5 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                        <div class="grid max-w-4xl grid-cols-1 gap-6 mx-auto lg:grid-cols-2">
                            <div class="p-6 rounded-3xl bg-white/60 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-600">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block mt-6 text-sm font-semibold text-indigo-600 hover:underline">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <div class="p-6 text-white bg-gray-900 rounded-3xl ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-300">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block px-4 py-2 mt-6 text-sm font-semibold bg-indigo-500 rounded-md hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>
                    <span class="block sm:ml-3">
                        <button @click="open = !open" type="button"
                                class="flex items-center justify-center w-full px-8 py-3 mt-10 text-base font-medium text-white uppercase bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">
                            Купить курс
                        </button>
                    </span>
                </div>

            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/manicure/combi-manicure.jpeg') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/manicure/japan-manicure.webp') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/manicure/manicure-couse.webp') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/manicure/manicure-pedicure-modeling.webp') }}" alt=""
                     class="bg-gray-100 rounded-lg">
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div
            class="grid items-center max-w-2xl grid-cols-1 px-4 py-24 mx-auto gap-x-8 gap-y-16 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ОНЛАЙН КУРС ДЛЯ ПАРИКМАХЕРОВ
                </h2>
                <p class="mt-4 text-gray-500">Онлайн-курс по геометрии стрижек.Онлайн-курс по колористике</p>

                <dl class="grid grid-cols-1 mt-16 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">Доступ</dt>
                        <dd class="mt-2 text-sm text-gray-500">С покупкой вы получаете доступ на 6 месяцев</dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">обратная связь</dt>
                        <dd class="mt-2 text-sm text-gray-500">Куратор всегда на связе</dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">проверка Д/З</dt>
                        <dd class="mt-2 text-sm text-gray-500">выполнение и проверка Д/З в зависимости от тарифа
                        </dd>
                    </div>
                    <div class="pt-4 border-t border-gray-200">
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
                                class="absolute text-red-600 -translate-x-1/2 rounded top-8 right-5 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>

                        <!-- Контент -->
                        <div class="grid max-w-4xl grid-cols-1 gap-6 mx-auto lg:grid-cols-2">
                            <!-- Самостоятельный -->
                            <div class="p-6 rounded-3xl bg-white/60 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-600">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block mt-6 text-sm font-semibold text-indigo-600 hover:underline">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <!-- С сертификатом -->
                            <div class="p-6 text-white bg-gray-900 rounded-3xl ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-300">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block px-4 py-2 mt-6 text-sm font-semibold bg-indigo-500 rounded-md hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопка -->
                    <span class="block sm:ml-3">
                        <button @click="open = !open" type="button"
                                class="flex items-center justify-center w-full px-8 py-3 mt-10 text-base font-medium text-white uppercase bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">
                            Купить курс
                        </button>
                    </span>
                </div>

            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/hairstylist/kursi-parikmaherov.webp') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/hairstylist/hairstylist-colorist.webp') }}" alt=""
                     class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/hairstylist/hairstylist-ukladki.jpeg') }}" alt=""
                     class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/hairstylist/hairstylist-commercian.jpeg') }}" alt=""
                     class="bg-gray-100 rounded-lg">
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div
            class="grid items-center max-w-2xl grid-cols-1 px-4 py-24 mx-auto gap-x-8 gap-y-16 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ДЕМО ВЕРСИЯ КУРСА МАНИКЮРА
                    (классическая техника)
                </h2>
                <p class="mt-4 text-gray-500">Демо версия курса маникюра. 7 видео уроков </p>

                <dl class="grid grid-cols-1 mt-16 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">Доступ</dt>
                        <dd class="mt-2 text-sm text-gray-500">бесплатный</dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">обратная связь</dt>
                        <dd class="mt-2 text-sm text-gray-500">Куратор всегда на связе</dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">проверка Д/З</dt>
                        <dd class="mt-2 text-sm text-gray-500">выполнение и проверка Д/З в зависимости от тарифа
                        </dd>
                    </div>
                    <div class="pt-4 border-t border-gray-200">
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
                                class="absolute text-red-600 -translate-x-1/2 rounded top-8 right-5 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>

                        <!-- Контент -->
                        <div class="grid max-w-4xl grid-cols-1 gap-6 mx-auto lg:grid-cols-2">
                            <!-- Самостоятельный -->
                            <div class="p-6 rounded-3xl bg-white/60 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-600">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block mt-6 text-sm font-semibold text-indigo-600 hover:underline">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <!-- С сертификатом -->
                            <div class="p-6 text-white bg-gray-900 rounded-3xl ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-300">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block px-4 py-2 mt-6 text-sm font-semibold bg-indigo-500 rounded-md hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопка -->
                    <span class="block sm:ml-3">
                        <button @click="open = !open" type="button"
                                class="flex items-center justify-center w-full px-8 py-3 mt-10 text-base font-medium text-white uppercase bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">
                            Купить курс
                        </button>
                    </span>
                </div>

            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/manicure/combi-manicure.jpeg') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/manicure/japan-manicure.webp') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/manicure/manicure-couse.webp') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/manicure/manicure-pedicure-modeling.webp') }}" alt=""
                     class="bg-gray-100 rounded-lg">
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div
            class="grid items-center max-w-2xl grid-cols-1 px-4 py-24 mx-auto gap-x-8 gap-y-16 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">«Ламинирование+ботокс ресниц»
                </h2>
                <p class="mt-4 text-gray-500">За 13 видео уроков научим создавать идеальный изгиб</p>

                <dl class="grid grid-cols-1 mt-16 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">Доступ</dt>
                        <dd class="mt-2 text-sm text-gray-500">С покупкой вы получаете доступ на 6 месяцев</dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">обратная связь</dt>
                        <dd class="mt-2 text-sm text-gray-500">Куратор всегда на связе</dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">проверка Д/З</dt>
                        <dd class="mt-2 text-sm text-gray-500">выполнение и проверка Д/З в зависимости от тарифа
                        </dd>
                    </div>
                    <div class="pt-4 border-t border-gray-200">
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
                                class="absolute text-red-600 -translate-x-1/2 rounded top-8 right-5 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>

                        <!-- Контент -->
                        <div class="grid max-w-4xl grid-cols-1 gap-6 mx-auto lg:grid-cols-2">
                            <!-- Самостоятельный -->
                            <div class="p-6 rounded-3xl bg-white/60 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-600">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block mt-6 text-sm font-semibold text-indigo-600 hover:underline">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <!-- С сертификатом -->
                            <div class="p-6 text-white bg-gray-900 rounded-3xl ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-300">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block px-4 py-2 mt-6 text-sm font-semibold bg-indigo-500 rounded-md hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопка -->
                    <span class="block sm:ml-3">
                        <button @click="open = !open" type="button"
                                class="flex items-center justify-center w-full px-8 py-3 mt-10 text-base font-medium text-white uppercase bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">
                            Купить курс
                        </button>
                    </span>
                </div>

            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/lamination/brow-lami.jpeg') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/lamination/eyebrowlamination.webp')}}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/lamination/eyelashlamination.webp')}}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/lamination/brow-lami.jpeg') }}" alt="" class="bg-gray-100 rounded-lg">
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div
            class="grid items-center max-w-2xl grid-cols-1 px-4 py-24 mx-auto gap-x-8 gap-y-16 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Онлайн-курс «ламинирование
                    бровей»
                </h2>
                <p class="mt-4 text-gray-500">За 9 видео уроков научим создавать идеальные брови</p>

                <dl class="grid grid-cols-1 mt-16 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">Доступ</dt>
                        <dd class="mt-2 text-sm text-gray-500">С покупкой вы получаете доступ на 6 месяцев</dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">обратная связь</dt>
                        <dd class="mt-2 text-sm text-gray-500">Куратор всегда на связе</dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">проверка Д/З</dt>
                        <dd class="mt-2 text-sm text-gray-500">выполнение и проверка Д/З в зависимости от тарифа
                        </dd>
                    </div>
                    <div class="pt-4 border-t border-gray-200">
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
                                class="absolute text-red-600 -translate-x-1/2 rounded top-8 right-5 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>

                        <!-- Контент -->
                        <div class="grid max-w-4xl grid-cols-1 gap-6 mx-auto lg:grid-cols-2">
                            <!-- Самостоятельный -->
                            <div class="p-6 rounded-3xl bg-white/60 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-600">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block mt-6 text-sm font-semibold text-indigo-600 hover:underline">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <!-- С сертификатом -->
                            <div class="p-6 text-white bg-gray-900 rounded-3xl ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-300">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block px-4 py-2 mt-6 text-sm font-semibold bg-indigo-500 rounded-md hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопка -->
                    <span class="block sm:ml-3">
                        <button @click="open = !open" type="button"
                                class="flex items-center justify-center w-full px-8 py-3 mt-10 text-base font-medium text-white uppercase bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">
                            Купить курс
                        </button>
                    </span>
                </div>
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/lamination/brow-lami.jpeg') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/lamination/eyebrowlamination.webp')}}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/lamination/eyelashlamination.webp')}}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/lamination/brow-lami.jpeg') }}" alt="" class="bg-gray-100 rounded-lg">
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div
            class="grid items-center max-w-2xl grid-cols-1 px-4 py-24 mx-auto gap-x-8 gap-y-16 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Онлайн-курс «Легкий старт»
                    БЕСПЛАТНЫЙ ДОСТУП
                </h2>
                <p class="mt-4 text-gray-500">За 36 видео уроков научим создавать идеальный маникюр. 3 техники —
                    аппаратный по-мокрому, комбинированный и классический простым языком</p>

                <dl class="grid grid-cols-1 mt-16 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">Постановка целей</dt>
                        <dd class="mt-2 text-sm text-gray-500">fdfdfdfdf</dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">Сервис</dt>
                        <dd class="mt-2 text-sm text-gray-500"></dd>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <dt class="font-medium text-gray-900">Общение с клиентами
                        </dt>
                        <dd class="mt-2 text-sm text-gray-500">
                        </dd>
                    </div>
                    <div class="pt-4 border-t border-gray-200">
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
                                class="absolute text-red-600 -translate-x-1/2 rounded top-8 right-5 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>

                        <!-- Контент -->
                        <div class="grid max-w-4xl grid-cols-1 gap-6 mx-auto lg:grid-cols-2">
                            <!-- Самостоятельный -->
                            <div class="p-6 rounded-3xl bg-white/60 ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-600">САМОСТОЯТЕЛЬНЫЙ</h3>
                                <p class="mt-4 text-4xl font-semibold text-gray-900">7 500 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-600">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">❌ БЕЗ СЕРТИФИКАТА</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block mt-6 text-sm font-semibold text-indigo-600 hover:underline">КУПИТЬ
                                    КУРС</a>
                            </div>

                            <!-- С сертификатом -->
                            <div class="p-6 text-white bg-gray-900 rounded-3xl ring-1 ring-gray-900/10">
                                <h3 class="text-base font-semibold text-indigo-400">С СЕРТИФИКАТОМ</h3>
                                <p class="mt-4 text-4xl font-semibold">9 000 &#8376;</p>
                                <ul class="mt-6 space-y-2 text-sm text-gray-300">
                                    <li class="flex items-center gap-2">✔ 36 видео уроков</li>
                                    <li class="flex items-center gap-2">✔ видео уроки в HD</li>
                                    <li class="flex items-center gap-2">✔ Обратная связь</li>
                                    <li class="flex items-center gap-2">✔ РАССРОЧКА , KASPI RED</li>
                                    <li class="flex items-center gap-2">✔ Сертификат (электронный)</li>
                                </ul>
                                <a href="{{ route('callback') }}"
                                   class="inline-block px-4 py-2 mt-6 text-sm font-semibold bg-indigo-500 rounded-md hover:bg-indigo-400">КУПИТЬ
                                    КУРС</a>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопка -->
                    <span class="block sm:ml-3">
                        <button @click="open = !open" type="button"
                                class="flex items-center justify-center w-full px-8 py-3 mt-10 text-base font-medium text-white uppercase bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">
                            Купить курс
                        </button>
                    </span>
                </div>

            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('images/manicure/combi-manicure.jpeg') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/manicure/japan-manicure.webp') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/manicure/manicure-couse.webp') }}" alt="" class="bg-gray-100 rounded-lg">
                <img src="{{ asset('images/manicure/manicure-pedicure-modeling.webp') }}" alt=""
                     class="bg-gray-100 rounded-lg">
            </div>
        </div>
    </div>
@endsection
