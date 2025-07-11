<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Школа красоты Indigo Курсы парикмахеров, маникюра в Алматы')</title>
    <meta name="description"
          content="@yield('meta_description', 'Обучение парикмахеров, мастеров маникюра, колористов с нуля. Сертификаты, практика, поддержка. Старт карьеры с Indigo!')">
    <meta name="keywords"
          content="@yield('meta_keywords', 'курсы парикмахеров, курсы маникюра, обучение парикмахеров Алматы, школа маникюра')">
    <meta property="og:title" content="@yield('title', 'Школа красоты Indigo Курсы парикмахеров, маникюра в Алматы')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:image" content="{{ asset('images/share.webp') }}">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="Школа Indigo">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="https://site.kz/courses/hair">
    @yield('jsonld')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link rel="icon" href="/public/favicon.ico" type="image/x-icon">
    <link rel="canonical" href="{{ url()->current() }}"/>
    {!! \App\Models\Setting::where('key', 'gtm_code')->first()?->value !!}

</head>

<body class="font-sans">
@include('layouts.header')
<main class="min-h-screen pt-20">
    @yield('content')
</main>
@include('layouts.footer')
@include('partials.whatsappjoin')
</body>

</html>
