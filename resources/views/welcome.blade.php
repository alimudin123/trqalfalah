<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&family=Manrope:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Google Icon -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }

        .font-headline {
            font-family: 'Noto Serif', serif;
        }

        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24;
        }

        .editorial-shadow {
            box-shadow: 0 8px 32px rgba(1, 45, 29, 0.04);
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-6 h-20">

            <div class="text-2xl font-bold font-headline text-emerald-900">
                Al-Falah
            </div>

            <!-- Menu -->
            <div class="hidden md:flex items-center space-x-8 font-medium">

                <a href="#"
                    class="text-amber-700 font-bold border-b-2 border-amber-600">
                    Beranda
                </a>

                <a href="#"
                    class="text-emerald-800 hover:text-amber-600 transition">
                    Profil
                </a>

                <a href="#"
                    class="text-emerald-800 hover:text-amber-600 transition">
                    Program
                </a>

                <a href="#"
                    class="text-emerald-800 hover:text-amber-600 transition">
                    Kegiatan
                </a>

                <a href="#"
                    class="text-emerald-800 hover:text-amber-600 transition">
                    Galeri
                </a>

                <a href="#"
                    class="text-emerald-800 hover:text-amber-600 transition">
                    Kontak
                </a>

            </div>

            <!-- Auth -->
            <div class="flex items-center gap-4">

                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="px-6 py-2 bg-emerald-900 text-white rounded-md font-medium hover:opacity-90 transition">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="px-6 py-2 bg-emerald-900 text-white rounded-md font-medium hover:opacity-90 transition">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="px-6 py-2 border border-emerald-900 text-emerald-900 rounded-md font-medium hover:bg-emerald-900 hover:text-white transition">
                            Register
                        </a>
                    @endif
                @endauth

            </div>

        </div>
    </nav>

    <main class="pt-20">

        <!-- Hero -->
        <section class="relative min-h-screen flex items-center overflow-hidden">

            <div class="absolute inset-0 z-0">
                <img
                    class="w-full h-full object-cover brightness-50"
                    src="https://images.unsplash.com/photo-1519817650390-64a93db511aa?q=80&w=1920"
                    alt="Hero">

                <div class="absolute inset-0 bg-gradient-to-br from-emerald-950/70 to-transparent"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">

                <div class="max-w-2xl">

                    <span class="inline-block uppercase tracking-[0.2em] text-amber-300 mb-6 font-semibold">
                        Rumah Tahfidz Al-Falah
                    </span>

                    <h1 class="font-headline text-5xl md:text-7xl text-white leading-tight mb-8">
                        Menyinari Hati dengan Cahaya
                        <br>
                        <span class="italic font-normal">
                            Al-Quran.
                        </span>
                    </h1>

                    <p class="text-lg md:text-xl text-emerald-50/80 mb-10 leading-relaxed">
                        Membentuk generasi Qur'ani yang berakhlak mulia dan berwawasan luas melalui bimbingan intensif hafalan Al-Quran.
                    </p>

                    <div class="flex flex-wrap gap-4">

                        <button
                            class="px-8 py-4 bg-amber-600 text-white rounded-md font-bold text-lg hover:brightness-110 transition-all editorial-shadow">
                            Daftar Sekarang
                        </button>

                        <button
                            class="px-8 py-4 bg-white/10 backdrop-blur-sm text-white border border-white/20 rounded-md font-bold text-lg hover:bg-white/20 transition-all">
                            Jelajahi Program
                        </button>

                    </div>

                </div>

            </div>

        </section>

        <!-- Quote -->
        <section class="bg-emerald-900 py-24 text-center px-6">

            <div class="max-w-4xl mx-auto">

                <span class="material-symbols-outlined text-amber-300 text-5xl mb-8">
                    format_quote
                </span>

                <h2 class="font-headline text-3xl md:text-4xl text-white leading-relaxed italic mb-6">
                    "Sebaik-baik kalian adalah orang yang belajar Al-Quran dan mengajarkannya."
                </h2>

                <p class="text-emerald-100 uppercase tracking-widest text-sm">
                    ( HR. Bukhari )
                </p>

            </div>

        </section>

        <!-- About -->
        <section class="py-32 px-6 bg-white">

            <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">

                <div>
                    <img
                        src="https://images.unsplash.com/photo-1509099836639-18ba1795216d?q=80&w=1200"
                        class="rounded-2xl shadow-xl"
                        alt="About">
                </div>

                <div>

                    <span class="text-amber-600 font-bold uppercase tracking-widest block mb-4">
                        Tentang Lembaga
                    </span>

                    <h2 class="font-headline text-4xl md:text-5xl text-emerald-900 mb-8">
                        Tradisi Keilmuan, Kedalaman Spiritual.
                    </h2>

                    <div class="space-y-6 text-gray-600 leading-relaxed text-lg">

                        <p>
                            Rumah Tahfidz Qur’an Al-Falah fokus pada pembinaan membaca, menghafal Al-Quran, dan penanaman nilai Islam.
                        </p>

                        <p>
                            Didukung lingkungan belajar yang nyaman serta tenaga pengajar berpengalaman untuk membentuk generasi Qur’ani.
                        </p>

                    </div>

                </div>

            </div>

        </section>

        <!-- Program -->
        <section class="py-32 px-6 bg-gray-100">

            <div class="max-w-7xl mx-auto">

                <div class="text-center mb-20">

                    <span class="text-amber-600 font-bold uppercase tracking-widest block mb-4">
                        Program Unggulan
                    </span>

                    <h2 class="font-headline text-4xl text-emerald-900">
                        Program di Al-Falah
                    </h2>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                    <div class="bg-white p-8 rounded-2xl editorial-shadow">

                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-3xl text-emerald-900">
                                auto_stories
                            </span>
                        </div>

                        <h3 class="font-headline text-2xl text-emerald-900 mb-4">
                            Kelas Tilawati
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            Fokus pada tartil dan tajwid dengan metode klasikal dan individual.
                        </p>

                    </div>

                    <div class="bg-white p-8 rounded-2xl editorial-shadow">

                        <div class="w-16 h-16 bg-emerald-900 rounded-full flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-3xl text-white">
                                menu_book
                            </span>
                        </div>

                        <h3 class="font-headline text-2xl text-emerald-900 mb-4">
                            Kelas Tahfidz
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            Program hafalan dan muroja'ah intensif Al-Quran.
                        </p>

                    </div>

                    <div class="bg-white p-8 rounded-2xl editorial-shadow">

                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-3xl text-emerald-900">
                                music_note
                            </span>
                        </div>

                        <h3 class="font-headline text-2xl text-emerald-900 mb-4">
                            Habsy
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            Seni musik Islami dan shalawat untuk santri.
                        </p>

                    </div>

                    <div class="bg-white p-8 rounded-2xl editorial-shadow">

                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-3xl text-emerald-900">
                                record_voice_over
                            </span>
                        </div>

                        <h3 class="font-headline text-2xl text-emerald-900 mb-4">
                            Tilawah
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            Seni baca Al-Quran dengan nagham yang indah.
                        </p>

                    </div>

                </div>

            </div>

        </section>

        <!-- Footer -->
        <footer class="bg-emerald-950 py-12 px-6">

            <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8">

                <div>

                    <h3 class="text-2xl font-headline text-amber-400 mb-4">
                        Al-Falah
                    </h3>

                    <p class="text-emerald-100/70 leading-relaxed">
                        Lembaga tahfidz terpercaya yang berfokus pada kualitas hafalan dan pembinaan karakter santri.
                    </p>

                </div>

                <div>

                    <h4 class="text-white font-semibold mb-4">
                        Tautan Cepat
                    </h4>

                    <ul class="space-y-2 text-emerald-100/70">

                        <li>
                            <a href="#" class="hover:text-white">
                                Program Pendidikan
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-white">
                                Pendaftaran
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-white">
                                Jadwal Kegiatan
                            </a>
                        </li>

                    </ul>

                </div>

                <div>

                    <h4 class="text-white font-semibold mb-4">
                        Kontak
                    </h4>

                    <div class="space-y-3 text-emerald-100/70">

                        <p>
                            Banjarmasin, Kalimantan Selatan
                        </p>

                        <p>
                            +62 813-3676-9945
                        </p>

                    </div>

                </div>

            </div>

            <div class="max-w-7xl mx-auto mt-10 pt-8 border-t border-emerald-900 text-center">

                <p class="text-sm text-emerald-100/40">
                    © 2026 Rumah Tahfidz Quran Al-Falah
                </p>

            </div>

        </footer>

    </main>

</body>

</html>