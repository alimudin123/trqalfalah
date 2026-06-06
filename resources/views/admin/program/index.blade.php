@extends('layouts.app1')

@section('title', 'Program Pembelajaran')
@section('page-title', 'Manajemen Program')

@push('style')
<style>
    .page-card {
        border: 0;
        border-radius: 24px;
        box-shadow: 0 10px 28px rgba(124, 45, 18, 0.10);
    }

    .page-title {
        font-weight: 800;
        color: #7c2d12;
    }

    .page-description {
        color: #8a6f5a;
        font-size: 14px;
    }

    .summary-card {
        border: 0;
        border-radius: 20px;
        box-shadow: 0 8px 22px rgba(124, 45, 18, 0.08);
        height: 100%;
    }

    .summary-icon {
        width: 60px;
        height: 60px;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #dcfce7;
        color: #15803d;
        font-size: 24px;
        flex-shrink: 0;
    }

    .program-card {
        border: 0;
        border-radius: 22px;
        box-shadow: 0 8px 24px rgba(124, 45, 18, 0.09);
        height: 100%;
        transition: 0.25s ease;
    }

    .program-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 14px 34px rgba(124, 45, 18, 0.14);
    }

    .program-image {
        width: 72px;
        height: 72px;
        border-radius: 18px;
        object-fit: cover;
        flex-shrink: 0;
    }

    .program-image-placeholder {
        width: 72px;
        height: 72px;
        border-radius: 18px;
        background: #ffedd5;
        color: #7c2d12;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        flex-shrink: 0;
    }

    .program-name {
        font-size: 18px;
        font-weight: 800;
        color: #7c2d12;
        margin-bottom: 6px;
    }

    .program-desc {
        font-size: 13px;
        color: #8a6f5a;
        line-height: 1.6;
        margin-bottom: 0;
    }

    .program-duration {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        border-radius: 999px;
        padding: 8px 14px;
        background: #fff7ed;
        border: 1px solid #ead7c2;
        color: #3b2414;
        font-size: 13px;
        font-weight: 700;
    }

    .program-actions {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 8px;
    }

    .btn-status {
        border-radius: 999px;
        padding: 8px 16px;
        font-weight: 700;
        font-size: 13px;
    }

    .btn-icon {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .empty-box {
        border-radius: 20px;
        border: 1px dashed #d6bfa8;
        background: #fffaf3;
        padding: 45px 25px;
        text-align: center;
        color: #8a6f5a;
    }

    @media (max-width: 768px) {
        .page-header {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 18px;
        }

        .page-header .btn {
            width: 100%;
        }
    }
</style>
@endpush

@section('content')

<div class="card page-card">
    <div class="card-body p-4">

        {{-- HEADER --}}
        <div class="page-header d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="page-title mb-2">
                    Program Pembelajaran
                </h3>

                <p class="page-description mb-0">
                    Kelola dan tinjau daftar program pembelajaran Rumah Tahfidz Qur'an Al-Falah.
                </p>
            </div>

            <a href="{{ route('program.create') }}" class="btn btn-success rounded-3 px-4 py-2">
                <i class="fa-solid fa-plus me-1"></i>
                Tambah Program Baru
            </a>
        </div>

        {{-- ALERT --}}
        @if(session('success'))
        <div class="alert alert-success rounded-4 mb-4">
            {{ session('success') }}
        </div>
        @endif

        {{-- SUMMARY --}}
        <div class="row mb-4">
            <div class="col-md-6 mb-3">
                <div class="card summary-card">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="summary-icon">
                            <i class="fa-solid fa-book-quran"></i>
                        </div>

                        <div>
                            <small class="text-muted">Total Program</small>
                            <h4 class="fw-bold mb-0">
                                {{ $totalProgram ?? 0 }} Program
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card summary-card">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="summary-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>

                        <div>
                            <small class="text-muted">Total Santri</small>
                            <h4 class="fw-bold mb-0">
                                {{ $totalSantri ?? 0 }} Santri
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- LIST PROGRAM --}}
        <div class="row">
            @forelse($program as $item)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card program-card">
                    <div class="card-body p-4">

                        {{-- INFO PROGRAM --}}
                        <div class="d-flex align-items-center gap-3 mb-4">
                            @if(!empty($item->gambar))
                            <img
                                src="{{ asset('storage/' . $item->gambar) }}"
                                alt="{{ $item->nama_program }}"
                                class="program-image">
                            @else
                            <div class="program-image-placeholder">
                                <i class="fa-solid fa-book-open"></i>
                            </div>
                            @endif

                            <div>
                                <h5 class="program-name">
                                    {{ $item->nama_program }}
                                </h5>

                                <p class="program-desc">
                                    {{ \Illuminate\Support\Str::limit($item->deskripsi, 45) }}
                                </p>
                            </div>
                        </div>

                        {{-- DURASI --}}
                        <div class="mb-3">
                            <span class="program-duration">
                                <i class="fa-regular fa-clock"></i>
                                {{ $item->durasi ?? 'Durasi belum diisi' }}
                            </span>
                        </div>

                        {{-- ACTION --}}
                        <div class="program-actions">

                            <form action="{{ route('program.toggle-status', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <button
                                    type="submit"
                                    class="btn btn-status {{ $item->status == 'aktif' ? 'btn-success' : 'btn-secondary' }}">
                                    {{ $item->status == 'aktif' ? 'Aktif' : 'Nonaktif' }}
                                </button>
                            </form>

                            <a
                                href="{{ route('program.show', $item->id) }}"
                                class="btn btn-light border btn-icon"
                                title="Detail">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a
                                href="{{ route('program.edit', $item->id) }}"
                                class="btn btn-warning text-white btn-icon"
                                title="Edit">
                                <i class="fa-solid fa-pen"></i>
                            </a>

                            <form action="{{ route('program.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-icon"
                                    title="Hapus"
                                    onclick="return confirm('Yakin ingin menghapus program ini?')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="empty-box">
                    <h5 class="fw-bold mb-2">
                        Data Program Belum Ada
                    </h5>

                    <p class="mb-0">
                        Silakan tambahkan program pembelajaran baru.
                    </p>
                </div>
            </div>
            @endforelse
        </div>

    </div>
</div>

@endsection