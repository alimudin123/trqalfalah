<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $program->nama_program }}</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fffaf0;
            color: #1f1f1f;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(18, 55, 42, 0.12);
        }

        .back-link {
            display: inline-block;
            margin-bottom: 25px;
            color: #12372a;
            font-weight: 600;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .program-image {
            width: 100%;
            max-height: 430px;
            object-fit: cover;
            border-radius: 16px;
            margin-bottom: 30px;
            background: #f7efe1;
        }

        h1 {
            color: #12372a;
            font-size: 36px;
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .program-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 28px;
        }

        .badge {
            display: inline-block;
            padding: 9px 16px;
            border-radius: 999px;
            font-size: 14px;
            font-weight: 700;
        }

        .badge-green {
            background: #d8eadf;
            color: #12372a;
        }

        .badge-red {
            background: #f8d7da;
            color: #842029;
        }

        .badge-gold {
            background: #fff1d6;
            color: #9a6418;
        }

        .section-title {
            font-size: 20px;
            color: #12372a;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .description {
            font-size: 17px;
            line-height: 1.9;
            color: #333;
            text-align: justify;
            white-space: pre-line;
        }

        @media (max-width: 768px) {
            .container {
                margin: 30px 16px;
                padding: 22px;
            }

            h1 {
                font-size: 28px;
            }

            .description {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <a href="{{ url()->previous() }}" class="back-link">
            ← Kembali
        </a>

        @if(!empty($program->gambar))
            <img
                src="{{ asset('storage/' . $program->gambar) }}"
                alt="{{ $program->nama_program }}"
                class="program-image">
        @endif

        <h1>{{ $program->nama_program }}</h1>

        <div class="program-meta">
            @if(!empty($program->durasi))
                <span class="badge badge-gold">
                    Durasi: {{ $program->durasi }}
                </span>
            @endif

            @if(!empty($program->jumlah_santri))
                <span class="badge badge-green">
                    {{ $program->jumlah_santri }} Santri
                </span>
            @endif

            @if(isset($program->status))
                <span class="badge {{ $program->status == 'aktif' ? 'badge-green' : 'badge-red' }}">
                    {{ $program->status == 'aktif' ? 'Aktif' : 'Nonaktif' }}
                </span>
            @endif
        </div>

        <div class="section-title">
            Deskripsi Program
        </div>

        <div class="description">
            {{ $program->deskripsi }}
        </div>

    </div>

</body>

</html>