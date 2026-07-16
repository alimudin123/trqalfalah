{{-- resources/views/admin/pendaftaran/index.blade.php --}}

@extends('layouts.app1')

@section('title', 'Data Pendaftar')

@section('page-title', 'Data Pendaftar Santri')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-3">

            <h5 class="mb-0">
                Daftar Pendaftar Santri
            </h5>

            <div class="d-flex gap-2">

                <form action="{{ route('admin.pendaftaran.index') }}" method="GET">

                    <div class="input-group">

                        <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                            placeholder="Cari Nama / NIK">

                        <button class="btn btn-primary">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>

                    </div>

                </form>

                <a href="{{ route('admin.pendaftaran.pdf', ['search' => request('search')]) }}" class="btn btn-danger">
                    <i class="fa-solid fa-file-pdf"></i>
                    Download PDF
                </a>

            </div>

        </div>

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-warning">

                        <tr>

                            <th width="60">No</th>

                            <th>Nama Santri</th>

                            <th>Jenis Kelamin</th>

                            <th>NIK</th>

                            <th>Asal Sekolah</th>

                            <th>Nama Ayah</th>

                            <th>HP Ayah</th>

                            <th>Status</th>

                            <th width="180" class="text-center">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($pendaftarans as $pendaftaran)

                            <tr>

                                <td>
                                    {{ $loop->iteration + ($pendaftarans->firstItem() ?? 0) - 1 }}
                                </td>

                                <td>

                                    <strong>
                                        {{ $pendaftaran->nama_santri }}
                                    </strong>

                                </td>

                                <td>
                                    {{ $pendaftaran->jenis_kelamin }}
                                </td>

                                <td>
                                    {{ $pendaftaran->nik }}
                                </td>

                                <td>
                                    {{ $pendaftaran->asal_sekolah }}
                                </td>

                                <td>
                                    {{ $pendaftaran->nama_ayah }}
                                </td>

                                <td>
                                    {{ $pendaftaran->hp_ayah }}
                                </td>

                                <td>

                                    @if($pendaftaran->status == 'Menunggu')

                                        <span class="badge bg-warning text-dark">
                                            Menunggu
                                        </span>

                                    @elseif($pendaftaran->status == 'Diterima')

                                        <span class="badge bg-success">
                                            Diterima
                                        </span>

                                    @else

                                        <span class="badge bg-danger">
                                            Ditolak
                                        </span>

                                    @endif

                                </td>

                                <td class="text-center">

                                    <a href="{{ route('admin.pendaftaran.show', $pendaftaran) }}" class="btn btn-info btn-sm">

                                        <i class="fa-solid fa-eye"></i>

                                    </a>

                                    <a href="{{ route('admin.pendaftaran.edit', $pendaftaran) }}" class="btn btn-warning btn-sm">

                                        <i class="fa-solid fa-pen"></i>

                                    </a>

                                    <form action="{{ route('admin.pendaftaran.destroy', $pendaftaran) }}" method="POST"
                                        class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">

                                            <i class="fa-solid fa-trash"></i>

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="9" class="text-center py-5">

                                    <i class="fa-solid fa-folder-open fa-3x text-secondary mb-3"></i>

                                    <h5>
                                        Belum ada data pendaftar
                                    </h5>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

        @if($pendaftarans->hasPages())

            <div class="card-footer">

                {{ $pendaftarans->links() }}

            </div>

        @endif

    </div>

@endsection