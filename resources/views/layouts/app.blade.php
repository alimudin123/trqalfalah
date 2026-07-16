<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Rumah Tahfidz Qur\'an Al-Falah')</title>

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --primary: #12372a;
            --primary-dark: #0b241c;
            --primary-soft: #d8eadf;

            --secondary: #c88a2c;
            --secondary-dark: #9a6418;
            --secondary-soft: #fff1d6;

            --background: #fffaf0;
            --surface: #ffffff;
            --surface-soft: #f7efe1;

            --text-dark: #1f1f1f;
            --text-muted: #6f665c;

            --border: #ead9be;

            --shadow: 0 14px 35px rgba(18, 55, 42, .12);
            --shadow-soft: 0 8px 22px rgba(18, 55, 42, .08);

            --radius: 18px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--background);
            color: var(--text-dark);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /*
        |--------------------------------------------------------------------------
        | NAVBAR
        |--------------------------------------------------------------------------
        */

        .navbar {
            width: 100%;
            height: 88px;
            background: rgba(255, 250, 240, .96);
            backdrop-filter: blur(14px);
            display: grid;
            grid-template-columns: 320px 1fr 320px;
            align-items: center;
            padding: 0 48px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
            border-bottom: 1px solid var(--border);
            box-shadow: 0 8px 25px rgba(18, 55, 42, .08);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .logo-box {
            width: 70px;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-box img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-text {
            font-size: 15px;
            font-weight: 700;
            line-height: 1.25;
            color: var(--primary-dark);
        }

        .nav-menu {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 46px;
            font-size: 18px;
            font-weight: 700;
        }

        .nav-menu>a,
        .nav-item>a {
            position: relative;
            padding: 31px 0;
            transition: .25s;
        }

        .nav-menu>a::after,
        .nav-item>a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 23px;
            width: 0;
            height: 3px;
            background: var(--secondary);
            border-radius: 20px;
            transition: .25s;
        }

        .nav-menu>a:hover::after,
        .nav-item:hover>a::after {
            width: 100%;
        }

        .nav-menu>a:hover,
        .nav-item:hover>a {
            color: var(--secondary-dark);
        }

        .nav-item {
            position: relative;
        }

        .nav-item>a {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .dropdown {
            display: none;
            position: absolute;
            top: 76px;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .dropdown a {
            display: block;
            padding: 13px 16px;
            font-size: 14px;
            border-bottom: 1px solid #f1e3cc;
        }

        .dropdown a:last-child {
            border-bottom: none;
        }

        .dropdown a:hover {
            background: var(--secondary-soft);
            color: var(--secondary-dark);
            padding-left: 22px;
        }

        .nav-item:hover .dropdown {
            display: block;
        }

        .nav-spacer {
            width: 320px;
        }

        /*
        |--------------------------------------------------------------------------
        | CONTENT
        |--------------------------------------------------------------------------
        */

        main {
            padding-top: 88px;
            min-height: 100vh;
        }

        @media(max-width:992px) {

            .navbar {
                grid-template-columns: 220px 1fr;
                padding: 0 20px;
            }

            .nav-spacer {
                display: none;
            }

            .nav-menu {
                justify-content: flex-end;
                gap: 22px;
                font-size: 15px;
            }

        }

        @media(max-width:768px) {

            .navbar {
                display: block;
                height: auto;
                padding: 12px 16px;
            }

            .brand {
                justify-content: center;
                margin-bottom: 10px;
            }

            .nav-menu {
                overflow-x: auto;
                white-space: nowrap;
                justify-content: flex-start;
                gap: 20px;
                font-size: 15px;
            }

            .nav-menu::-webkit-scrollbar {
                display: none;
            }

            .dropdown {
                top: 38px;
            }

            main {
                padding-top: 120px;
            }

        }
    </style>

    @stack('style')
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar">

        <div class="brand">
            <a href="{{ url('/') }}" style="display:flex;align-items:center;gap:14px;">
                <div class="logo-box">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="Logo Rumah Tahfidz Al-Falah">
                </div>

                <div class="brand-text">
                    Rumah Tahfidz <br>
                    Qur'an Al-Falah
                </div>
            </a>
        </div>

        <div class="nav-menu">

            <a href="{{ url('/#beranda') }}">
                Beranda
            </a>

            <div class="nav-item">

                <a href="{{ url('/#tentang') }}">
                    Profil <span>▾</span>
                </a>

                <div class="dropdown">
                    <a href="{{ url('/#tentang') }}">Tentang Kami</a>
                    <a href="{{ url('/#visi-misi') }}">Visi Misi</a>
                    <a href="{{ url('/#fasilitas') }}">Fasilitas</a>
                    <a href="{{ url('/#pengajar') }}">Data Pengajar</a>
                </div>

            </div>

            <a href="{{ url('/#program') }}">
                Program
            </a>

            <a href="{{ url('/#berita') }}">
                Berita
            </a>

            <a href="{{ url('/#kontak') }}">
                Kontak
            </a>

        </div>

        <div class="nav-spacer"></div>

    </nav>

    {{-- CONTENT --}}
    <main>
        @yield('content')
    </main>

    @stack('script')

</body>

</html>