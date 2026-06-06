<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }}</title>

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

        h1 {
            color: #12372a;
            font-size: 36px;
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .tanggal {
            color: #6f665c;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .gambar-berita {
            width: 100%;
            max-height: 430px;
            object-fit: cover;
            border-radius: 16px;
            margin-bottom: 30px;
        }

        .isi-berita {
            font-size: 17px;
            line-height: 1.9;
            color: #333;
            text-align: justify;
            white-space: pre-line;
        }
    </style>
</head>
<body>

    <div class="container">
        <a href="{{ url()->previous() }}" class="back-link">← Kembali</a>

        <h1>{{ $berita->judul }}</h1>

        @if(!empty($berita->tanggal))
            <div class="tanggal">
                {{ \Carbon\Carbon::parse($berita->tanggal)->format('d F Y') }}
            </div>
        @endif

        @if(!empty($berita->gambar))
            <img src="{{ asset('storage/' . $berita->gambar) }}"
                 alt="{{ $berita->judul }}"
                 class="gambar-berita">
        @endif

        <div class="isi-berita">
            {{ $berita->isi }}
        </div>
    </div>

</body>
</html>