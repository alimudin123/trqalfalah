@extends('layouts.app1')

@section('title', 'Tambah Berita')

@section('page-title', 'Tambah Berita')

@push('style')
<style>
    .form-card {
        background: #ffffff;
        border: 1px solid #ead7c2;
        border-radius: 26px;
        box-shadow: 0 12px 32px rgba(124, 45, 18, 0.10);
        overflow: hidden;
    }

    .form-header {
        background: linear-gradient(135deg, #fffaf3, #ffedd5);
        padding: 32px 38px;
        border-bottom: 1px solid #ead7c2;
    }

    .form-header h3 {
        font-size: 32px;
        font-weight: 800;
        color: #7c2d12;
        margin-bottom: 8px;
    }

    .form-header p {
        color: #8a6f5a;
        margin: 0;
        font-size: 15px;
    }

    .form-body {
        padding: 38px;
    }

    .form-label {
        font-weight: 700;
        color: #3b2414;
        margin-bottom: 10px;
    }

    .form-control {
        border: 1px solid #ead7c2;
        border-radius: 16px;
        padding: 14px 18px;
        font-size: 15px;
        color: #3b2414;
        background: #fffaf3;
    }

    .form-control:focus {
        border-color: #d97706;
        box-shadow: 0 0 0 0.2rem rgba(217, 119, 6, 0.18);
        background: #ffffff;
    }

    textarea.form-control {
        min-height: 230px;
        resize: vertical;
    }

    .upload-box {
        background: #fffaf3;
        border: 1px dashed #d97706;
        border-radius: 18px;
        padding: 20px;
    }

    .btn-wrapper {
        display: flex;
        justify-content: flex-end;
        gap: 12px;
        margin-top: 30px;
    }

    .btn-back {
        background: #fff7ed;
        border: 1px solid #ead7c2;
        color: #7c2d12;
        border-radius: 14px;
        padding: 12px 22px;
        font-weight: 700;
        text-decoration: none;
    }

    .btn-back:hover {
        background: #ffedd5;
        color: #7c2d12;
    }

    .btn-submit {
        background: linear-gradient(135deg, #b45309, #d97706);
        border: none;
        color: #ffffff;
        border-radius: 14px;
        padding: 12px 24px;
        font-weight: 700;
        box-shadow: 0 8px 18px rgba(180, 83, 9, 0.25);
    }

    .btn-submit:hover {
        background: linear-gradient(135deg, #7c2d12, #b45309);
        color: #ffffff;
    }

    .alert-danger {
        border-radius: 16px;
        border: 1px solid #f5c2c7;
        background: #f8d7da;
        color: #842029;
    }

    @media (max-width: 768px) {
        .form-header,
        .form-body {
            padding: 26px;
        }

        .form-header h3 {
            font-size: 26px;
        }

        .btn-wrapper {
            flex-direction: column;
        }

        .btn-back,
        .btn-submit {
            width: 100%;
            text-align: center;
        }
    }
</style>
@endpush

@section('content')

<div class="form-card">

    <div class="form-header">
        <h3>Form Tambah Berita</h3>
        <p>Tambahkan berita atau kegiatan terbaru Rumah Tahfidz Qur'an Al-Falah.</p>
    </div>

    <div class="form-body">

        @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <strong>Terjadi kesalahan!</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="judul" class="form-label">Judul Berita</label>
                <input
                    type="text"
                    name="judul"
                    id="judul"
                    class="form-control"
                    placeholder="Masukkan judul berita"
                    value="{{ old('judul') }}"
                    required>
            </div>

            <div class="mb-4">
                <label for="isi" class="form-label">Isi Berita</label>
                <textarea
                    name="isi"
                    id="isi"
                    class="form-control"
                    placeholder="Masukkan isi berita"
                    required>{{ old('isi') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="gambar" class="form-label">Upload Gambar</label>
                <div class="upload-box">
                    <input
                        type="file"
                        name="gambar"
                        id="gambar"
                        class="form-control"
                        accept="image/*"
                        required>
                </div>
            </div>

            <div class="btn-wrapper">
                <a href="{{ route('berita.index') }}" class="btn-back">
                    Kembali
                </a>

                <button type="submit" class="btn-submit">
                    <i class="fa-solid fa-save me-1"></i>
                    Simpan Berita
                </button>
            </div>

        </form>

    </div>

</div>

@endsection