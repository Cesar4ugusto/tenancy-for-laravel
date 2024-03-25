<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="icon/favicon-32x32.png" type="image/x-icon">

        <title>{{ config('app.name', 'Laravel') }} {{ tenant('id') ? tenant('id') : 'Central Serviços' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased" x-data="{ sideMenu: true }" x-init="sideMenu = window.innerWidth > 768">
        <div class="min-h-screen bg-gray-100">
            <div class="flex items-center h-screen w-screen">
                <x-sidebar />
                <div class="w-full h-screen overflow-y-auto overflow-x-hidden">
                    @include('layouts.navigation')
                    <main class="px-2 md:px-3">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>
