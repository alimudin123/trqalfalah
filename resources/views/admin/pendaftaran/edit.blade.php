@extends('layouts.app1')

@section('title', 'Edit Data Pendaftar')

@section('page-title', 'Edit Data Pendaftar')

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

    .form-control, .form-select {
        border: 1px solid #ead7c2;
        border-radius: 16px;
        padding: 14px 18px;
        font-size: 15px;
        color: #3b2414;
        background: #fffaf3;
    }

    .form-control:focus, .form-select:focus {
        border-color: #d97706;
        box-shadow: 0 0 0 0.2rem rgba(217, 119, 6, 0.18);
        background: #ffffff;
    }

    textarea.form-control {
        min-height: 120px;
        resize: vertical;
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
        padding: 14px 28px;
        border-radius: 16px;
        font-weight: 700;
        transition: 0.25s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-back:hover {
        background: #ffedd5;
        color: #7c2d12;
        transform: translateY(-2px);
    }

    .btn-save {
        background: linear-gradient(135deg, #b45309, #7c2d12);
        border: none;
        color: #ffffff;
        padding: 14px 34px;
        border-radius: 16px;
        font-weight: 700;
        transition: 0.25s ease;
        box-shadow: 0 8px 20px rgba(124, 45, 18, 0.24);
    }

    .btn-save:hover {
        background: linear-gradient(135deg, #d97706, #b45309);
        transform: translateY(-2px);
        box-shadow: 0 10px 24px rgba(124, 45, 18, 0.32);
    }

    .section-title {
        font-size: 18px;
        font-weight: 700;
        color: #7c2d12;
        border-bottom: 2px solid #fed7aa;
        padding-bottom: 8px;
        margin-top: 24px;
        margin-bottom: 20px;
    }
</style>
@endpush

@section('content')
<div class="mb-4">
    <a href="{{ route('admin.pendaftaran.index') }}" class="btn-back">
        <i class="fa-solid fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="form-card">
    <div class="form-header">
        <h3>Edit Data Pendaftar</h3>
        <p>Silakan ubah data pendaftar sesuai kebutuhan.</p>
    </div>

    <div class="form-body">
        {{-- Alert Sukses --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 rounded-4 p-4 mb-4" role="alert" style="background-color: #d1e7dd; color: #0f5132;">
                <strong>Berhasil!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Alert Error --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show border-0 rounded-4 p-4 mb-4" role="alert" style="background-color: #f8d7da; color: #842029;">
                <strong class="d-block mb-2">Pendaftaran gagal diperbarui. Silakan periksa kembali form Anda:</strong>
                <ul class="list-disc list-inside text-sm mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('admin.pendaftaran.update', $pendaftaran) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row g-4">
                <div class="col-12">
                    <h5 class="section-title">Data Santri</h5>
                </div>

                {{-- Nama Santri --}}
                <div class="col-md-8 col-12">
                    <label class="form-label">Nama Santri Baru <span class="text-danger">*</span></label>
                    <input type="text" name="nama_santri" value="{{ old('nama_santri', $pendaftaran->nama_santri) }}" required
                        class="form-control @error('nama_santri') is-invalid @enderror">
                    @error('nama_santri')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Jenis Kelamin --}}
                <div class="col-md-4 col-12">
                    <label class="form-label d-block">Jenis Kelamin <span class="text-danger">*</span></label>
                    <div class="d-flex gap-4 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_l" value="Laki-Laki" required
                                {{ old('jenis_kelamin', $pendaftaran->jenis_kelamin) == 'Laki-Laki' ? 'checked' : '' }}>
                            <label class="form-check-label" for="jk_l">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_p" value="Perempuan"
                                {{ old('jenis_kelamin', $pendaftaran->jenis_kelamin) == 'Perempuan' ? 'checked' : '' }}>
                            <label class="form-check-label" for="jk_p">Perempuan</label>
                        </div>
                    </div>
                    @error('jenis_kelamin')
                        <div class="text-danger mt-1" style="font-size: 0.875em;">{{ $message }}</div>
                    @enderror
                </div>

                {{-- NIK --}}
                <div class="col-md-4 col-12">
                    <label class="form-label">NIK <span class="text-danger">*</span></label>
                    <input type="text" name="nik" value="{{ old('nik', $pendaftaran->nik) }}" required
                        class="form-control @error('nik') is-invalid @enderror">
                    @error('nik')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Tempat Lahir --}}
                <div class="col-md-4 col-12">
                    <label class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                    <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $pendaftaran->tempat_lahir) }}" required
                        class="form-control @error('tempat_lahir') is-invalid @enderror">
                    @error('tempat_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Tanggal Lahir --}}
                <div class="col-md-4 col-12">
                    <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                    <input type="date" name="tanggal_lahir" 
                        value="{{ old('tanggal_lahir', $pendaftaran->tanggal_lahir) }}" required
                        class="form-control @error('tanggal_lahir') is-invalid @enderror">
                    @error('tanggal_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Asal Sekolah --}}
                <div class="col-12">
                    <label class="form-label">Asal Sekolah (Sekolah Pagi) <span class="text-danger">*</span></label>
                    <input type="text" name="asal_sekolah" value="{{ old('asal_sekolah', $pendaftaran->asal_sekolah) }}" required
                        class="form-control @error('asal_sekolah') is-invalid @enderror">
                    @error('asal_sekolah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <h5 class="section-title">Data Orang Tua / Wali</h5>
                </div>

                {{-- Nama Ayah --}}
                <div class="col-md-4 col-12">
                    <label class="form-label">Nama Ayah <span class="text-danger">*</span></label>
                    <input type="text" name="nama_ayah" value="{{ old('nama_ayah', $pendaftaran->nama_ayah) }}" required
                        class="form-control @error('nama_ayah') is-invalid @enderror">
                    @error('nama_ayah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- HP Ayah --}}
                <div class="col-md-4 col-12">
                    <label class="form-label">No HP Ayah <span class="text-danger">*</span></label>
                    <input type="text" name="hp_ayah" value="{{ old('hp_ayah', $pendaftaran->hp_ayah) }}" required
                        class="form-control @error('hp_ayah') is-invalid @enderror">
                    @error('hp_ayah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Pekerjaan Ayah --}}
                <div class="col-md-4 col-12">
                    <label class="form-label">Pekerjaan Ayah <span class="text-danger">*</span></label>
                    <input type="text" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah', $pendaftaran->pekerjaan_ayah) }}" required
                        class="form-control @error('pekerjaan_ayah') is-invalid @enderror">
                    @error('pekerjaan_ayah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Nama Ibu --}}
                <div class="col-md-4 col-12">
                    <label class="form-label">Nama Ibu <span class="text-danger">*</span></label>
                    <input type="text" name="nama_ibu" value="{{ old('nama_ibu', $pendaftaran->nama_ibu) }}" required
                        class="form-control @error('nama_ibu') is-invalid @enderror">
                    @error('nama_ibu')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- HP Ibu --}}
                <div class="col-md-4 col-12">
                    <label class="form-label">No HP / WA Ibu <span class="text-danger">*</span></label>
                    <input type="text" name="hp_ibu" value="{{ old('hp_ibu', $pendaftaran->hp_ibu) }}" required
                        class="form-control @error('hp_ibu') is-invalid @enderror">
                    @error('hp_ibu')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Pekerjaan Ibu --}}
                <div class="col-md-4 col-12">
                    <label class="form-label">Pekerjaan Ibu <span class="text-danger">*</span></label>
                    <input type="text" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu', $pendaftaran->pekerjaan_ibu) }}" required
                        class="form-control @error('pekerjaan_ibu') is-invalid @enderror">
                    @error('pekerjaan_ibu')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Nama Wali --}}
                <div class="col-12">
                    <label class="form-label">Nama Wali <span class="text-muted" style="font-weight: 500;">(Opsional)</span></label>
                    <input type="text" name="nama_wali" value="{{ old('nama_wali', $pendaftaran->nama_wali) }}"
                        class="form-control @error('nama_wali') is-invalid @enderror">
                    @error('nama_wali')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <h5 class="section-title">Alamat & Lainnya</h5>
                </div>

                {{-- Alamat --}}
                <div class="col-12">
                    <label class="form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                    <textarea name="alamat" rows="3" required
                        class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat', $pendaftaran->alamat) }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Kritik Saran --}}
                <div class="col-12">
                    <label class="form-label">Kritik / Saran <span class="text-muted" style="font-weight: 500;">(Opsional)</span></label>
                    <textarea name="kritik_saran" rows="3"
                        class="form-control @error('kritik_saran') is-invalid @enderror">{{ old('kritik_saran', $pendaftaran->kritik_saran) }}</textarea>
                    @error('kritik_saran')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Status --}}
                <div class="col-12">
                    <label class="form-label">Status Pendaftaran <span class="text-danger">*</span></label>
                    <select name="status" class="form-select @error('status') is-invalid @enderror">
                        <option value="Menunggu" {{ old('status', $pendaftaran->status) == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                        <option value="Diterima" {{ old('status', $pendaftaran->status) == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                        <option value="Ditolak" {{ old('status', $pendaftaran->status) == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="btn-wrapper">
                <button type="submit" class="btn-save">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection