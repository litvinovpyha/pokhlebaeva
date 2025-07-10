<header class="fixed top-0 left-0 z-50 w-full bg-white shadow">
    <nav class="flex items-center justify-between p-3 lg:px-8" aria-label="Global">
        <div>
            <a href="{{ route('home') }}">
                <span class="sr-only">Школа красоты Indigo Курсы парикмахеров, маникюра в Алматы</span>
                <img class="w-auto no-modal" src="{{ asset(path: 'images/logo.svg') }}" alt="school logotyle">
            </a>
        </div>
        </div>
        <div class="flex items-center lg:gap-x-12">
            <a href="{{ route('home') }}" class="hidden font-semibold text-gray-900 lg:flex text-sm/6">Главная</a>
            <a href="{{ route('courses.online') }}"
               class="hidden font-semibold text-gray-900 lg:flex text-sm/6">Онлайн-обучение</a>
            <div class="grid grid-cols-2 divide-gray-900/5 ">
                <a href="https://www.instagram.com/pokhlebaeva.pro/?igshid=174ro53kwcgg1"
                   class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900">
                    <span class="sr-only">Наш инстаграм</span>

                    <svg class="flex-none text-gray-900 size-5 lucide lucide-instagram-icon lucide-instagram"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                    </svg>
                </a>
                <a  href="tel:+77089727646"
                   class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-90">
                    <span class="sr-only">Позвонить нам</span>

                    <svg class="flex-none text-gray-900 size-5" viewBox="0 0 20 20" fill="currentColor"
                         aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd"
                              d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z"
                              clip-rule="evenodd"/>
                    </svg>
