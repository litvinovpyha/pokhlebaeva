<div class="bg-white py-24 sm:py-32 flex items-center justify-center relative isolate">
    <div aria-hidden="true"
         class="absolute inset-0 -z-20 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-40"></div>

    <div class="px-4 sm:px-6 lg:px-8 mx-auto max-w-2xl text-center">
        <h1 class="text-4xl sm:text-6xl font-bold text-gray-900">
            {{ $title }}
        </h1>
        <p class="mt-6 text-lg text-gray-600 sm:text-xl">
            {{ $subtitle }}
        </p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="{{ route('callback') }}"
               class="rounded-md bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600">
                Заказать звонок
            </a>
            <a href="{{ route('courses.online')}}" class="text-sm font-semibold text-gray-900">
                Онлайн курсы <span aria-hidden="true">→</span>
            </a>
        </div>
    </div>
</div>
