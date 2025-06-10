@extends('layouts.main')
@section('title', 'Заказать обратный звонок - Школа-студия Indigo')

@section('content')
    <div class="flex min-h-full flex-col justify-center p-4">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class=" text-center text-2xl/9 font-bold tracking-tight text-gray-900">Оставить заявку!
            </h2>
        </div>
        <div class=" sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('callback.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="text" class="block text-sm/6 font-medium text-gray-900">Ваше ФИО</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="name" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="phone" class="block text-sm font-medium text-gray-900">Ваш номер</label>
                    </div>
                    <div class="mt-2">
                        <input type="tel" name="phone" id="phone" autocomplete="tel" required
                        placeholder="+7 (7__) ___-__-__"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-600 sm:text-sm">
                        @error('phone')
                            <div class="text-red-600 text-sm">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="about" class="block text-sm/6 font-medium text-gray-900">Напишите когда вам удобно
                            ответить (не обязательно)</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500"></a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <textarea name="about" id="about" rows="3"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                                        </textarea>
                    </div>
                    <p class="mt-3 text-sm/6 text-gray-600">Или напишите вопрос который вас интересует</p>
                </div>
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Отправить</button>
                </div>
            </form>
        </div>
    </div>


@endsection