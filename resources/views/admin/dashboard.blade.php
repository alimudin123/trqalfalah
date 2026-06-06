@extends('layouts.app1')

@section('title', 'Dashboard Admin')
@section('page-title', 'Admin Dashboard')

@push('style')
<style>
    /*
    |--------------------------------------------------------------------------
    | DASHBOARD WRAPPER
    |--------------------------------------------------------------------------
    */

    .dashboard-wrapper {
        display: flex;
        flex-direction: column;
        gap: 34px;
    }

    /*
    |--------------------------------------------------------------------------
    | WELCOME CARD
    |--------------------------------------------------------------------------
    */

    .dashboard-card {
        background: linear-gradient(135deg, #fffaf3, #ffedd5);
        border: 1px solid #ead7c2;
        border-radius: 24px;
        padding: 45px;
        box-shadow: 0 12px 30px rgba(124, 45, 18, 0.12);
        position: relative;
        overflow: hidden;
    }

    .dashboard-card::before {
        content: "";
        position: absolute;
        width: 190px;
        height: 190px;
        background: rgba(180, 83, 9, 0.12);
        border-radius: 50%;
        top: -70px;
        right: -70px;
    }

    .dashboard-card::after {
        content: "";
        position: absolute;
        width: 120px;
        height: 120px;
        background: rgba(217, 119, 6, 0.12);
        border-radius: 50%;
        bottom: -45px;
        left: -45px;
    }

    .dashboard-content {
        position: relative;
        z-index: 2;
    }

    .dashboard-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #fed7aa;
        color: #7c2d12;
        padding: 8px 16px;
        border-radius: 999px;
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 22px;
    }

    .dashboard-card h1 {
        font-size: 42px;
        font-weight: 800;
        color: #7c2d12;
        margin-bottom: 14px;
        line-height: 1.25;
    }

    .dashboard-card p {
        font-size: 18px;
        color: #8a6f5a;
        max-width: 760px;
        line-height: 1.8;
        margin-bottom: 0;
    }

    /*
    |--------------------------------------------------------------------------
    | STATISTIK
    |--------------------------------------------------------------------------
    */

    .dashboard-stats {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 22px;
        margin-top: 35px;
    }

    .stat-box {
        background: #ffffff;
        border: 1px solid #ead7c2;
        border-radius: 20px;
        padding: 24px;
        box-shadow: 0 8px 22px rgba(124, 45, 18, 0.08);
        transition: 0.25s ease;
    }

    .stat-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 14px 30px rgba(124, 45, 18, 0.14);
    }

    .stat-icon {
        width: 54px;
        height: 54px;
        border-radius: 16px;
        background: #ffedd5;
        color: #b45309;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 16px;
    }

    .stat-box small {
        color: #8a6f5a;
        font-weight: 600;
    }

    .stat-box h3 {
        font-size: 26px;
        font-weight: 800;
        color: #7c2d12;
        margin: 4px 0 0;
    }

    /*
    |--------------------------------------------------------------------------
    | KONTEN TERBARU
    |--------------------------------------------------------------------------
    */

    .latest-card {
        background: #ffffff;
        border: 1px solid #ead7c2;
        border-radius: 24px;
        box-shadow: 0 12px 30px rgba(124, 45, 18, 0.10);
        overflow: hidden;
    }

    .latest-header {
        padding: 28px 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #fffaf3;
        border-bottom: 1px solid #ead7c2;
    }

    .latest-header h2 {
        font-size: 28px;
        font-weight: 800;
        color: #7c2d12;
        margin: 0;
    }

    .latest-header a {
        color: #b45309;
        text-decoration: none;
        font-weight: 700;
    }

    .latest-header a:hover {
        color: #7c2d12;
        text-decoration: underline;
    }

    .latest-table {
        width: 100%;
        border-collapse: collapse;
    }

    .latest-table thead {
        background: #ffedd5;
    }

    .latest-table th {
        padding: 18px 28px;
        font-size: 15px;
        font-weight: 800;
        color: #7c2d12;
        text-align: left;
    }

    .latest-table td {
        padding: 20px 28px;
        font-size: 15px;
        color: #3b2414;
        border-bottom: 1px solid #f1dfce;
        vertical-align: middle;
    }

    .latest-table tbody tr:hover {
        background: #fff7ed;
    }

    .latest-table tbody tr:last-child td {
        border-bottom: none;
    }

    .category-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 95px;
        padding: 7px 14px;
        background: #fed7aa;
        color: #7c2d12;
        border-radius: 999px;
        font-size: 13px;
        font-weight: 700;
    }

    .action-buttons {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 10px;
    }

    .action-buttons a,
    .action-buttons button {
        width: 38px;
        height: 38px;
        border: none;
        border-radius: 12px;
        background: #fff7ed;
        color: #7c2d12;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        transition: 0.25s ease;
        cursor: pointer;
        text-decoration: none;
    }

    .action-buttons a:hover {
        background: #f59e0b;
        color: #ffffff;
    }

    .action-buttons button:hover {
        background: #dc3545;
        color: #ffffff;
    }

    .empty-content {
        text-align: center;
        padding: 38px 20px;
        color: #8a6f5a;
        font-weight: 600;
    }

    /*
    |--------------------------------------------------------------------------
    | RESPONSIVE
    |--------------------------------------------------------------------------
    */

    @media (max-width: 992px) {
        .dashboard-stats {
            grid-template-columns: repeat(2, 1fr);
        }

        .dashboard-card h1 {
            font-size: 34px;
        }
    }

    @media (max-width: 768px) {
        .latest-card {
            overflow-x: auto;
        }

        .latest-table {
            min-width: 720px;
        }

        .latest-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
    }

    @media (max-width: 576px) {
        .dashboard-card {
            padding: 30px 24px;
        }

        .dashboard-card h1 {
            font-size: 28px;
        }

        .dashboard-card p {
            font-size: 15px;
        }

        .dashboard-stats {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')

<div class="dashboard-wrapper">

    {{-- WELCOME --}}
    <div class="dashboard-card">
        <div class="dashboard-content">

            <div class="dashboard-badge">
                <i class="fa-solid fa-mosque"></i>
                Panel Administrator
            </div>

            <h1>Assalamualaikum Admin</h1>

            <p>
                Selamat datang di dashboard admin Rumah Tahfidz Qur'an Al-Falah.
                Kelola data berita, program pembelajaran, fasilitas, dan informasi lembaga
                melalui halaman ini.
            </p>

            {{-- STATISTIK --}}
            <div class="dashboard-stats">

                <div class="stat-box">
                    <div class="stat-icon">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                    <small>Total Berita</small>
                    <h3>{{ $totalBerita ?? 0 }}</h3>
                </div>

                <div class="stat-box">
                    <div class="stat-icon">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <small>Total Program</small>
                    <h3>{{ $totalProgram ?? 0 }}</h3>
                </div>

                <div class="stat-box">
                    <div class="stat-icon">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                    <small>Total Santri</small>
                    <h3>{{ $totalSantri ?? 0 }}</h3>
                </div>

                <div class="stat-box">
                    <div class="stat-icon">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <small>Total Pengajar</small>
                    <h3>{{ $totalPengajar ?? 0 }}</h3>
                </div>

            </div>

        </div>
    </div>

    {{-- KONTEN TERBARU --}}
    <div class="latest-card">

        <div class="latest-header">
            <h2>Konten Terbaru</h2>
            <a href="{{ url('/admin/berita') }}">Lihat Semua</a>
        </div>

        <table class="latest-table">
            <thead>
                <tr>
                    <th>Judul Konten</th>
                    <th>Kategori</th>
                    <th style="text-align: right;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($kontenTerbaru ?? [] as $konten)
                    <tr>
                        <td>{{ $konten->judul ?? 'Konten' }}</td>

                        <td>
                            <span class="category-badge">
                                {{ $konten->kategori ?? 'Berita' }}
                            </span>
                        </td>

                        <td>
                            <div class="action-buttons">
                                <a href="{{ $konten->edit_url ?? '#' }}" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form action="{{ $konten->delete_url ?? '#' }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        title="Hapus"
                                        onclick="return confirm('Yakin ingin menghapus konten ini?')">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <div class="empty-content">
                                Belum ada konten terbaru.
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

</div>

@endsection