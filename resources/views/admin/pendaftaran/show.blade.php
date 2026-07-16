@extends('layouts.app1')

@section('title', 'Detail Pendaftar')

@section('page-title', 'Detail Pendaftar Santri')

@push('style')
<style>
    .detail-card {
        background: #ffffff;
        border: 1px solid #ead7c2;
        border-radius: 26px;
        box-shadow: 0 12px 32px rgba(124, 45, 18, 0.10);
        overflow: hidden;
    }

    .detail-header {
        background: linear-gradient(135deg, #fffaf3, #ffedd5);
        padding: 32px 38px;
        border-bottom: 1px solid #ead7c2;
    }

    .detail-header h3 {
        font-size: 28px;
        font-weight: 800;
        color: #7c2d12;
        margin: 0;
    }

    .detail-body {
        padding: 38px;
    }

    .info-group {
        margin-bottom: 24px;
        background: #fffaf3;
        border: 1px solid #ead7c2;
        border-radius: 18px;
        padding: 20px;
    }

    .info-title {
        font-size: 14px;
        font-weight: 700;
        color: #8a6f5a;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 6px;
    }

    .info-value {
        font-size: 16px;
        font-weight: 600;
        color: #3b2414;
    }

    .section-title {
        font-size: 20px;
        font-weight: 700;
        color: #7c2d12;
        border-bottom: 2px solid #fed7aa;
        padding-bottom: 8px;
        margin-top: 10px;
        margin-bottom: 25px;
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

    .btn-edit {
        background: linear-gradient(135deg, #b45309, #7c2d12);
        border: none;
        color: #ffffff;
        padding: 14px 34px;
        border-radius: 16px;
        font-weight: 700;
        transition: 0.25s ease;
        box-shadow: 0 8px 20px rgba(124, 45, 18, 0.24);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-edit:hover {
        background: linear-gradient(135deg, #d97706, #b45309);
        transform: translateY(-2px);
        box-shadow: 0 10px 24px rgba(124, 45, 18, 0.32);
        color: #ffffff;
    }

    .badge-large {
        font-size: 15px;
        padding: 10px 20px;
        border-radius: 50px;
        font-weight: 700;
        display: inline-block;
    }
</style>
@endpush

@section('content')
<div class="mb-4 d-flex justify-content-between align-items-center">
    <a href="{{ route('admin.pendaftaran.index') }}" class="btn-back">
        <i class="fa-solid fa-arrow-left"></i> Kembali
    </a>
    <a href="{{ route('admin.pendaftaran.edit', $pendaftaran) }}" class="btn-edit">
        <i class="fa-solid fa-pen"></i> Edit Data
    </a>
</div>

<div class="detail-card">
    <div class="detail-header d-flex justify-content-between align-items-center flex-wrap gap-3">
        <div>
            <h3>{{ $pendaftaran->nama_santri }}</h3>
            <span class="text-muted">Pendaftaran Santri Baru</span>
        </div>
        <div>
            @if($pendaftaran->status == 'Menunggu')
                <span class="badge-large bg-warning text-dark">
                    <i class="fa-solid fa-clock"></i> Status: Menunggu
                </span>
            @elseif($pendaftaran->status == 'Diterima')
                <span class="badge-large bg-success text-white">
                    <i class="fa-solid fa-circle-check"></i> Status: Diterima
                </span>
            @else
                <span class="badge-large bg-danger text-white">
                    <i class="fa-solid fa-circle-xmark"></i> Status: Ditolak
                </span>
            @endif
        </div>
    </div>

    <div class="detail-body">
        <div class="row">
            {{-- DATA SANTRI --}}
            <div class="col-12">
                <h5 class="section-title"><i class="fa-solid fa-user-graduate me-2"></i> Data Santri</h5>
            </div>
            
            <div class="col-md-6 col-12">
                <div class="info-group">
                    <div class="info-title">Nama Lengkap</div>
                    <div class="info-value">{{ $pendaftaran->nama_santri }}</div>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="info-group">
                    <div class="info-title">Jenis Kelamin</div>
                    <div class="info-value">{{ $pendaftaran->jenis_kelamin }}</div>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="info-group">
                    <div class="info-title">NIK (Nomor Induk Kependudukan)</div>
                    <div class="info-value">{{ $pendaftaran->nik }}</div>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="info-group">
                    <div class="info-title">Tempat, Tanggal Lahir</div>
                    <div class="info-value">
                        {{ $pendaftaran->tempat_lahir }}, 
                        {{ is_string($pendaftaran->tanggal_lahir) ? \Carbon\Carbon::parse($pendaftaran->tanggal_lahir)->translatedFormat('d F Y') : optional($pendaftaran->tanggal_lahir)->translatedFormat('d F Y') }}
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="info-group">
                    <div class="info-title">Asal Sekolah</div>
                    <div class="info-value">{{ $pendaftaran->asal_sekolah }}</div>
                </div>
            </div>

            {{-- DATA ORANG TUA / WALI --}}
            <div class="col-12">
                <h5 class="section-title mt-4"><i class="fa-solid fa-users me-2"></i> Data Orang Tua / Wali</h5>
            </div>

            <div class="col-md-4 col-12">
                <div class="info-group">
                    <div class="info-title">Nama Ayah</div>
                    <div class="info-value">{{ $pendaftaran->nama_ayah }}</div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="info-group">
                    <div class="info-title">No. HP Ayah</div>
                    <div class="info-value">
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $pendaftaran->hp_ayah) }}" target="_blank" class="text-primary">
                            {{ $pendaftaran->hp_ayah }} <i class="fa-brands fa-whatsapp text-success ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="info-group">
                    <div class="info-title">Pekerjaan Ayah</div>
                    <div class="info-value">{{ $pendaftaran->pekerjaan_ayah }}</div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="info-group">
                    <div class="info-title">Nama Ibu</div>
                    <div class="info-value">{{ $pendaftaran->nama_ibu }}</div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="info-group">
                    <div class="info-title">No. HP Ibu</div>
                    <div class="info-value">
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $pendaftaran->hp_ibu) }}" target="_blank" class="text-primary">
                            {{ $pendaftaran->hp_ibu }} <i class="fa-brands fa-whatsapp text-success ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="info-group">
                    <div class="info-title">Pekerjaan Ibu</div>
                    <div class="info-value">{{ $pendaftaran->pekerjaan_ibu }}</div>
                </div>
            </div>

            <div class="col-12">
                <div class="info-group">
                    <div class="info-title">Nama Wali (Jika Ada)</div>
                    <div class="info-value">{{ $pendaftaran->nama_wali ?? '-' }}</div>
                </div>
            </div>

            {{-- ALAMAT & MASUKAN --}}
            <div class="col-12">
                <h5 class="section-title mt-4"><i class="fa-solid fa-map-location-dot me-2"></i> Alamat & Lainnya</h5>
            </div>

            <div class="col-12">
                <div class="info-group">
                    <div class="info-title">Alamat Lengkap</div>
                    <div class="info-value">{!! nl2br(e($pendaftaran->alamat)) !!}</div>
                </div>
            </div>

            <div class="col-12">
                <div class="info-group">
                    <div class="info-title">Kritik & Saran</div>
                    <div class="info-value">{!! nl2br(e($pendaftaran->kritik_saran)) ?? '-' !!}</div>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="info-group">
                    <div class="info-title">Tanggal Pendaftaran</div>
                    <div class="info-value">{{ $pendaftaran->created_at->translatedFormat('d F Y, H:i') }} WITA</div>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="info-group">
                    <div class="info-title">Terakhir Diperbarui</div>
                    <div class="info-value">{{ $pendaftaran->updated_at->translatedFormat('d F Y, H:i') }} WITA</div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
