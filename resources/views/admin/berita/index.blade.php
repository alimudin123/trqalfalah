@extends('layouts.app1 ')

@section('title', 'Berita')

@section('page-title', 'Kelola Berita')

@push('style')
<link rel="stylesheet" href="{{ asset('css/berita.css') }}">
@endpush

@section('content')

<div class="content-box">

    <div class="top-action">

        <div>
            <h3>Data Berita</h3>
            <p class="text-muted">
                Kelola berita Rumah Tahfidz Qur'an Al-Falah
            </p>
        </div>

        <a href="{{ route('berita.create') }}" class="btn-add">
            <i class="fa-solid fa-plus"></i>
            Tambah Berita
        </a>

    </div>





    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif





    <div class="table-responsive">

        <table class="table align-middle">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($berita as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>

                        @if($item->gambar)

                            <img 
                                src="{{ asset('storage/' . $item->gambar) }}" 
                                class="berita-img"
                            >

                        @else

                            <img 
                                src="https://via.placeholder.com/80"
                                class="berita-img"
                            >

                        @endif

                    </td>

                    <td>
                        <strong>{{ $item->judul }}</strong>
                    </td>

                    <td>
                        {{ date('d M Y', strtotime($item->tanggal)) }}
                    </td>

                    <td>

                        <a 
                            href="{{ route('berita.edit', $item->id) }}"
                            class="btn btn-action btn-edit"
                        >
                            <i class="fa-solid fa-pen"></i>
                        </a>

                        <form 
                            action="{{ route('berita.destroy', $item->id) }}"
                            method="POST"
                            class="d-inline"
                        >

                            @csrf
                            @method('DELETE')

                            <button 
                                type="submit"
                                class="btn btn-action btn-delete"
                                onclick="return confirm('Yakin ingin menghapus berita ini?')"
                            >
                                <i class="fa-solid fa-trash"></i>
                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5" class="text-center">
                        Data berita belum tersedia
                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection