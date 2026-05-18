@extends('admin.app')

@section('title', 'Tambah Berita')

@section('page-title', 'Tambah Berita')

@push('style')

<link rel="stylesheet" href="{{ asset('css/berita.css') }}">

@endpush

@section('content')

<div class="form-box">

    <h3 class="mb-4">
        Form Tambah Berita
    </h3>





    @if ($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif





    <form 
        action="{{ route('berita.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf

        <div class="mb-4">

            <label class="form-label">
                Judul Berita
            </label>

            <input 
                type="text"
                name="judul"
                class="form-control"
                placeholder="Masukkan judul berita"
                value="{{ old('judul') }}"
            >

        </div>





        <div class="mb-4">

            <label class="form-label">
                Isi Berita
            </label>

            <textarea 
                name="isi"
                class="form-control"
                placeholder="Masukkan isi berita"
            >{{ old('isi') }}</textarea>

        </div>





        <div class="mb-4">

            <label class="form-label">
                Upload Gambar
            </label>

            <input 
                type="file"
                name="gambar"
                class="form-control"
            >

        </div>





        <div class="mt-4">

            <a 
                href="{{ route('berita.index') }}"
                class="btn-back"
            >
                Kembali
            </a>

            <button 
                type="submit"
                class="btn-submit"
            >
                Simpan Berita
            </button>

        </div>

    </form>

</div>

@endsection