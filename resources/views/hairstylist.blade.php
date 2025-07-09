@extends('layouts.main')
@section('title', 'Курсы парикмахера колориста в Алматы — обучение с нуля | Indigo')
@section('meta_description', 'Пройдите обучение парикмахер колорист в Алматы с нуля. За 2 месяца вы получите востребованную профессию, сертификат и скидку до 30%.')
@section('meta_keywords',
    'Курс парикмахера, курс колориста, курс женский мастер, колористика база, обучение парикмахеров, онлайн
    курсы парикмахеров, офлайн курсы паарикмахеров, сертификат, в Алматы')


@section('jsonld')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [
            {
              "@type": "Course",
              "name": "Курс парикмахер-колорист в Алматы",
              "description": "Обучение парикмахер-колорист с нуля. Практика, диплом, старт карьеры с Indigo.",
              "provider": {
                "@type": "Organization",
                "name": "Indigo",
                "url": "{{ url('/') }}"
      }
    },
    {
      "@type": "Course",
      "name": "Курс женский мастер - колорист в Алматы",
      "description": "Обучение комерческим стрижкам, колористике, укладке и завивке. Практика и диплом за 2 месяца.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
    {
      "@type": "Course",
      "name": "Курс колористика база и повышение секреты идеального цвета",
      "description": "Обучение колористика база и повышение, секрет идеального цвета. Практика, диплом и поддержка.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
    {
      "@type": "Course",
      "name": "Экспресс курс женские стрижки и колористика",
      "description": "коммерческие стрижки,колористика, коммерческие укладки. за 4 недели, за 1 месяц, работа с блондом и пигментами.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
    {
      "@type": "Course",
      "name": "Курс стрижек: каскады, слои и формы",
      "description": "Освой технику сложных женских стрижек. Каскады, слои, филировка и моделирование формы.",
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
          "name": "Сколько длится курс парикмахера?",
          "acceptedAnswer": {
            "@type": "Answer",
  "text": "Продолжительность обучения зависит от выбранного курса: 4 месяца — полная программа, 3 месяца — женский мастер, 2 месяца — полная программа-экспресс, 1.5 месяца — экспресс-курс. Все программы включают практику и выдачу диплома."
          }
        },
        {
          "@type": "Question",
          "name": "Выдают ли сертификат после окончания курса?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Да, вы получите диплом и именной сертификат Indigo."
          }
        },
        {
          "@type": "Question",
          "name": "Подходит ли курс новичкам без опыта?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Да, курсы подходят для обучения с нуля."
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
            title="КУРСЫ ПАРИКМАХЕРА - КОЛОРИСТА В АЛМАТЫ - ОБУЧЕНИЕ С НУЛЯ ДО ПРОФИ"
            subtitle="ОБУЧАЕМ С НУЛЯ ДО
                    ТОП-МАСТЕРА ЗА 2 МЕСЯЦА
                    СКИДКА ДО -30% НА ОБУЧЕНИЕ
                    УСПЕЙ ЗАПИСАТЬСЯ!"
    />
    @include('partials.guarantee', ['showSecondVideo' => false])
    <!-- КУРС "Парикмахер-колорист" -->
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">КУРС
                    "Парикмахер- колорист"</h2>
                <p class="mt-4 text-center text-gray-500">Программа обучения: 4 насыщенных блока:</p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 1. Коммерческие стрижки

                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/Kommercheskıe-strıjkı.webp') }}"
                                        alt="Блок по коммерческим стрижкам"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li">

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Геометрия стрижек</p>
                            <p class="font-medium text-gray-900">Фундаментальные техники стрижек по английской классике:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>круг</li>
                                <li>треугольник</li>
                                <li>квадрат</li>
                                <li>комбинации</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Три основные техники исполнения</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Три основные техники исполнения :слои,
                                градуировка и
                                линия
                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">12 коммерческих женских стрижек</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">12 коммерческих женских экспресс-стрижек по
                                авторским схемам — легко освоите даже без опыта
                            </span>
                        </div>

                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">5 востребованных мужских стрижек — коротко, чётко,
                                актуально
                            </p>
                        </div>
                    </li>
                </ul>
                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 2. Углублённая
                                колористика
                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/uglublennaya-koloristika.webp') }}"
                                        alt="Блок по углубленной колористики"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li sm:p-2">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Углубленная колористика</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Полная база + повышение квалификации
                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">10 коммерческих техник окрашивания</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">ТОП-10 коммерческих техник окрашивания, включая
                                Highlights , Babylights и Airtouch

                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Нейтрализация нежелательного пигмента</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Научим работать с корректорами, смешивать
                                грамотно
                                красители, расскажем что такое % оксиданта и как его использовать, как нейтрализовать
                                нежелательный пигмент. Водные, пенные бани, бани для нейтрализации
                                нежелательного пигмента, цветовые бани, американский шампунь
                            </span>
                        </div>
                    </li>
                </ul>
                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 3. Коммерческие укладки
                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/kommercheskie-ukladki.webp') }}"
                                        alt="Блок по коммерческим укладкам"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li sm:p-2">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">8 укладок на разную длину волос:
                            </p>
                        </div>

                        <div class="pt-4 border-t border-gray-200">
                        <span class="pb-2 mt-2 text-sm text-gray-500">Локоны на брашинг в турецкой технике
                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                        <span class="pb-2 mt-2 text-sm text-gray-500">Работа с плойками, стайлерами, щипцами
                            </span>
                        </div>
                    </li>
                </ul>
                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 4. Перманентная завивка
                                и
                                SPA-уходы

                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/permanentnaya-zavivka-i-spa-uhody.webp') }}"
                                        alt="Блок по перманентной завивке и спа уходам"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li sm:p-2">

                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Услуги, которые поднимут ваш средний чек:

                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">5 техник завивки, включая Boost Up (3 в теории + 2
                                в
                                практике)

                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">SPA-коктейли, восстановление и реконструкция волос
                            </p>
                        </div>
                    </li>
                </ul>
                @include('partials.accordion', ['id' => 1, 'content' => 'heirstylistfirst'])
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
                                Цена курса парикмахера - колориста
                                Тариф «Интенсивный»
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">250 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">175 000 ₸ в месяц</span>
                                </p>
                                <p class="text-sm text-center text-gray-300 uppercase">
                                    <span class="font-medium text-white">Длительность курса</span>
                                    <span class="font-medium text-white">4 месяца</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-center text-gray-300 uppercase">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">58 333 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    4 блока
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    В ПОДАРОК 8 дней практики
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    В ПОДАРОК ОНЛАЙН КУРС
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    длительность 4 месяца-30 занятий по 4 часа, 18 занятий по 8 часов
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Посещение занятий 3 раза в неделю
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    80% практики + углублённая теория
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Рассрочка, Kaspi Red
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Чек-листы по продвижению: личный бренд, общение с клиентами и ценообразование
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
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
                                ЦЕНА Курса Парикмахера - колориста
                                ТАРИф "Ускоренный"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">500 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">350 000 ₸ в месяц</span>
                                </p>
                                <p class="text-sm text-center text-gray-300 uppercase">
                                    <span class="font-medium text-white">Длительность курса</span>
                                    <span class="font-medium text-white">2 месяца</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-center text-gray-300 uppercase">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">58 333 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Для тех, кто ограничен по времени.


                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    4 блока
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    РАССРОЧКА, KASPI RED
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    длительность 2 месяца-30 занятий по 4 часа, 18 занятий по 8 часов
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Посещение занятий 3 раза в неделю или каждый день.
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    80% практики + углубленная теория
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Чек-листы по оформлению страницы в инстаграм, общению с клиентами и личному бренду
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
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
                                ЦЕНА Курса Парикмахера - колориста
                                ТАРИф "Практикум"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">1 900 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">1 300 000 ₸ за курс</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">108 333 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Для тех, кто хочет больше практики


                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    4 блока
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    РАССРОЧКА, KASPI RED
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    длительность 9 месяцев-144 занятия по 4 часа
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    график-3 занятия в неделю по 4 часа, блок по колористике по 8 часов в день
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    80% практики + углубленная теория
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Чек-листы по оформлению страницы в инстаграм, общению с клиентами и личному бренду
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
    <!-- КУРС "Женский мастер - колорист" -->
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-8 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">КУРС
                    "Женский
                    мастер - колорист"</h2>

                <p class="mt-4 text-center text-gray-500">Вы освоите сразу 4 направления: стрижки, окрашивание, укладки
                    и уход:</p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 1. Коммерческие стрижки

                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/Kommercheskıe-strıjkı.webp') }}"
                                        alt="Блок по коммерческим стрижкам"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Геометрия стрижек</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">круг, треугольник, квадрат + их комбинации

                            </span>
                        </div>

                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Три основные техники исполнения</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Классические английские техники: слои,
                                градуировка, линия

                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">12 коммерческих женских стрижек</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">12 коммерческих женских экспресс-стрижек по
                                авторским схемам — легко освоите даже без опыта

                            </span>
                        </div>
                    </li>
                </ul>
                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 2. Углублённая
                                колористика
                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/uglublennaya-koloristika.webp') }}"
                                        alt="Блок по Углублённой колористике"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li sm:p-2">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Углубленная колористика</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Полная база + повышение квалификации
                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">10 коммерческих техник окрашивания</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Включая Highlights , Babylights и Airtouch

                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Нейтрализация нежелательного пигмента</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Работа с корректорами и составление формул.
                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Нейтрализация нежелательного фона:</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">
                                ▪ воздушные бани <br>
                                ▪ цветовые бани <br>
                                ▪ американский шампунь <br>

                            </span>
                        </div>
                    </li>
                </ul>
                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 3. Коммерческие укладки
                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/kommercheskie-ukladki.webp') }}"
                                        alt="Блок по коммерческим укладкам"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li sm:p-2">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">8 укладок на разную длину волос:</p>
                        </div>

                        <div class="pt-4 border-t border-gray-200">
                        <span class="pb-2 mt-2 text-sm text-gray-500">Локоны на брашинг в турецкой технике
                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                        <span class="pb-2 mt-2 text-sm text-gray-500">Работа с плойками, стайлерами, щипцами
                            </span>
                        </div>
                    </li>
                </ul>
                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 4. Перманентная завивка
                                и
                                SPA-уходы

                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/permanentnaya-zavivka-i-spa-uhody.webp') }}"
                                        alt="Блок по Перманентной завивки и SPA-уходам"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li sm:p-2">

                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Услуги, которые поднимут ваш средний чек:</p>
                        </div>
                        <div class="pt-4 border-t border-gray-200">

                            <p class="font-medium text-gray-900">5 техник завивки, включая Boost Up (3 в теории + 2
                                в
                                практике)

                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">SPA-коктейли, восстановление и реконструкция волос
                            </p>
                        </div>
                    </li>
                </ul>
                @include('partials.accordion', ['id' => 2, 'content' => 'womanstylist'])
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
                                Цена курса парикмахера женского мастера
                                тариф "Интенсивный"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">250 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">175 000 ₸ в месяц</span>
                                </p>
                                <p class="text-sm text-center text-gray-300 uppercase">
                                    <span class="font-medium text-white">Длительность курса</span>
                                    <span class="font-medium text-white">3 месяца</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-center text-gray-300 uppercase">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">43 750 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    4 блока
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    В ПОДАРОК 8 дней практики
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    В ПОДАРОК ОНЛАЙН КУРС
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    длительность 3 месяца-18 занятий по 4 часа, 18 занятий по 8 часов
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Посещение занятий 3 раза в неделю
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    80% практики + углубленная теория
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Рассрочка, Kaspi Red
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Чек-листы по оформлению страницы в инстаграм, общению с клиентами и личному бренду
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
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
                                Цена курса парикмахера женского мастера
                                тариф "Ускоренный"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">750 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">525 000 ₸ ЗА КУРС</span>
                                </p>
                                <p class="text-sm text-center text-gray-300 uppercase">
                                    <span class="font-medium text-white">Длительность курса</span>
                                    <span class="font-medium text-white">1.5 месяца</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-center text-gray-300 uppercase">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">43 750 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Для тех, кто ограничен по времени.
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    4 блока
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    В ПОДАРОК 8 дней практики
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    В ПОДАРОК ОНЛАЙН КУРС
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    РАССРОЧКА, KASPI RED
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    длительность 1.5 месяца-18 занятий по 4 часа, 18 занятий по 8 часов

                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Посещение занятий 3 раза в неделю или каждый день
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    80% практики + углубленная теория
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Чек-листы по оформлению страницы в инстаграм, общению с клиентами и личному бренду
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
    <!-- КУРС "Колористика база + повышение. Секреты идеального цвета" -->
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">КУРС
                    "Колористика база + повышение. Секреты идеального цвета"</h2>
                <p class="mt-4 text-center text-gray-500">Программа курса подойдёт как начинающим, так и действующим
                    мастерам. Вы освоите 10+ востребованных техник окрашивания, разберёте сложные ситуации и научитесь
                    создавать идеальный цвет без страха.
                </p>
                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 1. Углублённая
                                колористика
                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/uglublennaya-koloristika.webp') }}"
                                        alt="Блок по углубленной колористике"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li sm:p-2">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Углублённая колористика: от основ до продвинутого
                                уровня

                            </p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Углубленная колористика БАЗА+ ПОВЫШЕНИЕ</span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">10 коммерческих техник окрашивания волос</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500"> включая Highlights, Babylights и Airtouch

                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Работа с корректорами и составление формул
                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Глубокое понимание % оксиданта — как выбрать и
                                применять
                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Нейтрализация нежелательного фона:
                            </p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">▪ воздушные бани <br>
                                ▪ цветовые бани <br>
                                ▪ американский шампунь <br>

                            </span>
                        </div>
                    </li>
                </ul>
                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 2. Коммерческие укладки

                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/kommercheskie-ukladki.webp') }}"
                                        alt="Блок по коммерческим укладкам"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li sm:p-2">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Вы научитесь создавать укладки, которые отлично
                                дополняют окрашивание и повышают чек за услугу.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Быстрые и стойкие укладки
                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Под разные типы волос и длину

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Брашинг, щипцы, стайлеры
                            </p>

                        </div>

                    </li>
                </ul>

                @include('partials.accordion', ['id' => 3, 'content' => 'colorist'])
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
                                Цена Курса колористики база + повышение. секреты идеального цвета

                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">460 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">320 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 мес.</span> по
                                    <span class="font-medium text-white">26 666 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Блок по колористике более 10 техник: база + повышение

                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    реконструкция волоса
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    чек-листы по инстаграм и личному бренду
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    длительность -18 занятий по 8 часов
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    график-3 раза в неделю по 8 часов
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Рассрочка, Kaspi Red
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    есть возможность ускоренного курса-занятия каждый день
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
    <!-- Экспресс-курс: «Женские стрижки + колористика»
 -->
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">
                    Экспресс-курс: «Женские стрижки + колористика»
                    <br> за 4 недели</h2>
                <p class="mt-4 text-center text-gray-500">Только за 4 недели — освоите востребованные навыки и начнёте
                    зарабатывать.
                </p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 1. Женские коммерческие
                                стрижки

                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/Kommercheskıe-strıjkı.webp') }}"
                                        alt="Блок по коммерческим стрижкам"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Геометрия стрижек</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Геометрия стрижек. Фундаментальные техники
                                стрижек: круг, треугольник, квадрат и их комбинации
                            </span>
                        </div>

                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Три основные техники исполнения</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Основы английской школы: линия, слои,
                                градуировка

                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">9 коммерческих женских стрижек</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Работаем
                                по
                                авторским схемам стрижек, где вы сможете выполнить экспресс стрижку, даже если вы
                                новичок
                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Техники различных срезов — для точности и стиля
                            </p>

                        </div>
                    </li>
                </ul>
                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 2. Углублённая
                                колористика (база + повышение)
                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/uglublennaya-koloristika.webp') }}"
                                        alt="Блок по углубленной колористике"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li sm:p-2">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Углубленная колористика</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Углубленная колористика БАЗА+ ПОВЫШЕНИЕ</span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">7 коммерческих техник окрашивания</p>
                            <span
                                    class="pb-2 mt-2 text-sm text-gray-500">топ 7 коммерческих техник окрашивания волос</span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Нейтрализация нежелательного пигмента</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Научим работать с корректорами, смешивать
                                грамотно
                                красители, расскажем что такое % оксиданта и как его использовать, как нейтрализовать
                                нежелательный пигмент. Водные, пенные бани, бани для нейтрализации
                                нежелательного пигмента, цветовые бани, американский шампунь
                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Корректное смешивание красителей и работа с
                                корректорами
                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Разбор % оксиданта, его функции и применение
                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Методы нейтрализации фона:
                            </p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">▪ воздушные бани <br>
                                ▪ цветовые бани <br>
                                ▪ американский шампунь <br>

                            </span>
                        </div>
                    </li>
                </ul>
                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 3. Укладки и SPA-уходы

                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/kommercheskie-ukladki.webp') }}"
                                        alt="Блок по коммерческим укладкам"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li sm:p-2">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">7 универсальных укладок на разную длину волос
                            </p>
                        </div>

                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Локоны на брашинг (турецкая техника)
                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Работа с плойками, фенами, стайлерами
                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">SPA-коктейли и реконструкция волос — для
                                восстановления после окрашивания

                            </p>
                        </div>
                    </li>
                </ul>

                @include('partials.accordion', ['id' => 4, 'content' => 'womancoloristika'])
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
                                Цена Экспресс курса "Женские стрижки + колористика"
                                за 4 недели
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">615 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">430 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 мес.</span> по
                                    <span class="font-medium text-white">35 833 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Для тех, кто очень ограничен по времени и сразу после обучения планирует приступить
                                    к
                                    работе или был большой перерыв в работе:

                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    3 блока
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    В ПОДАРОК ОНЛАЙН КУРС
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Предоставляем голову-манекен для постановки руки на занятиях
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    длительность 4 недели
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    80% практики + углубленная теория
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    график — 5 занятий в неделю по 6-8 часов
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Рассрочка, Kaspi Red
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Чек-листы по оформлению страницы в инстаграм, общению с клиентами и личному бренду
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
    <!-- Повышающий курс «Каскады. Комбинация техник “Слои”»
 -->
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">
                    Повышающий курс
                    «Каскады. Комбинация техник “Слои”»
                </h2>
                <p class="mt-4 text-center text-gray-500">Для мастеров, которые хотят углубиться в одну из самых
                    востребованных техник стрижек и закрыть все пробелы в теме “Слои”
                </p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">блок по коммерческим стрижкам
                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/povishayushiy-kurs-kaskadi.webp') }}"
                                        alt="Блок по каскадам"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Комбинации техник «Слои»

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Зарисовка диаграмм и схем

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Геометрия слоев: треугольник, квадрат, круг

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Работа с проборами
                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Направление и угол подъема пряди

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Угол подъема пряди
                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Различные техники срезов

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Персонализация стрижки под клиента

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Отработка на манекенах и 5 моделях для постановки руки
                                и закрепления техники

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Отработка на моделях (5 моделей)
                            </p>
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
                                Повышающий курс
                                "Каскады. Комбинация техник "Слои"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">160 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">110 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 мес.</span> по
                                    <span class="font-medium text-white">9 166 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Для тех, кто хочет изучить от и до тему «Каскадов», у кого остались вопросы после
                                    прошлых курсов:

                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    2 занятия по 8 часов
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    РАССРОЧКА, KASPI RED
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Предоставляем голову-манекен для постановки руки на занятиях
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    практики + углубленная теория
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
    <!-- Повышающий курс "ЛИНИЯ в квадратной, круглой и треугольной геометрии+ Комбинации -->
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">

                    Повышающий курс
                    «Линия в квадратной, круглой и треугольной геометрии + комбинации»
                </h2>
                <p class="mt-4 text-center text-gray-500">Программа курса включает :</p>

                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                        src="{{ asset('images/hairstylist/Kommercheskıe-strıjkı.webp') }}"
                                        alt="Блок по коммерческим стрижкам"
                                        width="320"
                                        height="320"
                                        class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li">

                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Зарисовка схем и диаграмм для визуализации формы

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Геометрия в технике "Линия": квадратная, треугольная,
                                круглая — на практике разбираем разные виды каре

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Проборы, направления и угол подъема пряди
                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Направление пряди
                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Угол подъема пряди
                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Комбинированные техники срезов волос

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Индивидуализация формы под клиента

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Отработка на манекенах — постановка руки

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Отработка на моделях (5 моделей)
                            </p>
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
                                Повышающий курс
                                "Линия в квадратной, круглой и треугольной геометрии+ Комбинации"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">160 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">110 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 мес.</span> по
                                    <span class="font-medium text-white">9 166 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Для тех, кто хочет изучить от и до тему «Каре», у кого остались вопросы после
                                    прошлых
                                    курсов:
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    2 занятия по 8 часов
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    РАССРОЧКА, KASPI RED
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Предоставляем голову-манекен для постановки руки на занятиях
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    практики + углубленная теория
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
    @include('partials.coursesingup', ['title' => 'Почему вам стоит записаться на курс парикмахера в школе indigo:',
'count' => '8',])
    @include('partials.reviews', ['video' => 'true', 'content' => 'hairstylist'])
    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['karina', 'veronika', 'vika']])
    <div class="relative p-4 overflow-hidden bg-white">
        <div class="relative mx-auto max-w-7xl">
            <div class="grid items-center lg:grid-cols-2 lg:gap-16">
                <!-- Фото слева на ПК -->
                <div class="flex flex-col items-center gap-6 lg:gap-10">
                    <h3 class="text-3xl font-bold tracking-tight text-center text-gray-900 lg:text-3xl lg:text-left">

                        Участие в BEAUBY EXPO 2024 ALMATY </h3>
                    <!-- Видео -->
                    <div class="w-full max-w-2xl overflow-hidden shadow-lg aspect-video rounded-xl">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/Gxg9fuGWhoY"
                                title="Видеоотзыв 2" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <!-- Фото -->
                    <div class="overflow-hidden shadow-xl h-96 w-72 rounded-2xl">
                        <img src="{{ asset('images/team/karina.webp') }}"
                             alt="Карина тренер курса парикмахерского мастерства"
                             class="object-cover w-full h-full">
                    </div>
                </div>


                <!-- Текст -->
                <div class="sm:max-w-lg">
                    <h3 class="text-3xl font-bold tracking-tight text-center text-gray-900 lg:text-4xl lg:text-left">

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

                    <ul class="mt-4 space-y-2 text-lg text-gray-600 list-disc list-inside">
                        <li>Блок по коммерческим женским стрижкам: формы стрижек по технике английской классики</li>
                        <li>Блок по мужским стрижкам</li>
                        <li>Блок по колористике от базы до повышения</li>
                        <li>Химическая завивка и спа уходы</li>
                        <li>Укладки</li>
                    </ul>

                    <p class="mt-6 text-lg font-semibold text-gray-600">На занятиях изучите теорию и закрепите знания на
                        практике на моделях!</p>
                    <p class="mt-6 text-lg font-semibold text-gray-600">Позвольте себе стать парикмахером и будьте на
                        шаг впереди конкурентов!</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@include('partials.portfolio-hair')
@endsection
