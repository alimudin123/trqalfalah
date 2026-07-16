<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @php
        $admin = auth()->user();
        $adminName = $admin?->name ?? 'Admin';
        $adminInitial = strtoupper(substr($adminName, 0, 1));

        $menus = [
            [
                'label' => 'Dashboard',
                'icon' => 'fa-solid fa-house',
                'url' => url('/admin/dashboard'),
                'active' => request()->is('admin/dashboard'),
            ],
            [
                'label' => 'Berita',
                'icon' => 'fa-solid fa-newspaper',
                'url' => url('/admin/berita'),
                'active' => request()->is('admin/berita*'),
            ],
            [
                'label' => 'Program Pembelajaran',
                'icon' => 'fa-solid fa-book-open',
                'url' => url('/admin/program'),
                'active' => request()->is('admin/program*'),
            ],
            [
                'label' => 'Tentang Kami',
                'icon' => 'fa-solid fa-circle-info',
                'url' => url('/admin/tentang-kami'),
                'active' => request()->is('admin/tentang-kami*'),
            ],
        ];
    @endphp

    <style>
        :root {
            --bg-main: #fff7ed;
            --bg-sidebar: #fffaf3;
            --primary: #b45309;
            --primary-dark: #7c2d12;
            --primary-soft: #fed7aa;
            --accent: #d97706;
            --text-dark: #3b2414;
            --text-muted: #8a6f5a;
            --border: #ead7c2;
            --shadow: 0 8px 22px rgba(124, 45, 18, 0.12);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: var(--bg-main);
            color: var(--text-dark);
        }

        .admin-wrapper {
            min-height: 100vh;
            display: flex;
        }

        .sidebar {
            width: 285px;
            height: 100vh;
            background: var(--bg-sidebar);
            position: fixed;
            top: 0;
            left: 0;
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 24px 20px;
            box-shadow: 4px 0 18px rgba(124, 45, 18, 0.08);
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 42px;
        }

        .logo img {
            width: 70px;
            height: 70px;
            object-fit: contain;
        }

        .logo h5 {
            font-size: 15px;
            line-height: 1.4;
            font-weight: 700;
            margin: 0;
            color: var(--primary-dark);
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .menu-link,
        .logout-button {
            width: 100%;
            text-decoration: none;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 16px;
            border-radius: 14px;
            font-size: 15px;
            font-weight: 500;
            transition: 0.25s ease;
            border: 1px solid transparent;
            background: transparent;
            cursor: pointer;
            text-align: left;
        }

        .menu-link i,
        .logout-button i {
            width: 22px;
            font-size: 17px;
            color: var(--primary);
        }

        .menu-link:hover,
        .logout-button:hover {
            background: #ffedd5;
            color: var(--primary-dark);
            border-color: var(--primary-soft);
            transform: translateX(4px);
        }

        .menu-link.active {
            background: linear-gradient(135deg, #fed7aa, #fdba74);
            color: var(--primary-dark);
            border-color: #f59e0b;
            box-shadow: 0 5px 14px rgba(217, 119, 6, 0.22);
        }

        .menu-link.active i {
            color: var(--primary-dark);
        }

        .logout-form {
            margin: 0;
        }

        .main {
            width: 100%;
            min-height: 100vh;
            margin-left: 285px;
            background: var(--bg-main);
        }

        .topbar {
            height: 95px;
            background: var(--bg-sidebar);
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 34px;
            box-shadow: 0 4px 18px rgba(124, 45, 18, 0.07);
        }

        .topbar h1 {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-dark);
            margin: 0;
            letter-spacing: 0.5px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #fff7ed;
            border: 1px solid var(--border);
            padding: 9px 14px;
            border-radius: 50px;
        }

        .profile-circle {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #d97706, #92400e);
            color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 700;
            font-size: 20px;
        }

        .profile strong {
            color: var(--primary-dark);
            font-size: 14px;
        }

        .profile small {
            color: var(--text-muted);
            font-size: 12px;
        }

        .content-area {
            padding: 34px;
        }

        .card {
            border: 1px solid var(--border);
            border-radius: 18px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .card-header {
            background: #ffedd5;
            border-bottom: 1px solid var(--border);
            color: var(--primary-dark);
            font-weight: 700;
        }

        .btn-primary,
        .btn-success {
            background: var(--primary);
            border-color: var(--primary);
            border-radius: 12px;
            font-weight: 600;
            padding: 10px 18px;
        }

        .btn-primary:hover,
        .btn-success:hover {
            background: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .form-control {
            border-radius: 12px;
            border: 1px solid var(--border);
            padding: 11px 14px;
        }

        .form-control:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 0.2rem rgba(217, 119, 6, 0.18);
        }

        .admin-footer {
            text-align: center;
            margin-top: 45px;
            color: var(--text-muted);
            font-size: 14px;
        }

        @media (max-width: 992px) {
            .admin-wrapper {
                display: block;
            }

            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main {
                margin-left: 0;
            }

            .topbar {
                height: auto;
                padding: 20px;
                gap: 15px;
                align-items: flex-start;
                flex-direction: column;
            }

            .content-area {
                padding: 20px;
            }
        }

        @media (max-width: 576px) {
            .logo img {
                width: 58px;
                height: 58px;
            }

            .logo h5 {
                font-size: 13px;
            }

            .topbar h1 {
                font-size: 22px;
            }

            .profile {
                width: 100%;
            }
        }
    </style>

    @stack('style')
</head>

<body>

    <div class="admin-wrapper">

        {{-- SIDEBAR --}}
        <aside class="sidebar">

            <div>
                {{-- LOGO --}}
                <div class="logo">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="Logo Rumah Tahfidz">

                    <h5>
                        Rumah Tahfidz <br>
                        Qur'an Al-Falah
                    </h5>
                </div>

                {{-- MENU --}}
                <nav class="menu">
                    @foreach ($menus as $menu)
                        <a href="{{ $menu['url'] }}"
                           class="menu-link {{ $menu['active'] ? 'active' : '' }}">
                            <i class="{{ $menu['icon'] }}"></i>
                            <span>{{ $menu['label'] }}</span>
                        </a>
                    @endforeach
                </nav>
            </div>

            {{-- LOGOUT --}}
            <div class="menu">
                <form action="{{ route('logout') }}" method="POST" class="logout-form">
                    @csrf

                    <button type="submit" class="logout-button">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>

        </aside>

        {{-- MAIN --}}
        <main class="main">

            {{-- TOPBAR --}}
            <header class="topbar">
                <h1>@yield('page-title', 'Admin Dashboard')</h1>

                <div class="profile">
                    <div class="profile-circle">
                        {{ $adminInitial }}
                    </div>

                    <div>
                        <strong>{{ $adminName }}</strong><br>
                        <small>Administrator</small>
                    </div>
                </div>
            </header>

            {{-- CONTENT --}}
            <section class="content-area">
                @yield('content')

                <footer class="admin-footer">
                    © {{ date('Y') }} Rumah Tahfidz Qur'an Al-Falah. All rights reserved.
                </footer>
            </section>

        </main>

    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('script')

</body>

</html>