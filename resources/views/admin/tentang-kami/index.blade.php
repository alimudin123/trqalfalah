@extends('layouts.app1')

@section('title', 'Tentang Kami')
@section('page-title', 'Tentang Kami')

@section('content')

@if(session('success'))
<div class="alert alert-success mb-4">
    {{ session('success') }}
</div>
@endif

@php
$activeTab = session('active_tab', 'sejarah');
@endphp

<div class="row g-4">

    {{-- MENU KIRI --}}
    <div class="col-lg-3 col-md-4">
        <div class="card">
            <div class="card-body">

                <div class="nav flex-column nav-pills gap-3" role="tablist">

                    <button
                        class="nav-link text-start {{ $activeTab == 'sejarah' ? 'active' : '' }}"
                        data-bs-toggle="pill"
                        data-bs-target="#sejarah"
                        type="button">
                        <i class="fa-solid fa-pen-to-square me-2"></i>
                        Sejarah
                    </button>

                    <button
                        class="nav-link text-start {{ $activeTab == 'visi-misi' ? 'active' : '' }}"
                        data-bs-toggle="pill"
                        data-bs-target="#visi-misi"
                        type="button">
                        <i class="fa-solid fa-bullseye me-2"></i>
                        Visi & Misi
                    </button>

                    <button
                        class="nav-link text-start {{ $activeTab == 'fasilitas' ? 'active' : '' }}"
                        data-bs-toggle="pill"
                        data-bs-target="#fasilitas"
                        type="button">
                        <i class="fa-solid fa-building me-2"></i>
                        Fasilitas
                    </button>

                    <button
                        class="nav-link text-start {{ $activeTab == 'pengajar' ? 'active' : '' }}"
                        data-bs-toggle="pill"
                        data-bs-target="#pengajar"
                        type="button">
                        <i class="fa-solid fa-user-graduate me-2"></i>
                        Data Pengajar
                    </button>

                </div>

            </div>
        </div>
    </div>


    {{-- KONTEN KANAN --}}
    <div class="col-lg-9 col-md-8">
        <div class="tab-content">

            {{-- SEJARAH --}}
            <div
                class="tab-pane fade {{ $activeTab == 'sejarah' ? 'show active' : '' }}"
                id="sejarah">

                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Sejarah</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('tentang-kami.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Isi Sejarah</label>
                                <textarea
                                    name="sejarah"
                                    class="form-control"
                                    rows="12"
                                    placeholder="Tuliskan sejarah di sini...">{{ $tentang->sejarah ?? '' }}</textarea>
                            </div>

                            <input type="hidden" name="visi_misi" value="{{ $tentang->visi_misi ?? '' }}">

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa-solid fa-floppy-disk me-2"></i>
                                    Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


            {{-- VISI MISI --}}
            <div
                class="tab-pane fade {{ $activeTab == 'visi-misi' ? 'show active' : '' }}"
                id="visi-misi">

                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Visi & Misi</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('tentang-kami.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Isi Visi & Misi</label>
                                <textarea
                                    name="visi_misi"
                                    class="form-control"
                                    rows="12"
                                    placeholder="Tuliskan visi dan misi di sini...">{{ $tentang->visi_misi ?? '' }}</textarea>
                            </div>

                            <input type="hidden" name="sejarah" value="{{ $tentang->sejarah ?? '' }}">

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa-solid fa-floppy-disk me-2"></i>
                                    Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


            {{-- FASILITAS --}}
            <div
                class="tab-pane fade {{ $activeTab == 'fasilitas' ? 'show active' : '' }}"
                id="fasilitas">

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Tambah Fasilitas</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('fasilitas.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Deskripsi Fasilitas</label>
                                <input
                                    type="text"
                                    name="deskripsi"
                                    class="form-control"
                                    placeholder="Masukkan deskripsi fasilitas">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Foto Fasilitas</label>
                                <input
                                    type="file"
                                    name="foto"
                                    class="form-control">
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa-solid fa-plus me-2"></i>
                                    Tambah Fasilitas
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Data Fasilitas</h5>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th width="10%">No</th>
                                        <th width="20%">Foto</th>
                                        <th>Deskripsi</th>
                                        <th width="18%">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($fasilitas ?? [] as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            @if(!empty($item->foto))
                                            <img
                                                src="{{ asset('storage/' . $item->foto) }}"
                                                width="90"
                                                class="rounded"
                                                alt="Foto Fasilitas">
                                            @else
                                            <span class="text-muted">Tidak ada foto</span>
                                            @endif
                                        </td>

                                        <td>{{ $item->deskripsi ?? '-' }}</td>

                                        <td>
                                            <button
                                                type="button"
                                                class="btn btn-warning btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editFasilitas{{ $item->id }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </button>

                                            <form
                                                action="{{ route('fasilitas.destroy', $item->id) }}"
                                                method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Yakin ingin menghapus fasilitas ini?')">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa-solid fa-trash"></i>
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">
                                            Belum ada data fasilitas
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            @foreach($fasilitas ?? [] as $item)
                            <div class="modal fade" id="editFasilitas{{ $item->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <form action="{{ route('fasilitas.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Fasilitas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Deskripsi Fasilitas</label>
                                                    <input
                                                        type="text"
                                                        name="deskripsi"
                                                        class="form-control"
                                                        value="{{ $item->deskripsi }}"
                                                        required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Foto Fasilitas</label>
                                                    <input type="file" name="foto" class="form-control">

                                                    @if(!empty($item->foto))
                                                    <div class="mt-2">
                                                        <img
                                                            src="{{ asset('storage/' . $item->foto) }}"
                                                            width="100"
                                                            class="rounded"
                                                            alt="Foto Fasilitas">
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Batal
                                                </button>

                                                <button type="submit" class="btn btn-primary">
                                                    Simpan Perubahan
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>


            {{-- DATA PENGAJAR --}}
            <div
                class="tab-pane fade {{ $activeTab == 'pengajar' ? 'show active' : '' }}"
                id="pengajar">

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Tambah Pengajar</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('pengajar.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input
                                    type="text"
                                    name="nama_lengkap"
                                    class="form-control"
                                    placeholder="Masukkan nama lengkap">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jabatan</label>
                                <input
                                    type="text"
                                    name="jabatan"
                                    class="form-control"
                                    placeholder="Masukkan jabatan">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">No Telepon</label>
                                <input
                                    type="text"
                                    name="no_telepon"
                                    class="form-control"
                                    placeholder="Masukkan nomor telepon">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Foto Pengajar</label>
                                <input
                                    type="file"
                                    name="foto"
                                    class="form-control">
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa-solid fa-plus me-2"></i>
                                    Tambah Pengajar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Data Pengajar</h5>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th width="10%">No</th>
                                        <th width="20%">Foto</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>No Telepon</th>
                                        <th width="18%">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($pengajar ?? [] as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            @if(!empty($item->foto))
                                            <img
                                                src="{{ asset('storage/' . $item->foto) }}"
                                                width="90"
                                                class="rounded"
                                                alt="Foto Pengajar">
                                            @else
                                            <span class="text-muted">Tidak ada foto</span>
                                            @endif
                                        </td>

                                        <td>{{ $item->nama_lengkap ?? '-' }}</td>
                                        <td>{{ $item->jabatan ?? '-' }}</td>
                                        <td>{{ $item->no_telepon ?? '-' }}</td>

                                        <td>
                                            <button
                                                type="button"
                                                class="btn btn-warning btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editPengajar{{ $item->id }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </button>

                                            <form
                                                action="{{ route('pengajar.destroy', $item->id) }}"
                                                method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Yakin ingin menghapus pengajar ini?')">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa-solid fa-trash"></i>
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">
                                            Belum ada data pengajar
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            @foreach($pengajar ?? [] as $item)
                            <div class="modal fade" id="editPengajar{{ $item->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <form action="{{ route('pengajar.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Pengajar</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Nama Lengkap</label>
                                                    <input
                                                        type="text"
                                                        name="nama_lengkap"
                                                        class="form-control"
                                                        value="{{ $item->nama_lengkap }}"
                                                        required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Jabatan</label>
                                                    <input
                                                        type="text"
                                                        name="jabatan"
                                                        class="form-control"
                                                        value="{{ $item->jabatan }}"
                                                        required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">No Telepon</label>
                                                    <input
                                                        type="text"
                                                        name="no_telepon"
                                                        class="form-control"
                                                        value="{{ $item->no_telepon }}"
                                                        required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Foto Pengajar</label>
                                                    <input type="file" name="foto" class="form-control">

                                                    @if(!empty($item->foto))
                                                    <div class="mt-2">
                                                        <img
                                                            src="{{ asset('storage/' . $item->foto) }}"
                                                            width="100"
                                                            class="rounded"
                                                            alt="Foto Pengajar">
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Batal
                                                </button>

                                                <button type="submit" class="btn btn-primary">
                                                    Simpan Perubahan
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection