@extends('admin.app')

@section('title', 'Edit Berita')

@section('page-title', 'Edit Berita')

@push('style')
<link rel="stylesheet" href="{{ asset('css/berita.css') }}">

@endpush

@section('content')

<div class="form-box">

    <h3 class="mb-4">
        Form Edit Berita
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
        action="{{ route('berita.update', $berita->id) }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf
        @method('PUT')





        <div class="mb-4">

            <label class="form-label">
                Judul Berita
            </label>

            <input 
                type="text"
                name="judul"
                class="form-control"
                value="{{ old('judul', $berita->judul) }}"
            >

        </div>





        <div class="mb-4">

            <label class="form-label">
                Isi Berita
            </label>

            <textarea 
                name="isi"
                class="form-control"
            >{{ old('isi', $berita->isi) }}</textarea>

        </div>





        <div class="mb-4">

            <label class="form-label">
                Gambar Lama
            </label>

            <br>

            @if($berita->gambar)

                <img 
                    src="{{ asset('storage/' . $berita->gambar) }}"
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
                Update Berita
            </button>

        </div>

    </form>

</div>

@endsection