<span class="hidden lg:flex">+7 (708) 97-27-646</span>
                </a>
            </div>
            @auth

                <div class="relative">
                    <button id="userMenuButton" type="button" aria-label="Open user menu" role="button"

                            class="flex items-center font-semibold text-gray-900 gap-x-1 text-sm/6"
                            onclick="toggleUserMenu()">
                        <span class="sr-only">Open user menu</span>

                        <p class="hidden lg:flex">{{ Auth::user()->name }}</p>
                        <svg class="hidden text-gray-400 lg:flex size-5" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <svg class="lg:hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                        </svg>
                    </button>
                    <!-- Выпадающее меню -->
                    <div id="userDropdown"
                         class="absolute z-50 hidden w-screen max-w-md mt-5 overflow-y-auto bg-white shadow-lg top-7 -right-3 lg:-right-8">
                        <div role="menu">
                            @if (Auth::user()->role == 'admin')
                                <div
                                    class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                    <div
                                        class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">


                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor"
                                             class="text-gray-600 size-6 group-hover:text-indigo-600 lucide lucide-log-out">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z"/>

                                        </svg>


                                    </div>
                                    <div class="flex-auto">
                                        <a href="{{ route('console') }}" class="block font-semibold text-gray-900">
                                            Консоль
                                            <span class="absolute inset-0"></span>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                    <div
                                        class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">


                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor"
                                             class="text-gray-600 size-6 group-hover:text-indigo-600 lucide lucide-log-out">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12"/>
                                        </svg>


                                    </div>
                                    <div class="flex-auto">
                                        <a href="{{ route('courses.online') }}"
                                           class="block font-semibold text-gray-900">
                                            Онлайн обучение
                                            <span class="absolute inset-0"></span>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                    <div
                                        class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">
                                        <svg class="text-gray-600 size-6 group-hover:text-indigo-600"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                             data-slot="icon">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z">
                                            </path>
                                        </svg>

                                    </div>
                                    <div class="flex-auto">
                                        <a href="{{ route('courses.index') }}"
                                           class="block font-semibold text-gray-900">
                                            Все Курсы
                                            <span class="absolute inset-0"></span>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                    <div
                                        class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">
                                        <svg class="text-gray-600 size-6 group-hover:text-indigo-600"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                             data-slot="icon">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="{{ route('lessons.index') }}"
                                           class="block font-semibold text-gray-900">
                                            Все Уроки
                                            <span class="absolute inset-0"></span>
                                        </a>
                                    </div>
                                </div>


                                <div
                                    class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                    <div
                                        class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">
                                        <svg class="text-gray-600 size-6 group-hover:text-indigo-600" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                             aria-hidden="true" data-slot="icon">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="{{ route('courses.create') }}"
                                           class="block font-semibold text-gray-900">
                                            Создать Курс
                                            <span class="absolute inset-0"></span>
                                        </a>
                                    </div>
                                </div>

                                <div
                                    class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                    <div
                                        class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">
                                        <svg class="text-gray-600 size-6 group-hover:text-indigo-600" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                             aria-hidden="true" data-slot="icon">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="{{ route('lessons.create') }}"
                                           class="block font-semibold text-gray-900">
                                            Создать Урок
                                            <span class="absolute inset-0"></span>
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div
                                    class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                    <div
                                        class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">


                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor"
                                             class="text-gray-600 size-6 group-hover:text-indigo-600 lucide lucide-log-out">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12"/>
                                        </svg>


                                    </div>
                                    <div class="flex-auto">
                                        <a href="{{ route('courses.online') }}"
                                           class="block font-semibold text-gray-900">
                                            Онлайн обучение
                                            <span class="absolute inset-0"></span>
                                        </a>
                                    </div>

                                </div>
                                <div
                                    class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                    <div
                                        class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">
                                        <svg class="text-gray-600 size-6 group-hover:text-indigo-600"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                             data-slot="icon">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z">
                                            </path>
                                        </svg>

                                    </div>
                                    <div class="flex-auto">
                                        <a href="{{ route('mycourses.index') }}"
                                           class="block font-semibold text-gray-900">
                                            Мои курсы
                                            <span class="absolute inset-0"></span>
                                        </a>
                                    </div>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                        class="relative flex items-center w-full p-4 text-left rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                    <div
                                        class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">
                                        <svg
                                            class="text-gray-600 size-6 group-hover:text-indigo-600 lucide lucide-log-out"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                                            <polyline points="16 17 21 12 16 7"/>
                                            <line x1="21" y1="12" x2="9" y2="12"/>
                                        </svg>
                                    </div>
                                    <span class="flex-auto font-semibold text-gray-900">
                                        Выйти
                                    </span>
                                </button>
                            </form>
                                @if (Auth::user()->role == 'seo')
                                    <div
                                        class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                        <div
                                            class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="currentColor"
                                                 class="text-gray-600 size-6 group-hover:text-indigo-600 lucide lucide-log-out">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z"/>

                                            </svg>

                                        </div>
                                        <div class="flex-auto">
                                            <a href="{{ route('seo') }}"
                                               class="block font-semibold text-gray-900">
                                                GTM
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                                <a href="https://www.instagram.com/pokhlebaeva.pro/?igshid=174ro53kwcgg1"
                                   class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">

                                    <svg
                                        class="flex-none text-gray-400 size-5 lucide lucide-instagram-icon lucide-instagram"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                                    </svg>
                                    Наш Инстаграм
                                </a>
                                <a href="tel:+77089727646"
                                   class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">
                                    <svg class="flex-none text-gray-400 size-5" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                              d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Позвонить нам
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @else
                <div class="relative">
                    <button id="userMenuButton" type="button" aria-label="Open user menu" role="button"

                            class="flex items-center font-semibold text-gray-900 gap-x-1 text-sm/6"
                            onclick="toggleUserMenu()">
                        <span class="sr-only">Open user menu</span>

                        <svg class=" size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                        </svg>
                    </button>
                    <!-- Выпадающее меню -->
                    <div id="userDropdown"
                         class="absolute z-50 hidden w-screen max-w-md mt-2 overflow-y-auto bg-white shadow-lg top-10 -right-3 lg:-right-8">
                        <div role="menu">
                            <div
                                class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                <div
                                    class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">


                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor"
                                         class="text-gray-600 size-6 group-hover:text-indigo-600 lucide lucide-log-out">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12"/>
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="{{ route('courses.online') }}" class="block font-semibold text-gray-900">
                                        Онлайн обучение
                                        <span class="absolute inset-0"></span>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                <div
                                    class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">
                                    <svg class="text-gray-600 size-6 group-hover:text-indigo-600 lucide lucide-log-out"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                                        <polyline points="16 17 21 12 16 7"/>
                                        <line x1="21" y1="12" x2="9" y2="12"/>
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="{{ route('login') }}" class="block font-semibold text-gray-900">
                                        Войти
                                        <span class="absolute inset-0"></span>
                                    </a>
                                </div>
                            </div>

                            <div
                                class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                <div
                                    class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor"
                                         class="text-gray-600 size-6 group-hover:text-indigo-600 lucide lucide-log-out">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z"/>
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="{{ route('register') }}" class="block font-semibold text-gray-900">
                                        Регистрация
                                        <span class="absolute inset-0"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                                <a href="https://www.instagram.com/pokhlebaeva.pro/?igshid=174ro53kwcgg1"
                                   class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">

                                    <svg
                                        class="flex-none text-gray-400 size-5 lucide lucide-instagram-icon lucide-instagram"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                                    </svg>
                                    Наш Инстаграм
                                </a>
                                <a href="tel:+77089727646"
                                   class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">
                                    <svg class="flex-none text-gray-400 size-5" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                              d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    Позвонить нам
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
        </div>
    </nav>
</header>
