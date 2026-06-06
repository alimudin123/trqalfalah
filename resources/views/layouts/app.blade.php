<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'RTQ Al-Falah')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-orange-50 text-gray-800">

    {{-- NAVBAR --}}
    <nav class="fixed top-0 z-50 w-full bg-white/90 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-20">

                {{-- LOGO --}}
                <div class="flex items-center gap-3">
                    <a href="/" class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-full bg-emerald-800 text-white flex items-center justify-center font-bold">
                            RTQ
                        </div>

                        <div>
                            <h1 class="text-lg md:text-xl font-bold text-emerald-900 leading-tight">
                                RTQ Al-Falah
                            </h1>
                            <p class="text-xs text-amber-700">
                                Rumah Tahfidz Qur'an
                            </p>
                        </div>
                    </a>
                </div>

                {{-- MENU DESKTOP --}}
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/"
                        class="text-sm font-semibold text-emerald-800 hover:text-amber-600 transition">
                        Beranda
                    </a>

                    <a href="/tentang-kami"
                        class="text-sm font-semibold text-emerald-800 hover:text-amber-600 transition">
                        Tentang Kami
                    </a>

                    <a href="/program"
                        class="text-sm font-semibold text-emerald-800 hover:text-amber-600 transition">
                        Program
                    </a>

                    <a href="/berita"
                        class="text-sm font-semibold text-emerald-800 hover:text-amber-600 transition">
                        Berita
                    </a>

                    <a href="/kontak"
                        class="text-sm font-semibold text-emerald-800 hover:text-amber-600 transition">
                        Kontak
                    </a>
                </div>

                {{-- RIGHT MENU --}}
                <div class="hidden md:flex items-center gap-4">

                    @guest
                    <a href="{{ route('login') }}"
                        class="px-5 py-2 bg-emerald-800 hover:bg-emerald-900 text-white text-sm font-semibold rounded-lg transition">
                        Login
                    </a>
                    @endguest

                    @auth
                    <a href="/admin/dashboard"
                        class="text-sm font-semibold text-emerald-800 hover:text-amber-600 transition">
                        Dashboard
                    </a>

                    <div class="menu">
                        <form action="{{ route('logout') }}" method="POST" class="logout-form">
                            @csrf

                            <button type="submit" class="logout-button">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </div>
                    @endauth

                </div>

                {{-- MOBILE BUTTON --}}
                <button id="mobileMenuButton" class="md:hidden text-emerald-900 text-2xl">
                    ☰
                </button>
            </div>
        </div>

        {{-- MOBILE MENU --}}
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-orange-100">
            <div class="px-6 py-4 space-y-3">
                <a href="/" class="block text-sm font-semibold text-emerald-800">Beranda</a>
                <a href="/tentang-kami" class="block text-sm font-semibold text-emerald-800">Tentang Kami</a>
                <a href="/program" class="block text-sm font-semibold text-emerald-800">Program</a>
                <a href="/berita" class="block text-sm font-semibold text-emerald-800">Berita</a>
                <a href="/kontak" class="block text-sm font-semibold text-emerald-800">Kontak</a>

                @guest
                <a href="{{ route('login') }}"
                    class="block w-full text-center px-4 py-2 bg-emerald-800 text-white text-sm rounded-lg">
                    Login
                </a>
                @endguest

                @auth
                <a href="/admin/dashboard"
                    class="block text-sm font-semibold text-emerald-800">
                    Dashboard
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                        class="w-full px-4 py-2 bg-amber-700 text-white text-sm rounded-lg">
                        Logout
                    </button>
                </form>
                @endauth
            </div>
        </div>
    </nav>


    {{-- CONTENT --}}
    <main class="pt-20 min-h-screen">
        @yield('content')
    </main>


    {{-- FOOTER --}}
    <footer class="bg-emerald-950 text-white mt-16">
        <div class="max-w-7xl mx-auto px-6 py-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div>
                    <h3 class="text-xl font-bold mb-3">
                        RTQ Al-Falah
                    </h3>
                    <p class="text-sm text-emerald-100 leading-relaxed">
                        Rumah Tahfidz Qur'an Al-Falah adalah lembaga pendidikan Al-Qur'an
                        yang berfokus pada pembelajaran membaca, menghafal, dan memperbaiki
                        bacaan Al-Qur'an.
                    </p>
                </div>

                <div>
                    <h4 class="font-semibold mb-3">
                        Menu
                    </h4>

                    <ul class="space-y-2 text-sm text-emerald-100">
                        <li><a href="/" class="hover:text-amber-300">Beranda</a></li>
                        <li><a href="/tentang-kami" class="hover:text-amber-300">Tentang Kami</a></li>
                        <li><a href="/program" class="hover:text-amber-300">Program</a></li>
                        <li><a href="/berita" class="hover:text-amber-300">Berita</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-3">
                        Kontak
                    </h4>

                    <p class="text-sm text-emerald-100">
                        Samarinda, Kalimantan Timur
                    </p>

                    <p class="text-sm text-emerald-100 mt-2">
                        Email: info@rtqalfalah.id
                    </p>
                </div>

            </div>

            <div class="border-t border-emerald-800 mt-8 pt-5 text-center text-sm text-emerald-200">
                © {{ date('Y') }} Rumah Tahfidz Qur'an Al-Falah. All rights reserved.
            </div>
        </div>
    </footer>


    {{-- SCRIPT MOBILE MENU --}}
    <script>
        const mobileButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>