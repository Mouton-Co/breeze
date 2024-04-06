<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-sans antialiased">
    <div class="flex h-screen w-full justify-center">
        <div class="w-full max-w-screen-lg pt-6 px-2">
            <div class="flex w-full items-center justify-between">
                <x-icon.logo class="aspect-square w-16 text-blue-400" />
                <span class="text-xs text-slate-400">
                    {{ __('The best breeze template for you') }}
                </span>
            </div>
            <div class="w-full pt-12">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
