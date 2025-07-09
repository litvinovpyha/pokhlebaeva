@extends('layouts.main')
@section('title','Курсы маникюра, педикюра и дизайна ногтей в Алматы — обучение с дипломом')
@section('meta_description', "Обучение маникюру, педикюру и дизайну ногтей с нуля до топ-мастера за 2 месяца. Диплом, сертификат, практика, скидка до 30%. Начни карьеру уже сегодня в Алматы!")
@section('meta_keywords', 'курс маникюра Алматы, обучение педикюру, дизайн ногтей, курсы ногтевого сервиса, диплом маникюра, курсы маникюра с нуля, Indigo маникюр')
@section('jsonld')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [
            {
              "@type": "Course",
              "name": "Базовый курс Идеальный комбинированный маникюр в Алматы",
              "description": "Обучение идеального комбинированного маникюра. 2 коммерческие техники маникюра, С Дипломом, старт карьеры с Indigo.",
              "provider": {
                "@type": "Organization",
                "name": "Indigo",
                "url": "{{ url('/') }}"
      }
    },
    {
         "@type": "Course",
      "name": "Интенсивный курс Идеального комбинированного и аппаратного маникюра в Алматы",
      "description": "Интенсивное обучение идеального комбинированного и аппаратного маникюра. 3 ключевые техники, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
     {
         "@type": "Course",
      "name": "Базовый курс маникюра и педикюра в Алматы",
      "description": "Обучение маникюра и педикюра. 3 ключевые техники + педикюр, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
         {
         "@type": "Course",
      "name": "Интерсивный курс маникюра и педикюра в Алматы",
      "description": "Интенсивный обучение маникюра и педикюра. 3 ключевые техники + педикюр, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
             {
         "@type": "Course",
      "name": "Курс 3 в 1 NAIL STYLIST Маникюр, Педикюр, Моделирование ногтей в Алматы",
      "description": "Обучение 3 в 1 NAIL STYLIST Маникюр, Педикюр, Моделирование ногтей. 3 ключевые техники + педикюр, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
                 {
         "@type": "Course",
      "name": "Повышающий курс Японский маникюр, экоглянцевание в Алматы",
      "description": "Обучение Японский маникюр, экоглянцевание. Идеальное решение, если вы уже делаете маникюр, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
                     {
         "@type": "Course",
      "name": "Курс эстетического педикюра в аппаратной технике в Алматы",
      "description": "Обучение эстетического педикюра в аппаратной технике . Идеальное решение, если вы уже делаете педикюр, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
                     {
         "@type": "Course",
      "name": "Повышающий курс Аппаратный и комбинированный маникюр + Архитектура ногтей в Алматы",
      "description": "Обучение Аппаратный и комбинированный маникюр + Архитектура ногтей. Идеальное решение, если вы уже действующий мастер, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
                         {
         "@type": "Course",
      "name": "Повышающий курс Моделирование ногтей на верхние формы в Алматы",
      "description": "Обучение Моделирование ногтей на верхние формы. Идеальное решение, если вы уже опытный мастер, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
    {
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Кому подойдут курсы маникюра и педикюра в Indigo?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Курсы подойдут как начинающим мастерам без опыта, так и профессионалам, желающим повысить квалификацию."
      }
    },
    {
      "@type": "Question",
      "name": "Выдают ли сертификат после курса?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Да, после завершения курса вы получаете диплом Indigo, подтверждающий вашу квалификацию."
      }
    }
  ]
}
  ]
}
    </script>
@endsection
@section('content')
    <x-hero-section
        title="ОБУЧЕНИЕ МАНИКЮРУ, ПЕДИКЮРУ И ДИЗАЙНУ НОГТЕЙ НА КУРСАХ С ДИПЛОМОМ В АЛМАТЫ"
        subtitle="ОБУЧАЕМ С НУЛЯ ДО ТОП-МАСТЕРА ЗА 2 МЕСЯЦА. СЕРТИФИКАТ, ПРАКТИКА И СКИДКА ДО -30% — НАЧНИ
                    КАРЬЕРУ УЖЕ СЕГОДНЯ!"
    />

    @include('partials.guarantee', ['showFirstVideo' => false])
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">Базовый
                    курс
                    маникюра "идеальный комбинированный"
                </h2>
                <p class="mt-4 text-center text-gray-500">Программа курса включает:</p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/manicure-pedicure-intensiv.webp') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Две коммерческие техники маникюра</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Комбинированный маникюр одной фрезой + работа ножничками или щипчиками
                                    Идеальная техника, востребованная в салонах — быстро, безопасно и качественно
                                </li>
                                <li>Японский маникюр (эко глянцевание)
                                    Эко уход без геля, идеально подходит для клиентов с чувствительными ногтями
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Гель-покрытие под кутикулу с идеальными бликами</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы отработаете две техники, чтобы добиться идеального покрытия и зеркального блика
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Формы ногтей: от овала до миндаля</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Пошаговая техника правильного опила и подбора формы под руку клиента</li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Работа с фрезами без пропилов</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь работать быстро, уверенно и без риска травм</li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Архитектура ногтей и реставрация</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Построение чёткой формы, восстановление углов, создание идеального квадрата, ровного
                                    френча и ремонт сломанных ногтей
                                </li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Экспресс-дизайны, которые продаются</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы узнаете, как быстро и просто делать трендовые
                                    дизайны:
                                </li>
                                <li>Френч • Стемпинг • Пигменты • Стразы • Слайдеры • Кошачий глаз • Фольга • Поталь •
                                    Сухоцветы • Втирка
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">SPA-уход для рук и ногтей</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Дополнительная услуга в прайсе, повышающая чек и лояльность клиента</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Мобильная фотосъёмка ваших работ</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь снимать свои работы красиво — даже на телефон</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="grid grid-cols-1 div lg:grid-cols-2 ">
                    <div class="flex items-center justify-center px-0 py-4">
                        <div
                            class="relative w-full max-w-2xl px-3 py-6 text-white shadow-xl bg-gray-900/90 backdrop-blur-lg rounded-2xl sm:p-12 ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -30% до 5 августа
                            </div>

                            <!-- Заголовок -->
                            <h3 class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                цена Базового курса маникюра
                                "ИДЕАЛЬНЫЙ комбинированный"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">143 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">99 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">8 333 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    5 занятий по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    7 отработок на моделях + урок по базовым дизайнам
                                </li>

                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Обратная связь с тренером
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Рассрочка, Kaspi Red
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">
                    интенсивный
                    курс маникюра
                    "идеальный комбинированный+ аппаратный"</h2>
                <p class="mt-4 text-center text-gray-500">Программа курса включает:</p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/manicure-couse.webp') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Маникюр — 3 ключевые техники, которые приносят
                                доход:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Аппаратный маникюр — современная и быстрая техника</li>
                                <li>Комбинированный одной фрезой + щипчики / ножнички — для плотной и чистой обработки
                                </li>
                                <li>Японский маникюр (эко глянцевание) — уход без покрытия, подходит даже беременным и
                                    аллергикам
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Гель-покрытие под кутикулу с идеальными бликами</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы отработаете две техники, чтобы добиться идеального покрытия и зеркального блика
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Формы ногтей: от овала до миндаля</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Пошаговая техника правильного опила и подбора формы под руку клиента</li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Работа с фрезами без пропилов</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь работать быстро, уверенно и без риска травм</li>
                                <li></li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Архитектура ногтей и реставрация</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Построение чёткой формы, восстановление углов, создание идеального квадрата, ровного
                                    френча и ремонт сломанных ногтей
                                </li>
                                <li></li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Экспресс-дизайны, которые продаются</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы узнаете, как быстро и просто делать трендовые
                                    дизайны:
                                </li>
                                <li>Френч • Стемпинг • Пигменты • Стразы • Слайдеры • Кошачий глаз • Фольга • Поталь •
                                    Сухоцветы • Втирка
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">SPA-уход для рук и ногтей</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Дополнительная услуга в прайсе, повышающая чек и лояльность клиента</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Мобильная фотосъёмка ваших работ</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь снимать свои работы красиво — даже на телефон</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="grid grid-cols-1 div lg:grid-cols-2 ">
                    <div class="flex items-center justify-center px-0 py-4">
                        <div
                            class="relative w-full max-w-2xl px-3 py-6 text-white shadow-xl bg-gray-900/90 backdrop-blur-lg rounded-2xl sm:p-12 ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -30% до 5 августа
                            </div>

                            <!-- Заголовок -->
                            <h3
                                class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                цена интенсивного курса маникюра
                                "ИДЕАЛЬНЫЙ комбинированный+аппаратный"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">200 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">139 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">11 666 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    7 занятий по 6- 8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    11 отработок на моделях + урок по базовым дизайнам
                                </li>

                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Обратная связь с тренером
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Рассрочка, Kaspi Red
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Базовый курс маникюра и педикюра -->
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">
                    Базовый курс маникюра и педикюра</h2>
                <p class="mt-4 text-center text-gray-500">Программа курса включает:</p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/manicure-pedicure.webp') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Маникюр — 3 ключевые техники, которые приносят
                                доход:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Аппаратный маникюр — современная и быстрая техника</li>
                                <li>Комбинированный одной фрезой + щипчики / ножнички — для плотной и чистой обработки
                                </li>
                                <li>Японский маникюр (эко глянцевание) — уход без покрытия, подходит даже беременным и
                                    аллергикам
                                </li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Дополнительно вы освоите:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Гель-покрытие «под кутикулу» с зеркальным бликом (2 техники)</li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Гель-покрытие под кутикулу с идеальными бликами</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы отработаете две техники, чтобы добиться идеального покрытия и зеркального блика
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Формы ногтей: от овала до миндаля</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Пошаговая техника правильного опила и подбора формы под руку клиента</li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Работа с фрезами без пропилов</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь работать быстро, уверенно и без риска травм</li>
                                <li></li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Архитектура ногтей и реставрация</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Построение чёткой формы, восстановление углов, создание идеального квадрата, ровного
                                    френча и ремонт сломанных ногтей
                                </li>
                                <li></li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Экспресс-дизайны, которые продаются</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы узнаете, как быстро и просто делать трендовые
                                    дизайны:
                                </li>
                                <li>Френч • Стемпинг • Пигменты • Стразы • Слайдеры • Кошачий глаз • Фольга • Поталь •
                                    Сухоцветы • Втирка
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">SPA-уход для рук и ногтей</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Дополнительная услуга в прайсе, повышающая чек и лояльность клиента</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Мобильная фотосъёмка ваших работ</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь снимать свои работы красиво — даже на телефон</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Педикюр — эстетика + безопасность:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Эстетический педикюр с аппаратной обработкой стоп (на дисках)</li>
                                <li>Комбинированная техника обработки пальчиков: фреза + щипчики</li>
                                <li>Опил формы ногтей при педикюре</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">И главное:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Реальная практика на моделях</li>
                                <li>Поддержка тренера и разбор ошибок</li>
                                <li>Все материалы и инструменты включены</li>
                                <li>После курса — возможность трудоустройства и постоянная обратная связь</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="grid grid-cols-1 div lg:grid-cols-2 ">
                    <div class="flex items-center justify-center px-0 py-4">
                        <div
                            class="relative w-full max-w-2xl px-3 py-6 text-white shadow-xl bg-gray-900/90 backdrop-blur-lg rounded-2xl sm:p-12 ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -30% до 5 августа
                            </div>

                            <!-- Заголовок -->
                            <h3
                                class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                цена базового курса маникюра
                                и педикюра
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">172 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">119 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">9 999 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    6 занятий по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    9 отработок на моделях + урок по базовым дизайнам
                                </li>

                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Обратная связь с тренером
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Рассрочка, Kaspi Red
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Интенсивный курс маникюра и педикюра                                  DONE-->
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">
                    Интенсивный
                    курс маникюра и педикюра</h2>
                <p class="mt-4 text-center text-gray-500">Программа включает полный спектр востребованных коммерческих
                    техник, которые вы сможете использовать в работе сразу после окончания курса:
                </p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/manicure-pedicure-intensiv.webp') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Маникюр — 3 ключевые техники, которые приносят
                                доход:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Аппаратный маникюр — современная и быстрая техника</li>
                                <li>Комбинированный одной фрезой + щипчики / ножнички — для плотной и чистой обработки
                                </li>
                                <li>Японский маникюр (эко глянцевание) — уход без покрытия, подходит даже беременным и
                                    аллергикам
                                </li>
                            </ul>
                        </div>


                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Гель-покрытие под кутикулу с идеальными бликами</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы отработаете две техники, чтобы добиться идеального покрытия и зеркального блика
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Формы ногтей: от овала до миндаля</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Пошаговая техника правильного опила и подбора формы под руку клиента</li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Работа с фрезами без пропилов</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь работать быстро, уверенно и без риска травм</li>
                                <li></li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Архитектура ногтей и реставрация</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Построение чёткой формы, восстановление углов, создание идеального квадрата, ровного
                                    френча и ремонт сломанных ногтей
                                </li>
                                <li></li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Экспресс-дизайны, которые продаются</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы узнаете, как быстро и просто делать трендовые
                                    дизайны:
                                </li>
                                <li>Френч • Стемпинг • Пигменты • Стразы • Слайдеры • Кошачий глаз • Фольга • Поталь •
                                    Сухоцветы • Втирка
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">SPA-уход для рук и ногтей</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Дополнительная услуга в прайсе, повышающая чек и лояльность клиента</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Мобильная фотосъёмка ваших работ</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь снимать свои работы красиво — даже на телефон</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Педикюр — эстетика + безопасность:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Эстетический педикюр с аппаратной обработкой стоп (на дисках)</li>
                                <li>Комбинированная техника обработки пальчиков: фреза + щипчики</li>
                                <li>Опил формы ногтей при педикюре</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">И главное:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Реальная практика на моделях</li>
                                <li>Поддержка тренера и разбор ошибок</li>
                                <li>Все материалы и инструменты включены</li>
                                <li>После курса — возможность трудоустройства и постоянная обратная связь</li>

                            </ul>
                        </div>

                    </li>
                </ul>
                <div class="grid grid-cols-1 div lg:grid-cols-2 ">
                    <div class="flex items-center justify-center px-0 py-4">
                        <div
                            class="relative w-full max-w-2xl px-3 py-6 text-white shadow-xl bg-gray-900/90 backdrop-blur-lg rounded-2xl sm:p-12 ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -30% до 5 августа
                            </div>

                            <!-- Заголовок -->
                            <h3
                                class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                цена интенсивного курса маникюра
                                и педикюра
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">229 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">159 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">13 333 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    8 занятий по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    13 отработок на моделях + урок по базовым дизайнам
                                </li>

                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Обратная связь с тренером
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Рассрочка, Kaspi Red
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- курс 3 в 1 "NAIL STYLIST"                                             DONE -->
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">
                    курс 3 в 1 <br>
                    "NAIL STYLIST" <br>
                    Маникюр, Педикюр, Моделирование ногтей
                </h2>
                <p class="mt-4 text-center text-gray-500">Полноценная профессия с нуля до уверенного мастера — за один
                    курс.
                    Вы получите сильную базу, узнаете все современные техники и выйдете с готовым портфолио.</p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/manicure-pedicure-modeling.webp') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Коммерческий маникюр</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Аппаратный маникюр по-мокрому — техника повышенной деликатности</li>
                                <li>Комбинированный маникюр одной фрезой + щипчики/ножнички — чисто и быстро</li>
                                <li>Японский маникюр (экоглянцевание) — натуральный уход без гель-покрытия</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Гель-покрытие под кутикулу с идеальными бликами</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы отработаете две техники, чтобы добиться идеального покрытия и зеркального блика
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Формы ногтей: от овала до миндаля</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Пошаговая техника правильного опила и подбора формы под руку клиента</li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Работа с фрезами без пропилов</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь работать быстро, уверенно и без риска травм</li>
                                <li></li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Архитектура ногтей и реставрация</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Построение чёткой формы, восстановление углов, создание идеального квадрата, ровного
                                    френча и ремонт сломанных ногтей
                                </li>
                                <li></li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Экспресс-дизайны, которые продаются</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы узнаете, как быстро и просто делать трендовые
                                    дизайны:
                                </li>
                                <li>Френч • Стемпинг • Пигменты • Стразы • Слайдеры • Кошачий глаз • Фольга • Поталь •
                                    Сухоцветы • Втирка
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">SPA-уход для рук и ногтей</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Дополнительная услуга в прайсе, повышающая чек и лояльность клиента</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Мобильная фотосъёмка ваших работ</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь снимать свои работы красиво — даже на телефон</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Педикюр — эстетика + безопасность:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Эстетический педикюр с аппаратной обработкой стоп (на дисках)</li>
                                <li>Комбинированная техника обработки пальчиков: фреза + щипчики</li>
                                <li>Опил формы ногтей при педикюре</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Салонное моделирование ногтей</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Моделирование на верхние формы — без перегрузки и излишнего опила</li>
                                <li>Френч-отрисовка — чёткий стильный результат</li>
                                <li>Тонкие и прочные ногти — правильная архитектура и материалы</li>
                                <li>3 практики моделирования — на моделях</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">И главное:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Реальная практика на моделях</li>
                                <li>Поддержка тренера и разбор ошибок</li>
                                <li>Все материалы и инструменты включены</li>
                                <li>После курса — возможность трудоустройства и постоянная обратная связь</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="grid grid-cols-1 div lg:grid-cols-2 ">
                    <div class="flex items-center justify-center px-0 py-4">
                        <div
                            class="relative w-full max-w-2xl px-3 py-6 text-white shadow-xl bg-gray-900/90 backdrop-blur-lg rounded-2xl sm:p-12 ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -30% до 5 августа
                            </div>

                            <!-- Заголовок -->
                            <h3
                                class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                цена
                                Курса 3 в 1 "Нейл стилист:
                                маникюр+ педикюр+
                                моделирование гелем"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">315 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">219 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">18 333 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    12 занятий по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Интенсивный блок по маникюру
                                </li>

                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Блок по педикюру
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Блок по наращиванию ногтей (верхние формы)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Теория
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Экспресс дизайны
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    17 отработок на моделях
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    РАССРОЧКА , KASPI RED
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 div lg:grid-cols-2 ">
                    <div class="flex items-center justify-center px-0 py-4">
                        <div
                            class="relative w-full max-w-2xl px-3 py-6 text-white shadow-xl bg-gray-900/90 backdrop-blur-lg rounded-2xl sm:p-12 ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -30% до 5 августа
                            </div>

                            <!-- Заголовок -->
                            <h3
                                class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                цена
                                Курса 2 в 1 "Нейл стилист:
                                маникюр+
                                наращивание
                                полигелем"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">287 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">199 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">16 666 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    11 занятий по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Интенсивный блок по маникюру
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Блок по наращиванию ногтей (верхние формы)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Теория
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Базовые дизайны
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    15 отработок на моделях
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    РАССРОЧКА , KASPI RED
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">повышающий
                    курс "Японский маникюр, эко глянцевание"
                </h2>
                <p class="mt-4 text-center text-gray-500">Для действующих мастеров, которые хотят выйти на новый уровень
                </p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/japan-manicure.webp') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Этот курс — идеальное решение, если вы уже работаете в сфере ногтевого сервиса и хотите:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>расширить список услуг</li>
                                <li>освоить премиальную технику для клиентов, которые не носят гель</li>
                                <li>научиться работать быстро, чисто и безопасно</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900"></p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Аппаратный маникюр по-мокрому</li>
                                <li>Деликатная техника, подходящая даже для чувствительной кожи. Повышенная безопасность,
                                    минимальный риск травматизации</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900"></p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li> Комбинированный маникюр одной фрезой</li>
                                <li>Узнаете, как выполнять чистую обработку одной фрезой + ножнички/щипчики. Ускорение времени
                                    работы до 30%</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Японский
                                маникюр (эко глянцевание) </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Натуральная техника ухода — без покрытия</li>
                                <li>Подходит для беременных, аллергиков и поклонников естественного образа</li>
                                <li>Освоите поэтапную процедуру восстановления, шлифовки и полировки ногтевой пластины с
                                    применением паст и пудр на основе природных компонентов</li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Формат:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Только практика</li>
                                <li>Индивидуальный подход</li>
                                <li>Все материалы включены</li>
                                <li>Диплом повышения квалификации</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">После курса вы:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы сможете предлагать премиальные услуги в
                                    прайсе</li>
                                <li>Привлечёте новую аудиторию — включая клиентов,
                                    отказавшихся от геля</li>
                                <li>Получите уверенность и отточенную технику</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="grid grid-cols-1 div lg:grid-cols-2 ">
                    <div class="flex items-center justify-center px-0 py-4">
                        <div
                            class="relative w-full max-w-2xl px-3 py-6 text-white shadow-xl bg-gray-900/90 backdrop-blur-lg rounded-2xl sm:p-12 ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -30% до 5 августа
                            </div>

                            <!-- Заголовок -->
                            <h3
                                class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                Цена
                                Повышающего Курса "ЯПОНСКИЙ МАНИКЮР"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">45 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">30 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">2 500 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    1 занятие — 8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    3 отработки на моделях
                                </li>


                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    РАССРОЧКА , KASPI RED
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 div lg:grid-cols-2 ">
                    <div class="flex items-center justify-center px-0 py-4">
                        <div
                            class="relative w-full max-w-2xl px-3 py-6 text-white shadow-xl bg-gray-900/90 backdrop-blur-lg rounded-2xl sm:p-12 ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -30% до 5 августа
                            </div>

                            <!-- Заголовок -->
                            <h3
                                class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                цена
                                Курса 2 в 1 "Нейл стилист:
                                маникюр+
                                наращивание
                                полигелем"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">287 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">199 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">16 666 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    11 занятий по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Интенсивный блок по маникюру
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Блок по наращиванию ногтей (верхние формы)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Теория
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Базовые дизайны
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    15 отработок на моделях
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    РАССРОЧКА , KASPI RED
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">курс
                    эстетического педикюра в аппаратной технике

                </h2>
                <p class="mt-4 text-center text-gray-500">Премиальная услуга, которую клиенты ценят за безопасность,
                    комфорт и идеальный результат
                </p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/pedicure.webp') }}" alt="Блок по коммерческим стрижкам"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Санитарные нормы и стерилизация</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Как обеспечить полную безопасность для клиента</li>
                                <li>Все этапы дезинфекции и стерилизации инструмента</li>
                                <li>Работа с одноразовыми материалами</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Правильная форма ногтей</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Опил с учётом анатомии</li>
                                <li>Как создавать эстетичную и стойкую форму</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Аппаратная обработка стоп</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Шлифовка стоп и пяток дисками разной
                                    абразивности</li>
                                <li>Безопасная техника без риска ожогов и порезов</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Комбинированная техника для пальчиков
                                Совмещение фрезы и щипчиков</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Чистая обработка кутикулы и боковых валиков</li>
                                <li>Минимум травматизации — максимум эстетики</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Покрытие гель-лаком
                                Техника «под кутикулу»</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Работа с плотными пигментами и нюдовыми
                                    оттенками</li>
                            </ul>
                        </div>


                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Мобильная фотосъёмка ваших работ</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь снимать свои работы красиво — даже на телефон</li>
                            </ul>
                        </div>


                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">В результате:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>У вас будет чёткая техника + понимание
                                    анатомии
                                    стоп</li>
                                <li>Научитесь работать быстро и безопасно</li>
                                <li>Расширите перечень услуг и поднимете средний
                                    чек</li>
                                <li>Получите сертификат и поддержку
                                    тренера после курса</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="grid grid-cols-1 div lg:grid-cols-2 ">
                    <div class="flex items-center justify-center px-0 py-4">
                        <div
                            class="relative w-full max-w-2xl px-3 py-6 text-white shadow-xl bg-gray-900/90 backdrop-blur-lg rounded-2xl sm:p-12 ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -30% до 5 августа
                            </div>

                            <!-- Заголовок -->
                            <h3
                                class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                цена курса эстетического педикюра аппаратом

                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">58 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">40 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">3 333 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    1 занятие — 8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    2 отработки на моделях
                                </li>


                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    РАССРОЧКА , KASPI RED
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">Повышающий
                    курс
                    Аппаратный и комбинированный маникюр + Архитектура ногтей
                </h2>
                <p class="mt-4 text-center text-gray-500">Для действующих мастеров, которые хотят устранить пробелы в
                    знаниях, улучшить технику и повысить качество своих работ.</p>
                <p class="mt-4 text-center text-gray-500">Если после предыдущего обучения у вас остались вопросы —
                    этот
                    курс поможет закрыть все «белые пятна» и выйти на новый профессиональный уровень.</p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/manicure-couse.webp') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">


                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Санитарные нормы и стерилизация</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Как обеспечить полную безопасность для клиента</li>
                                <li>Все этапы дезинфекции и стерилизации инструмента</li>
                                <li>Работа с одноразовыми материалами</li>
                            </ul>
                        </div>


                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Правильный опил формы
                                Овальная, мягкий квадрат, четкий квадрат, миндаль</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Как избежать ошибок в симметрии и длине</li>
                            </ul>
                        </div>


                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900"></p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Аппаратный маникюр по-мокрому</li>
                                <li>Деликатная техника, подходящая даже для чувствительной кожи. Повышенная безопасность,
                                    минимальный риск травматизации</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900"></p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li> Комбинированный маникюр одной фрезой</li>
                                <li>Узнаете, как выполнять чистую обработку одной фрезой + ножнички/щипчики. Ускорение времени
                                    работы до 30%</li>
                            </ul>
                        </div>


                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Архитектура ногтей
                                Восстановление углов</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Создание чёткой формы — особенно квадрата</li>
                                <li>Реставрация и коррекция формы</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Выравнивание ногтевой пластины
                                Идеальные блики с минимальным количеством материала</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Экспресс-выравнивание без переворота</li>
                                <li>Выравнивание топом — когда и как применять</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Покрытие под кутикулу</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Две техники с идеальным бликом</li>
                                <li>Как избежать затеков и «отслоек»</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Дизайн
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Быстрый классический френч
                                </li>
                                <li>Стем пинг: техника и особенности нанесения
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">В завершении:
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Разбор ошибок учеников
                                </li>
                                <li>Индивидуальные рекомендации от тренера
                                </li>
                                <li>Ответы на вопросы по сложным случаям из практики
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Что вы получите:
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Прокачанную технику
                                </li>
                                <li>Уверенность в работе
                                </li>
                                <li>Повышение качества сервиса и среднего чека
                                </li>
                                <li>Сертификат повышения квалификации
                                </li>
                                <li>Поддержку тренера после курса</li>
                            </ul>
                        </div>

                    </li>
                </ul>
                <div class="grid grid-cols-1 div lg:grid-cols-2 ">
                    <div class="flex items-center justify-center px-0 py-4">
                        <div
                            class="relative w-full max-w-2xl px-3 py-6 text-white shadow-xl bg-gray-900/90 backdrop-blur-lg rounded-2xl sm:p-12 ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -30% до 5 августа
                            </div>

                            <!-- Заголовок -->
                            <h3
                                class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                Цена
                                Повышающего Курса Аппаратного и комбинированного маникюра. АРХИТЕКТУРА
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">86 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">59 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">4 999 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    2 занятия по 8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    3 отработки на моделях
                                </li>


                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    РАССРОЧКА , KASPI RED
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- курс моделирования ногтей-верхние формы                               DONE -->
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">Повышающий
                    курс
                    Моделирование ногтей на верхние формы
                </h2>
                <p class="mt-4 text-center text-gray-500">Для практикующих мастеров, готовых выйти на новый уровень!
                </p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/manicure-modeling-course.webp') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">
                                Курс создан для опытных специалистов, желающих освоить современную и быструю технику
                                моделирования без классических бумажных форм. Минимальный опил, высокая прочность и эстетика
                                результата — всё это вы освоите под руководством профессионального тренера.
                            </p>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Блок безопасности
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Обновлённые санитарные нормы
                                </li>
                                <li>Пошаговая стерилизация и дезинфекция инструментов
                                </li>
                                <li>Организация безопасного и эргономичного рабочего пространства
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Подготовка к моделированию
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Правильный маникюр перед наращиванием
                                </li>
                                <li>Удаление старого материала фрезой без повреждения ногтевой пластины
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Техника салонного моделирования
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
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
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">После прохождения курса вы:
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Освоите актуальную технику моделирования
                                </li>
                                <li>Сократите время на процедуру без потери качества
                                </li>
                                <li>Улучшите эстетику и стойкость результата
                                </li>
                                <li>Получите сертификат повышения квалификации
                                </li>
                                <li>Получите обратную связь от тренера по вашим работам</li>
                            </ul>
                        </div>



                    </li>
                </ul>
                <div class="grid grid-cols-1 div lg:grid-cols-2 ">
                    <div class="flex items-center justify-center px-0 py-4">
                        <div
                            class="relative w-full max-w-2xl px-3 py-6 text-white shadow-xl bg-gray-900/90 backdrop-blur-lg rounded-2xl sm:p-12 ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -30% до 5 августа
                            </div>

                            <!-- Заголовок -->
                            <h3
                                class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                Цена Курса моделирования ногтей -
                                верхние формы
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">115 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">80 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">6 666 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    3 занятия по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    3 отработки на моделях
                                </li>


                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    РАССРОЧКА , KASPI RED
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.coursesingup', [
        'title' => 'Почему вам стоит записаться на курс маникюра и педикюра в школе indigo:',
        'count' => '5',
    ])


    @include('partials.reviews', ['video' => 'false', 'content' => 'manicure'])
    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['olya', 'veronika', 'vika']])
    @include('partials.portfolio-manicure')

@endsection
