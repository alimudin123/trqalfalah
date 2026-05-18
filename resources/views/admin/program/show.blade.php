@extends('layouts.app1')

@section('title', 'Detail Program')

@section('page-title', 'Detail Program')

@section('content')

<div class="card border-0 shadow-sm rounded-4">

    <div class="card-body p-4">

        <div class="row g-4">

            <div class="col-lg-5">

                @if($program->gambar)

                    <img 
                        src="{{ asset('storage/' . $program->gambar) }}"
                        alt="{{ $program->nama_program }}"
                        class="img-fluid rounded-4 w-100"
                        style="height:450px; object-fit:cover;"
                    >

                @else

                    <img 
                        src="https://via.placeholder.com/500x300"
                        alt="Program"
                        class="img-fluid rounded-4 w-100"
                        style="height:450px; object-fit:cover;"
                    >

                @endif

            </div>





            <div class="col-lg-7">

                <div class="d-flex justify-content-between align-items-start mb-4">

                    <div>

                        <h2 class="fw-bold mb-2">
                            {{ $program->nama_program }}
                        </h2>

                        <p class="text-muted mb-0">
                            Program Pembelajaran Rumah Tahfidz Qur'an Al-Falah
                        </p>

                    </div>





                    @if($program->status == 'aktif')

                        <span class="badge bg-success px-3 py-2 rounded-pill">
                            Aktif
                        </span>

                    @else

                        <span class="badge bg-danger px-3 py-2 rounded-pill">
                            Nonaktif
                        </span>

                    @endif

                </div>





                <div class="row g-3 mb-4">

                    <div class="col-md-6">

                        <div class="border rounded-4 p-3 h-100">

                            <div class="d-flex align-items-center gap-3">

                                <div class="bg-success-subtle text-success rounded-3 d-flex justify-content-center align-items-center"
                                    style="width:50px; height:50px;">

                                    <i class="fa-solid fa-clock"></i>

                                </div>

                                <div>

                                    <small class="text-muted">
                                        Durasi
                                    </small>

                                    <h6 class="mb-0 fw-semibold">
                                        {{ $program->durasi }}
                                    </h6>

                                </div>

                            </div>

                        </div>

                    </div>





                    <div class="col-md-6">

                        <div class="border rounded-4 p-3 h-100">

                            <div class="d-flex align-items-center gap-3">

                                <div class="bg-success-subtle text-success rounded-3 d-flex justify-content-center align-items-center"
                                    style="width:50px; height:50px;">

                                    <i class="fa-solid fa-calendar-days"></i>

                                </div>

                                <div>

                                    <small class="text-muted">
                                        Jadwal
                                    </small>

                                    <h6 class="mb-0 fw-semibold">
                                        {{ $program->jadwal }}
                                    </h6>

                                </div>

                            </div>

                        </div>

                    </div>





                    <div class="col-md-6">

                        <div class="border rounded-4 p-3 h-100">

                            <div class="d-flex align-items-center gap-3">

                                <div class="bg-success-subtle text-success rounded-3 d-flex justify-content-center align-items-center"
                                    style="width:50px; height:50px;">

                                    <i class="fa-solid fa-book-quran"></i>

                                </div>

                                <div>

                                    <small class="text-muted">
                                        Target Hafalan
                                    </small>

                                    <h6 class="mb-0 fw-semibold">
                                        {{ $program->target_hafalan }}
                                    </h6>

                                </div>

                            </div>

                        </div>

                    </div>





                    <div class="col-md-6">

                        <div class="border rounded-4 p-3 h-100">

                            <div class="d-flex align-items-center gap-3">

                                <div class="bg-success-subtle text-success rounded-3 d-flex justify-content-center align-items-center"
                                    style="width:50px; height:50px;">

                                    <i class="fa-solid fa-users"></i>

                                </div>

                                <div>

                                    <small class="text-muted">
                                        Jumlah Santri
                                    </small>

                                    <h6 class="mb-0 fw-semibold">
                                        {{ $program->jumlah_santri }} Santri
                                    </h6>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>





                <div class="mb-4">

                    <h5 class="fw-bold mb-3">
                        Deskripsi Program
                    </h5>

                    <p class="text-muted lh-lg">
                        {{ $program->deskripsi }}
                    </p>

                </div>





                <div class="d-flex gap-3">

                    <a 
                        href="{{ route('program.index') }}"
                        class="btn btn-light border rounded-3 px-4 py-2"
                    >
                        Kembali
                    </a>





                    <a 
                        href="{{ route('program.edit', $program->id) }}"
                        class="btn btn-success rounded-3 px-4 py-2"
                    >
                        Edit Program
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection