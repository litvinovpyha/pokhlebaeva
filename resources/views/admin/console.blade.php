@extends('layouts.main')
@section('content')
    <div>
        <main class="flex-1 px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 sm:p-8 space-y-6 lg:max-w-4xl">
                <h2 class="text-2xl font-bold text-gray-800 text-center">Пользователи</h2>

                <form method="GET" action="{{ route('console') }}" class="max-w-md mx-auto">
                    <label for="email-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Поиск</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="email-search" name="email" value="{{ request('email') }}"
                            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Введите почту" />
                        <button type="submit"
                            class="absolute right-2.5 bottom-2.5 text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                            Поиск
                        </button>
                    </div>
                </form>


                <div class="grid gap-4 grid-cols-1">
                    @foreach ($users as $user)
                        <div
                            class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 bg-gray-50 rounded-xl p-4 shadow-sm hover:shadow-md transition">
                            <div class="flex items-center gap-4 min-w-0">
                                <div class="flex-shrink-0">
                                    <svg fill="currentColor" viewBox="0 0 24 24"
                                        class="w-10 h-10 text-gray-400 bg-white rounded-full ring-2 ring-gray-200">
                                        <path
                                            d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex flex-col min-w-0">
                                    <p class="block font-semibold text-gray-900 hover:text-indigo-600 truncate">
                                        {{ $user->name }}
                                    </p>
                                    <p class="text-sm text-gray-600 truncate">
                                        {{ $user->email }}
                                    </p>
                                </div>
                            </div>

                            <a href="{{ route('user.edit', $user->id) }}"
                                class="inline-block rounded-md border border-transparent  px-6 py-2 text-center font-medium text-white bg-indigo-600 hover:bg-indigo-700 whitespace-nowrap">
                                Перейти
                            </a>
                        </div>

                    @endforeach
                </div>
                <div class="mt-6">
                    {{ $users->links() }}
                </div>

            </div>
        </main>

    </div>

@endsection