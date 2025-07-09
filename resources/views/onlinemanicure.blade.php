@extends('layouts.main')



@section('title', 'Онлайн курсы маникюра и педикюра — обучение с нуля с сертификатом | Indigo')

@section('meta_description', 'Проходи онлайн-обучение маникюру и педикюру с нуля. Изучай современные техники: классическую, аппаратную и комбинированную. Получи сертификат и начни зарабатывать от 400 000 ₸ уже через 2 месяца. Обучение от школы Indigo.')

@section('meta_keywords', 'онлайн курс маникюра, обучение педикюру онлайн, курсы маникюра с сертификатом, маникюр и педикюр с нуля, школа Indigo, курсы красоты, комбинированный маникюр')


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
      "name": "Онлайн курс маникюра Идеальный комбинированный + аппаратный",
      "description": "Обучение маникюра Идеальный комбинированный + аппаратный. Онлайн курс,Без Диплома, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
  ]
}
</script>
@endsection
@section('content')
    <x-hero-section
        title=" ОНЛАЙН КУРС МАНИКЮРА И ПЕДИКЮРА — СТАНЬ ПРОФЕССИОНАЛОМ С НУЛЯ"
        subtitle="  НАУЧИМ ДЕЛАТЬ «ДОРОГОЙ» МАНИКЮР
                    И ЗАРАБАТЫВАТЬ ОТ 400K
                    СКИДКА ДО -30 % НА ОБУЧЕНИЕ"
    />
    @include('partials.guarantee', ['showFirstVideo' => false])
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">онлайн курс
                    маникюра "идеальный комбинированный+ аппаратный"</h2>
                <p class="mt-4 text-center text-gray-500">Программа курса включает:</p>
                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"> <img
                                    src="{{ asset('images/manicure/manicure.webp') }}" alt="на фото пример маникюра с курса"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">
                        <div class="pt-4 pb-2">
                            <p class="font-medium text-gray-900">Три коммерческие техники маникюра:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Аппаратный по мокрому- подходит к любому типу кожи (фрезы)</li>
                                <li>Комбинированный одной фрезой/щипчики</li>
                                <li>Скоростной комби фреза/ ножнички</li>
                            </ul>

                        </div>

                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Покрытие «под кутикулу»</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Покрытие «под кутикулу» с идеальными бликами</span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Техника правильной формы ногтей</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Технику правильного опила формы ногтей (овал,
                                миндаль, мягкий квадрат)</span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Работа с фрезами</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Работу фрезами без пропилов</span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Два способа реставрации сломанного ногтя</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Два способа реставрации сломанного ногтя :полигелем
                                и ниточным протезированием</span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Техника правильной формы ногтей</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Технику правильного опила формы ногтей (овал,
                                миндаль, мягкий квадрат)</span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Дизайн</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Экспресс дизайн (френч, стемпинг, пигменты, стразы,
                                слайдеры)</span>
                        </div>
                        <div class="pt-4 pb-2 border-t border-gray-200">
                            <p class="font-medium text-gray-900">SPA уход
                            </p>
                        </div>
                        <div class="pt-4 pb-2 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Способы фотосъемки ваших работ</p>
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
                                -70% до 5 августа
                            </div>

                            <!-- Заголовок -->
                            <h3 class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                цена онлайн курса маникюра
                                "ИДЕАЛЬНЫЙ комбинированный+аппаратный"
                                тариф самостоятельный
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">25 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">7 500 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">625 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    36 видео уроков
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Видео уроки в HD качестве
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Обратная связь с тренером
                                </li>

                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Рассрочка, Kaspi Red
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БЕЗ СЕРТИФИКАТА
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
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -70% до 5 августа
                            </div>

                            <h3
                                class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                цена онлайн курса маникюра
                                "ИДЕАЛЬНЫЙ комбинированный+аппаратный"
                                тариф с сертификатом
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">30 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">9 000 ₸</span>
                                </p>
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">750 ₸/мес.</span>
                                </p>

                            </div>
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    36 видео уроков
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Видео уроки в HD качестве
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
                                    Обратная связь с тренером
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
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Сертификат (электронный)

                                </li>
                            </ul>
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
    @include('partials.coursesingup', ['title' => 'Вам стоит записаться на курс в школу INDIGO, если вы:'])
    @include('partials.reviews', ['video' => 'false', 'content' => 'onlinemanicure'])
    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['olya', 'veronika', 'vika']])
@endsection
