<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                <nav class="fixed top-0 z-50 w-full bg-white/90 backdrop-blur-md shadow-sm">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-emerald-900">
                    RTQ AL-FALAH
                </a>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-8">

                <a href="/dashboard"
                    class="text-sm font-semibold text-amber-700 border-b-2 border-amber-600 pb-1">
                    Dashboard
                </a>

                <a href="/aset"
                    class="text-sm font-medium text-emerald-800 hover:text-amber-600 transition duration-300">
                    Data Aset
                </a>

                <a href="/kategori"
                    class="text-sm font-medium text-emerald-800 hover:text-amber-600 transition duration-300">
                    Kategori
                </a>

                <a href="/laporan"
                    class="text-sm font-medium text-emerald-800 hover:text-amber-600 transition duration-300">
                    Laporan
                </a>

                <a href="/pengguna"
                    class="text-sm font-medium text-emerald-800 hover:text-amber-600 transition duration-300">
                    Pengguna
                </a>
            </div>

            <!-- Right Menu -->
            <div class="flex items-center gap-4">

                <!-- Nama User -->
                <div class="hidden md:flex items-center gap-2">
                    <div class="w-10 h-10 rounded-full bg-emerald-800 text-white flex items-center justify-center font-bold">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>

                    <div class="text-sm">
                        <div class="font-semibold text-gray-800">
                            {{ Auth::user()->name }}
                        </div>

                        <div class="text-gray-500 text-xs">
                            {{ Auth::user()->role }}
                        </div>
                    </div>
                </div>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                        class="px-4 py-2 bg-emerald-800 hover:bg-emerald-900 text-white text-sm rounded-lg transition">
                        Logout
                    </button>
                </form>

                <!-- Mobile Button -->
                <button class="md:hidden text-emerald-800">
                    ☰
                </button>

            </div>

        </div>
    </div>
</nav>
            </main>
        </div>
    </body>
</html>
