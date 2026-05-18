@extends('layouts.app1')

@section('title', 'Program Pembelajaran')

@section('page-title', 'Manajemen Program')

@section('content')

<div class="card border-0 shadow-sm rounded-4">

    <div class="card-body p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>

                <h3 class="fw-bold mb-2">
                    Program Pembelajaran
                </h3>

                <p class="text-muted mb-0">
                    Kelola dan tinjau daftar program pembelajaran
                    Rumah Tahfidz Qur'an Al-Falah
                </p>

            </div>





            <a 
                href="{{ route('program.create') }}"
                class="btn btn-success rounded-3 px-4 py-2"
            >
                <i class="fa-solid fa-plus"></i>
                Tambah Program Baru
            </a>

        </div>





        @if(session('success'))

            <div class="alert alert-success rounded-4">
                {{ session('success') }}
            </div>

        @endif





        <div class="row mb-4">

            <div class="col-md-6 mb-3">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body d-flex align-items-center gap-3">

                        <div class="bg-success-subtle text-success rounded-4 d-flex justify-content-center align-items-center"
                            style="width:60px; height:60px;">

                            <i class="fa-solid fa-book-quran fs-4"></i>

                        </div>

                        <div>

                            <small class="text-muted">
                                Total Program
                            </small>

                            <h4 class="fw-bold mb-0">
                                {{ $totalProgram }} Program
                            </h4>

                        </div>

                    </div>

                </div>

            </div>





            <div class="col-md-6 mb-3">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body d-flex align-items-center gap-3">

                        <div class="bg-success-subtle text-success rounded-4 d-flex justify-content-center align-items-center"
                            style="width:60px; height:60px;">

                            <i class="fa-solid fa-users fs-4"></i>

                        </div>

                        <div>

                            <small class="text-muted">
                                Total Santri
                            </small>

                            <h4 class="fw-bold mb-0">
                                {{ $totalSantri }} Santri
                            </h4>

                        </div>

                    </div>

                </div>

            </div>

        </div>





        <div class="row">

            @forelse($program as $item)

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="card border-0 shadow-sm rounded-4 h-100">

                        <div class="card-body">

                            <div class="d-flex align-items-center gap-3 mb-4">

                                @if($item->gambar)

                                    <img 
                                        src="{{ asset('storage/' . $item->gambar) }}"
                                        class="rounded-4"
                                        style="width:70px; height:70px; object-fit:cover;"
                                    >

                                @else

                                    <img 
                                        src="https://via.placeholder.com/70"
                                        class="rounded-4"
                                    >

                                @endif





                                <div>

                                    <h5 class="fw-bold mb-1">
                                        {{ $item->nama_program }}
                                    </h5>

                                    <small class="text-muted">
                                        {{ Str::limit($item->deskripsi, 35) }}
                                    </small>

                                </div>

                            </div>





                            <div class="d-flex justify-content-between align-items-center">

                                <span class="badge bg-light text-dark border rounded-pill px-3 py-2">
                                    {{ $item->durasi }}
                                </span>





                                <div class="d-flex align-items-center gap-2">

                                    <form 
                                        action="{{ route('program.toggle-status', $item->id) }}"
                                        method="POST"
                                    >

                                        @csrf
                                        @method('PUT')

                                        <button 
                                            type="submit"
                                            class="btn {{ $item->status == 'aktif' ? 'btn-success' : 'btn-secondary' }} rounded-pill px-3"
                                        >
                                            {{ $item->status == 'aktif' ? 'ON' : 'OFF' }}
                                        </button>

                                    </form>





                                    <a 
                                        href="{{ route('program.show', $item->id) }}"
                                        class="btn btn-light border rounded-3"
                                    >
                                        <i class="fa-solid fa-eye"></i>
                                    </a>





                                    <a 
                                        href="{{ route('program.edit', $item->id) }}"
                                        class="btn btn-warning rounded-3 text-white"
                                    >
                                        <i class="fa-solid fa-pen"></i>
                                    </a>





                                    <form 
                                        action="{{ route('program.destroy', $item->id) }}"
                                        method="POST"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button 
                                            type="submit"
                                            class="btn btn-danger rounded-3"
                                            onclick="return confirm('Yakin ingin menghapus program ini?')"
                                        >
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="alert alert-secondary rounded-4 text-center">

                        <h5 class="mb-2">
                            Data Program Belum Ada
                        </h5>

                        <p class="mb-0">
                            Silakan tambahkan program pembelajaran baru
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</div>

@endsection