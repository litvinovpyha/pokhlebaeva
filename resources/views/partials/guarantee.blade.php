@props(['showFirstVideo' => true, 'showSecondVideo'=> true])

@php
    $twoVideos = $showFirstVideo && $showSecondVideo;
    $aspectClass = $twoVideos ? 'pt-[40%]' : 'pt-[75%]';
@endphp
<div class="overflow-hidden bg-white p-4">
    <div class="mx-auto max-w-7xl">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div >
                <div class="lg:max-w-lg">
                    <h2
                        class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl text-center">
                        МЫ ГАРАНТИРУЕМ</h2>
                    <dl class="mt-5 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="absolute top-1 -left-1 size-7 text-indigo-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>
                                В процессе обучения тренер
                            </dt>
                            <dd class="inline"> поделится советами по выбору инструментов и брендов, чтобы вы могли
                                сразу начать работу.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="absolute top-1 -left-1 size-7 text-indigo-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                </svg>
                                Академия оказывает поддержку
                            </dt>
                            <dd class="inline">в трудоустройстве, чтобы вы могли начать зарабатывать сразу после
                                окончания обучения. Средний доход наших выпускников начинается от 400 000 ₸.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="absolute top-1 -left-1 size-7 text-indigo-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                </svg>
                                Академия гарантирует, что вы освоите профессию.
                            </dt>
                            <dd class="inline">В противном случае вы сможете пройти обучение повторно бесплатно — при
                                условии регулярного посещения и выполнения всех рекомендаций тренера.</dd>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="space-y-8 lg:max-w-lg">
                @if ($showFirstVideo)
                    <div class="relative w-full {{ $aspectClass }}">
                        <iframe src="https://www.youtube.com/embed/VM58zK6j-SA" title="Видео 1"
                            class="absolute top-0 left-0 h-full w-full rounded-xl shadow-xl ring-1 ring-gray-400/10"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                @endif
                @if ($showSecondVideo)
                    <div class="relative w-full {{ $aspectClass }}">
                        <iframe src="https://www.youtube.com/embed/Ooa9MCuowxs" title="Видео 2"
                            class="absolute top-0 left-0 h-full w-full rounded-xl shadow-xl ring-1 ring-gray-400/10"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>