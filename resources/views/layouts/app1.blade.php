<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f5f7fb;
        }

        /*
        |--------------------------------------------------------------------------
        | Sidebar
        |--------------------------------------------------------------------------
        */

        .sidebar{
            width:280px;
            height:100vh;
            background:#fff;
            position:fixed;
            left:0;
            top:0;
            border-right:1px solid #e5e7eb;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            padding:20px;
        }

        .logo{
            display:flex;
            align-items:center;
            gap:15px;
            margin-bottom:40px;
        }

        .logo img{
            width:60px;
        }

        .logo h5{
            font-size:18px;
            font-weight:600;
            margin:0;
        }

        .menu a{
            text-decoration:none;
            color:#374151;
            display:flex;
            align-items:center;
            gap:15px;
            padding:15px 18px;
            border-radius:12px;
            margin-bottom:15px;
            transition:0.3s;
            font-size:16px;
        }

        .menu a:hover,
        .menu a.active{
            background:#e7f7ef;
            color:#0f9d58;
        }

        /*
        |--------------------------------------------------------------------------
        | Main Content
        |--------------------------------------------------------------------------
        */

        .main{
            margin-left:280px;
            padding:30px;
        }

        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:30px;
        }

        .profile{
            display:flex;
            align-items:center;
            gap:10px;
        }

        .profile-circle{
            width:45px;
            height:45px;
            background:#d1d5db;
            border-radius:50%;
            display:flex;
            justify-content:center;
            align-items:center;
            font-weight:bold;
        }

        /*
        |--------------------------------------------------------------------------
        | Footer
        |--------------------------------------------------------------------------
        */

        footer{
            text-align:center;
            margin-top:40px;
            color:#6b7280;
        }

    </style>

    @stack('style')

</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">

        <div>

            <!-- Logo -->
            <div class="logo">

                <img src="{{ asset('public/logo.png') }}" alt="Logo">

                <h5>
                    Rumah Tahfidz <br>
                    Qur'an Al-Falah
                </h5>

            </div>

            <!-- Menu -->
            <div class="menu">

                <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>

                <a href="/admin/berita" class="{{ request()->is('admin/berita') ? 'active' : '' }}">
                    <i class="fa-solid fa-newspaper"></i>
                    Berita
                </a>

                <a href="/admin/program" class="{{ request()->is('admin/program') ? 'active' : '' }}">
                    <i class="fa-solid fa-book-open"></i>
                    Program Pembelajaran
                </a>

                <a href="/admin/galeri" class="{{ request()->is('admin/galeri') ? 'active' : '' }}">
                    <i class="fa-solid fa-image"></i>
                    Galeri
                </a>

                <a href="/admin/tentang-kami" class="{{ request()->is('admin/tentang-kami') ? 'active' : '' }}">
                    <i class="fa-solid fa-circle-info"></i>
                    Tentang Kami
                </a>

            </div>

        </div>

        <!-- Logout -->
        <div class="menu">

            <a href="/logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>

        </div>

    </div>





    <!-- Main -->
    <div class="main">

        <!-- Topbar -->
        <div class="topbar">

            <h1>@yield('page-title')</h1>

            <div class="profile">

                <div class="profile-circle">
                    A
                </div>

                <div>
                    <strong>Admin</strong><br>
                    <small>Administrator</small>
                </div>

            </div>

        </div>





        <!-- Content -->
        @yield('content')





        <!-- Footer -->
        <footer>
            © 2025 Rumah Tahfidz Qur'an Al-Falah. All rights reserved.
        </footer>

    </div>

    @stack('script')

</body>
</html>