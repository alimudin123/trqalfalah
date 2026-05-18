@extends('layouts.app1')

@section('title', 'Edit Program')

@section('page-title', 'Edit Program')

@push('style')
<link rel="stylesheet" href="{{ asset('css/program.css') }}">
@endpush

@section('content')

<div class="form-wrapper">

    <div class="form-header">

        <div>
            <h3 class="form-title">
                Edit Program Pembelajaran
            </h3>

            <p class="form-subtitle">
                Ubah data program pembelajaran
                Rumah Tahfidz Qur'an Al-Falah
            </p>
        </div>

    </div>





    @if($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif





    <form 
        action="{{ route('program.update', $program->id) }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf
        @method('PUT')





        <div class="row">

            <div class="col-md-6 mb-4">

                <label class="form-label">
                    Nama Program
                </label>

                <input 
                    type="text"
                    name="nama_program"
                    class="form-control"
                    value="{{ old('nama_program', $program->nama_program) }}"
                    placeholder="Masukkan nama program"
                >

            </div>





            <div class="col-md-6 mb-4">

                <label class="form-label">
                    Durasi
                </label>

                <input 
                    type="text"
                    name="durasi"
                    class="form-control"
                    value="{{ old('durasi', $program->durasi) }}"
                    placeholder="Contoh: 1 Tahun"
                >

            </div>

        </div>





        <div class="row">

            <div class="col-md-6 mb-4">

                <label class="form-label">
                    Jadwal
                </label>

                <input 
                    type="text"
                    name="jadwal"
                    class="form-control"
                    value="{{ old('jadwal', $program->jadwal) }}"
                    placeholder="Contoh: Senin - Jumat"
                >

            </div>





            <div class="col-md-6 mb-4">

                <label class="form-label">
                    Jumlah Santri
                </label>

                <input 
                    type="number"
                    name="jumlah_santri"
                    class="form-control"
                    value="{{ old('jumlah_santri', $program->jumlah_santri) }}"
                    placeholder="Masukkan jumlah santri"
                >

            </div>

        </div>





        <div class="mb-4">

            <label class="form-label">
                Deskripsi Program
            </label>

            <textarea 
                name="deskripsi"
                class="form-control"
                placeholder="Masukkan deskripsi program"
            >{{ old('deskripsi', $program->deskripsi) }}</textarea>

        </div>





        <div class="mb-4">

            <label class="form-label">
                Gambar Saat Ini
            </label>

            <br>

            @if($program->gambar)

                <img 
                    src="{{ asset('storage/' . $program->gambar) }}"
                    class="preview-img"
                >

            @else

                <img 
                    src="https://via.placeholder.com/150"
                    class="preview-img"
                >

            @endif

        </div>





        <div class="mb-4">

            <label class="form-label">
                Upload Gambar Baru
            </label>

            <input 
                type="file"
                name="gambar"
                class="form-control"
            >

        </div>





        <div class="form-action">

            <a 
                href="{{ route('program.index') }}"
                class="btn-back"
            >
                Kembali
            </a>

            <button 
                type="submit"
                class="btn-submit"
            >
                Update Program
            </button>

        </div>

    </form>

</div>

@endsection 