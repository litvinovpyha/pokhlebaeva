@extends('layouts.main')
@section('title', 'Курсы парикмахеров и мастеров маникюра в Алматы | Indigo')
@section('meta_description', 'Курсы парикмахеров и маникюра в Алматы. Онлайн и офлайн обучение, сертификаты, практика.
    Начни карьеру с Indigo.')
@section('meta_keywords',
    'Курс парикмахера, курс колориста, курс маникюра, курсы педикюра, обучение маникюру, онлайн
    курсы парикмахеров, онлайн курсы маникюра, сертификат маникюр Алматы')




@section('jsonld')
    <script type="application/ld+json">

        {
          "@context": "https://schema.org",
          "@graph": [
            {
              "@type": "Organization",
              "name": "Школа-студия Indigo",
              "url": "{{ url('/') }}",
      "logo": "{{ asset('images/logo.png') }}",
      "sameAs": [
        "https://instagram.com/indigo_school",
        "https://t.me/indigo_school"
      ],
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Алматы",
        "addressCountry": "KZ"
      }
    },
    {
      "@type": "Course",
      "name": "Курс парикмахера-колориста в Алматы",
      "description": "Обучение с нуля. Сертификат, практика, трудоустройство. Школа Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Школа-студия Indigo",
        "url": "{{ url('/') }}"
      }
    },
    {
      "@type": "Course",
      "name": "Курс маникюра и педикюра в Алматы",
      "description": "Освой классический, аппаратный и комбинированный маникюр. Диплом, практика и поддержка.",
      "provider": {
        "@type": "Organization",
        "name": "Школа-студия Indigo",
        "url": "{{ url('/') }}"
      }
    },
    {
      "@type": "Course",
      "name": "Онлайн курс маникюра с нуля",
      "description": "Изучай маникюр онлайн. 36 уроков, поддержка куратора, сертификат.",
      "provider": {
        "@type": "Organization",
        "name": "Школа-студия Indigo",
        "url": "{{ url('/') }}"
      }
    },
    {
      "@type": "Course",
      "name": "Онлайн курс ламинирования бровей",
      "description": "Научись ламинировать брови онлайн. Видео-уроки и диплом.",
      "provider": {
        "@type": "Organization",
        "name": "Школа-студия Indigo",
        "url": "{{ url('/') }}"
      }
    },
    {
      "@type": "Course",
      "name": "Онлайн курс ламинирования ресниц",
      "description": "Обучение ламинированию ресниц и ботоксу. Онлайн-формат, поддержка, диплом.",
      "provider": {
        "@type": "Organization",
        "name": "Школа-студия Indigo",
        "url": "{{ url('/') }}"
      }
    },
    {
      "@type": "Course",
      "name": "Онлайн курс для парикмахеров",
      "description": "Научись основам стрижек и колористики онлайн. Подходит новичкам.",
      "provider": {
        "@type": "Organization",
        "name": "Школа-студия Indigo",
        "url": "{{ url('/') }}"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Кому подойдут курсы в Indigo?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Курсы подойдут как новичкам без опыта, так и действующим мастерам, желающим повысить квалификацию."
          }
        },
        {
          "@type": "Question",
          "name": "Есть ли практика на офлайн-курсах?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Да, на всех офлайн-курсах предусмотрена практика на моделях под руководством преподавателей."
          }
        },
        {
          "@type": "Question",
          "name": "Выдают ли диплом или сертификат?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Да, после успешного завершения курса вы получаете диплом Indigo или сертификат — в зависимости от программы."
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
        title="КУРСЫ ПАРИКМАХЕРОВ, КОЛОРИСТОВ И МАСТЕРОВ МАНИКЮРА В АЛМАТЫ"
        subtitle="КРЕПКИЙ ФУНДАМЕНТ ВАШИХ ЗНАНИЙ СКИДКА ДО - 40% НА ОБУЧЕНИЕ"
    />


    @include('partials.guarantee')
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">6 причин
            записаться на
            обучение в школу Indigo
        </h2>
        <div class="grid items-center gap-6 sm:grid-cols-2 lg:grid-cols-3 md:gap-10">
            <div class="p-5 bg-white rounded-lg shadow-lg size-full ">
                <div class="flex items-center mb-3 gap-x-4">
                    <div
                        class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 ">
                        <svg class="text-indigo-600 shrink-0 size-6 " xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                        </svg>

                    </div>
                    <div class="shrink-0">
                        <h3 class="block text-lg font-semibold text-gray-800 ">Быстрый старт карьеры</h3>
                    </div>
                </div>
                <p class="text-gray-600 ">Сотрудничаем с салонами Алматы. Помогаем трудоустроиться сразу после курса.
                </p>
            </div>

            <div class="p-5 bg-white rounded-lg shadow-lg size-full ">
                <div class="flex items-center mb-3 gap-x-4">
                    <div
                        class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 ">
                        <svg class="text-indigo-600 shrink-0 size-6 " xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/>
                        </svg>

                    </div>
                    <div class="shrink-0">
                        <h3 class="block text-lg font-semibold text-gray-800 ">Продвинутая теория и практика</h3>
                    </div>
                </div>
                <p class="text-gray-600 ">Авторская тетрадь, отработка на моделях — реальные знания с первых дней.</p>
            </div>

            <div class="p-5 bg-white rounded-lg shadow-lg size-full ">
                <div class="flex items-center mb-3 gap-x-4">
                    <div
                        class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 ">
                        <svg class="text-indigo-600 shrink-0 size-6 " xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z"/>
                        </svg>

                    </div>
                    <div class="shrink-0">
                        <h3 class="block text-lg font-semibold text-gray-800 ">Группы до 8 человек</h3>
                    </div>
                </div>
                <p class="text-gray-600 ">Мини-группы обеспечивают внимание тренера к каждому ученику.</p>
            </div>

            <div class="p-5 bg-white rounded-lg shadow-lg size-full ">
                <div class="flex items-center mb-3 gap-x-4">
                    <div
                        class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 ">
                        <svg class="text-indigo-600 shrink-0 size-6 " xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z"/>
                        </svg>

                    </div>
                    <div class="shrink-0">
                        <h3 class="block text-lg font-semibold text-gray-800 ">Рассрочка от Kaspi</h3>
                    </div>
                </div>
                <p class="text-gray-600 ">Начинайте обучение уже сегодня — платите позже без переплат.

                </p>
            </div>

            <div class="p-5 bg-white rounded-lg shadow-lg size-full ">
                <div class="flex items-center mb-3 gap-x-4">
                    <div
                        class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 ">
                        <svg class="text-indigo-600 shrink-0 size-6 " xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"/>
                        </svg>

                    </div>
                    <div class="shrink-0">
                        <h3 class="block text-lg font-semibold text-gray-800 ">Современные условия</h3>
                    </div>
                </div>
                <p class="text-gray-600">Оснащенные классы, освещение, зеркала, стерильные инструменты и зона ожидания.
                </p>
            </div>

            <div class="p-5 bg-white rounded-lg shadow-lg size-full ">
                <div class="flex items-center mb-3 gap-x-4">
                    <div
                        class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 ">
                        <svg class="text-indigo-600 shrink-0 size-6 " xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12"/>
                        </svg>

                    </div>
                    <div class="shrink-0">
                        <h3 class="block text-lg font-semibold text-gray-800 ">Сертификат и поддержка
                        </h3>
                    </div>
                </div>
                <p class="text-gray-600 ">Престижный сертификат, помощь тренера, трудоустройство за рубежом.
                </p>
            </div>
        </div>
    </div>

    <div class="relative py-16 overflow-hidden bg-gray-900 isolate sm:py-24 lg:py-32">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="grid max-w-2xl grid-cols-1 mx-auto gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                <!-- Левая часть: Текст и форма -->
                <div class="max-w-xl lg:max-w-lg">
                    <h2 class="text-4xl font-semibold tracking-tight text-center text-white sm:text-5xl">Хотите
                        записаться
                        на обучение
                        и получить скидку до <span class="text-indigo-400">-30%</span>?</h2>
                    <p class="mt-4 text-lg text-gray-300">
                        Оставьте заявку, чтобы забронировать курс со скидкой. Мы свяжемся с вами и поможем подобрать
                        подходящую программу обучения.
                    </p>
                    <div class="flex flex-col max-w-md gap-4 mt-6 sm:flex-row">

                        <a href="{{ route('callback') }}"
                           class="rounded-md bg-indigo-700 px-4 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            ОСТАВИТЬ ЗАЯВКУ
                        </a>
                    </div>
                </div>

                <ul class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                    <li class="flex flex-col items-start">
                        <div class="p-2 rounded-md bg-white/5 ring-1 ring-white/10">
                            <svg class="text-white size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z"/>
                            </svg>
                        </div>
                        <span class="mt-4 text-base font-semibold text-white">Оперативный звонок</span>
                        <p class="mt-2 text-base text-gray-400">Мы свяжемся с вами в удобное для вас время — просто
                            укажите контакт.</p>
                    </li>
                    <li class="flex flex-col items-start">
                        <div class="p-2 rounded-md bg-white/5 ring-1 ring-white/10">
                            <svg class="text-white size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002"/>
                            </svg>
                        </div>
                        <span class="mt-4 text-base font-semibold text-white">Никакого спама</span>
                        <p class="mt-2 text-base text-gray-400">Мы ценим ваше время. Никаких лишних писем — только
                            важная
                            информация о курсе и вашей записи.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="absolute top-0 -translate-x-1/2 left-1/2 -z-10 blur-3xl xl:-top-6" aria-hidden="true">
            <div class="aspect-1155/678 w-288.75 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                 style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>

    <div class="p-4 bg-gray-100">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-2xl mx-auto lg:max-w-none sm:py-24 lg:py-32">
                <div class="grid grid-cols-1 mt-6 gap-y-6 sm:grid-cols-2 lg:grid-cols-4 lg:gap-x-6">
                    @php
                        $items = [
                            [
                                'route' => 'courses.hailstylist',
                                'title' => 'Курсы парикмахеров, колористов',
                                'img' => 'images/hairstylist/kursi-parikmaherov.webp',
                            ],
                            [
                                'route' => 'courses.manicure',
                                'title' => 'курсы маникюра, педикюра и наращивания ногтей',
                                'img' => 'images/manicure/manicure-pedicure-intensiv.webp',
                            ],
                            [
                                'route' => 'courses.onlinemanicure',
                                'title' => 'онлайн курс маникюра',
                                'img' => 'images/manicure/manicure.webp',
                            ],
                            [
                                'route' => 'courses.lamination',
                                'title' => 'онлайн курс ламинирования ресниц',
                                'img' => 'images/lamination/eyelashlamination.webp',
                            ],
                        ];
                    @endphp
                    @foreach ($items as $index => $item)
                        <a href="{{ route($item['route']) }}"
                           class="group relative p-2 rounded-lg flex flex-col h-full {{ $index % 2 === 0 ? 'bg-white' : 'bg-gray-200' }}">
                            <h2 class="mb-2 text-2xl font-semibold text-center text-gray-900 uppercase">
                                {{ $item['title'] }}
                            </h2>
                            <div class="mt-auto">
                                <img src="{{ asset($item['img']) }}" alt=""
                                     class="object-cover w-full rounded-lg no-modal group-hover:opacity-75 max-sm:h-80 sm:aspect-2/1 lg:aspect-square">
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">Кому стоит
            записаться
            на курс в школу INDIGO
        </h2>
        <div class="grid items-center gap-6 sm:grid-cols-2 lg:grid-cols-3 md:gap-10">
            <div class="p-5 bg-white rounded-lg shadow-lg size-full ">
                <div class="flex items-center mb-3 gap-x-4">
                    <div
                        class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 ">
                        <svg class="text-indigo-600 shrink-0 size-6 " xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="m6.115 5.19.319 1.913A6 6 0 0 0 8.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 0 0 2.288-4.042 1.087 1.087 0 0 0-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 0 1-.98-.314l-.295-.295a1.125 1.125 0 0 1 0-1.591l.13-.132a1.125 1.125 0 0 1 1.3-.21l.603.302a.809.809 0 0 0 1.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 0 0 1.528-1.732l.146-.292M6.115 5.19A9 9 0 1 0 17.18 4.64M6.115 5.19A8.965 8.965 0 0 1 12 3c1.929 0 3.716.607 5.18 1.64"/>
                        </svg>


                    </div>
                    <div class="shrink-0">
                        <h3 class="block text-base font-semibold text-gray-800 ">Хотите работать по всему миру</h3>
                    </div>
                </div>
                <p class="text-gray-600 ">Наши выпускники работают в салонах не только Алматы, но и за границей.
                </p>
            </div>

            <div class="p-5 bg-white rounded-lg shadow-lg size-full ">
                <div class="flex items-center mb-3 gap-x-4">
                    <div
                        class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 ">
                        <svg class="text-indigo-600 shrink-0 size-6 " xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z"/>
                        </svg>

                    </div>
                    <div class="shrink-0">
                        <h3 class="block text-base font-semibold text-gray-800 ">Получать удовольствие от работы</h3>
                    </div>
                </div>
                <p class="text-gray-600 ">Вы научитесь востребованной профессии с нуля и сможете зарабатывать, делая
                    людей
                    красивыми.</p>
            </div>

            <div class="p-5 bg-white rounded-lg shadow-lg size-full ">
                <div class="flex items-center mb-3 gap-x-4">
                    <div
                        class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 ">
                        <svg class="text-indigo-600 shrink-0 size-6 " xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z"/>
                        </svg>

                    </div>
                    <div class="shrink-0">
                        <h3 class="block text-base font-semibold text-gray-800 ">Ищете стабильный доход</h3>
                    </div>
                </div>
                <p class="text-gray-600 ">Работа мастером красоты — это возможность зарабатывать без потолка. Всё
                    зависит
                    от ваших навыков и желания развиваться.</p>
            </div>

            <div class="p-5 bg-white rounded-lg shadow-lg size-full ">
                <div class="flex items-center mb-3 gap-x-4">
                    <div
                        class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 ">
                        <svg class="text-indigo-600 shrink-0 size-6 " xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>

                    </div>
                    <div class="shrink-0">
                        <h3 class="block text-base font-semibold text-gray-800 ">Вы мама и ищете гибкий график</h3>
                    </div>
                </div>
                <p class="text-gray-600 ">Освойте профессию, с которой можно зарабатывать из дома или работать в удобное
                    для вас время.

                </p>
            </div>
            <div class="p-5 bg-white rounded-lg shadow-lg size-full ">
                <div class="flex items-center mb-3 gap-x-4">
                    <div
                        class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 ">
                        <svg class="text-indigo-600 shrink-0 size-6 " xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z"/>
                        </svg>


                    </div>
                    <div class="shrink-0">
                        <h3 class="block text-base font-semibold text-gray-800 ">Остались вопросы просле курсов
                        </h3>
                    </div>
                </div>
                <p class="text-gray-600">Если после прошлых обучений у вас остались пробелы — мы всё объясним,
                    отработаем и
                    закрепим на практике.

                </p>
            </div>

            <div class="p-5 bg-white rounded-lg shadow-lg size-full ">
                <div class="flex items-center mb-3 gap-x-4">
                    <div
                        class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 ">
                        <svg class="text-indigo-600 shrink-0 size-6 " xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z"/>
                        </svg>

                    </div>
                    <div class="shrink-0">
                        <h3 class="block text-base font-semibold text-gray-800 ">Мечтаете о своём салоне
                        </h3>
                    </div>
                </div>
                <p class="text-gray-600 ">Мы научим не только профессии, но и основам работы с клиентами,
                    ценообразованию,
                    продвижению. Вы будете готовы к самостоятельной работе.
                </p>
            </div>
        </div>
    </div>
    @include('partials.reviews', ['video' => 'false', 'content' => 'index'])
    @include('partials.coursesingup', ['title' => 'Вам стоит записаться на курс в школу INDIGO, если вы:'])
    @include('partials.fivesection')
    @include('partials.team', [
        'title' => 'Наша команда',
        'persons' => ['veronika', 'karina', 'olya', 'vika'],
    ])
    @include('partials.atmosphere')
    <div class="p-4 bg-gray-100">
        <h3 class="mb-2 text-4xl font-semibold tracking-tight text-center text-gray-900 uppercase sm:text-5xl">
            УЗНАТЬ ПОДРОБНЕЕ О КУРСАХ </h3>
        <div class="mx-auto max-w-7xl">
            <div id="accordion-collapse" data-accordion="collapse" class="mt-5">
                <h3 id="accordion-collapse-heading-10">
                    <button type="button"
                            class="flex items-center justify-between w-full gap-3 p-5 font-medium text-white bg-gray-800 rtl:text-right"
                            data-accordion-target="#accordion-collapse-body-10" aria-expanded="true"
                            aria-controls="accordion-collapse-body-10">
                        <span class="uppercase">Все еще думаете что рано идти учиться или уже поздно?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h3>
                <div id="accordion-collapse-body-10" class="hidden" aria-labelledby="accordion-collapse-heading-10">
                    <div class="p-5 border border-b-0 border-gray-200 ">
                        <p class="mb-2 text-blue-600 ">Обучение в нашей школе можно проходить с 14 лет
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
                            class="flex items-center justify-between w-full gap-3 p-5 font-medium text-white bg-gray-800 rtl:text-right"
                            data-accordion-target="#accordion-collapse-body-11" aria-expanded="true"
                            aria-controls="accordion-collapse-body-11">
                        <span class="uppercase">Есть ли у вас рассрочка?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h3>
                <div id="accordion-collapse-body-11" class="hidden" aria-labelledby="accordion-collapse-heading-11">
                    <div class="p-5 border border-b-0 border-gray-200 ">
                        <p class="mb-2 text-blue-600 ">Да, Вы можете обучаться в рассрочку от Kaspi
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
                            class="flex items-center justify-between w-full gap-3 p-5 font-medium text-white bg-gray-800 rtl:text-right"
                            data-accordion-target="#accordion-collapse-body-12" aria-expanded="true"
                            aria-controls="accordion-collapse-body-12">
                        <span class="uppercase">Как производится оплата?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h3>
                <div id="accordion-collapse-body-12" class="hidden" aria-labelledby="accordion-collapse-heading-12">
                    <div class="p-5 border border-b-0 border-gray-200 ">
                        <p class="mb-2 text-blue-600 ">До начала занятий:</p>
                        <p class="mb-2 text-blue-600 ">1. Наличными</p>
                        <p class="mb-2 text-blue-600 ">2. Картой</p>
                        <p class="mb-2 text-blue-600">3. QR код</p>
                        <p class="mb-2 text-blue-600">4. рассрочка Kaspi Red</p>
                        <p class="mb-2 text-blue-600">5. кредит Kaspi Kredit </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-7xl">
            <div id="accordion-collapse" data-accordion="collapse" class="mt-5">
                <h3 id="accordion-collapse-heading-13">
                    <button type="button"
                            class="flex items-center justify-between w-full gap-3 p-5 font-medium text-white bg-gray-800 rtl:text-right"
                            data-accordion-target="#accordion-collapse-body-13" aria-expanded="true"
                            aria-controls="accordion-collapse-body-13">
                        <span class="uppercase">Как выглядит ваш сертификат?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h3>
                <div id="accordion-collapse-body-13" class="hidden" aria-labelledby="accordion-collapse-heading-13">
                    <div class="p-5 border border-b-0 border-gray-200 ">
                        <img class="w-[250px]" src="{{ asset('images/accordion/sertificate.webp') }}" alt="">
                        <p class="mb-2 text-blue-600 ">Выдается именной сертификат на русском и
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
                            class="flex items-center justify-between w-full gap-3 p-5 font-medium text-white bg-gray-800 rtl:text-right"
                            data-accordion-target="#accordion-collapse-body-14" aria-expanded="true"
                            aria-controls="accordion-collapse-body-14">
                        <span class="uppercase">Обучаются ли в нашей школе ученики из ближнего и дальнего
                            зарубежья?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h3>
                <div id="accordion-collapse-body-14" class="hidden" aria-labelledby="accordion-collapse-heading-14">
                    <div class="p-5 border border-b-0 border-gray-200 ">
                        <p class="mb-2 text-blue-600 ">Да, у нас проходят обучение из России,
                            Узбекистана,
                            Киргизстана, Турции, ОАЭ, Катара, Канады, Европы, США</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
