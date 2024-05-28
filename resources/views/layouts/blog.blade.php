<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? '17blog' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-100 antialiased leading-none">
    <div class="mt-0 md:mt-5 pt-24 md:pt-0">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-4 lg:px-8 py-5 bg-gray">
            @yield('content')
        </div>
    </div>
</body>
