<!-- Sidebar -->
<div class="sidebar">

    <div>

        <!-- Logo -->
        <div class="logo">

            <img src="{{ asset('logo.png') }}" alt="Logo">

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

            <a href="/admin/berita" class="{{ request()->is('admin/berita*') ? 'active' : '' }}">
                <i class="fa-solid fa-newspaper"></i>
                Berita
            </a>

            <a href="/admin/program" class="{{ request()->is('admin/program') ? 'active' : '' }}">
                <i class="fa-solid fa-book-open"></i>
                Program Pembelajaran
            </a>

            <a href="/admin/galeri" class="{{ request()->is('admin/galeri*') ? 'active' : '' }}">
                <i class="fa-solid fa-image"></i>
                Galeri
            </a>

            <a href="/admin/tentang-kami" class="{{ request()->is('admin/tentang-kami*') ? 'active' : '' }}">
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