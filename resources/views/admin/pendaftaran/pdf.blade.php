<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Pendaftar Santri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #333;
            padding: 20px;
        }

        h2,
        h4 {
            text-align: center;
            margin: 5px 0;
            color: #12372a;
        }

        hr {
            border: 1px solid #12372a;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #ffedd5;
            color: #7c2d12;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #fffaf3;
        }

        .text-center {
            text-align: center;
        }

        .badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 10px;
            font-weight: bold;
        }

        .bg-warning {
            background-color: #ffc107;
            color: #000;
        }

        .bg-success {
            background-color: #198754;
            color: #fff;
        }

        .bg-danger {
            background-color: #dc3545;
            color: #fff;
        }

        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="no-print" style="margin-bottom: 20px; text-align: right;">
        <button onclick="window.print()"
            style="padding: 10px 20px; background-color: #198754; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
            Cetak / Simpan PDF
        </button>
    </div>

    <h2>RUMAH TAHFIDZ QUR'AN AL-FALAH</h2>
    <h4>LAPORAN DATA PENDAFTAR SANTRI BARU</h4>
    <p class="text-center" style="margin-bottom: 20px;">Dicetak pada: {{ date('d F Y, H:i') }} WITA</p>
    <hr>

    <table>
        <thead>
            <tr>
                <th width="40">No</th>
                <th>Nama Santri</th>
                <th>Jenis Kelamin</th>
                <th>NIK</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Asal Sekolah</th>
                <th>Nama Ayah</th>
                <th>No. HP Ayah</th>
                <th>Pekerjaan Ayah</th>
                <th>Nama Ibu</th>
                <th>No. HP Ibu</th>
                <th>Pekerjaan Ibu</th>
                <th>Alamat</th>
                <th>Nama Wali</th>
                <th>Kritik / Saran</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @forelse($pendaftarans as $index => $pendaftaran)

                    <tr>

                        <td class="text-center">
                            {{ $index + 1 }}
                        </td>

                        <td>
                            <strong>{{ $pendaftaran->nama_santri }}</strong>
                        </td>

                        <td>
                            {{ $pendaftaran->jenis_kelamin }}
                        </td>

                        <td>
                            {{ $pendaftaran->nik }}
                        </td>

                        <td>
                            {{ $pendaftaran->tempat_lahir }}<br>
                            {{ \Carbon\Carbon::parse($pendaftaran->tanggal_lahir)->format('d-m-Y') }}
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
                            {{ $pendaftaran->pekerjaan_ayah }}
                        </td>

                        <td>
                            {{ $pendaftaran->nama_ibu }}
                        </td>

                        <td>
                            {{ $pendaftaran->hp_ibu }}
                        </td>

                        <td>
                            {{ $pendaftaran->pekerjaan_ibu }}
                        </td>

                        <td style="min-width:250px">
                            {{ $pendaftaran->alamat }}
                        </td>

                        <td>
                            {{ $pendaftaran->nama_wali ?: '-' }}
                        </td>

                        <td style="min-width:250px">
                            {{ $pendaftaran->kritik_saran ?: '-' }}
                        </td>

                        <td class="text-center">

                            <span class="badge
                                {{ $pendaftaran->status == 'Menunggu'
                ? 'bg-warning'
                : ($pendaftaran->status == 'Diterima'
                    ? 'bg-success'
                    : 'bg-danger') }}">

                                {{ $pendaftaran->status }}

                            </span>

                        </td>

                    </tr>

            @empty

                <tr>
                    <td colspan="16" class="text-center">
                        Belum ada data pendaftar.
                    </td>
                </tr>

            @endforelse
        </tbody>
    </table>
</body>

</html>