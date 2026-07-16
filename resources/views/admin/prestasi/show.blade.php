<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $prestasi->judul }}</title>

    {{-- Font Awesome for icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fffaf0;
            color: #1f1f1f;
            line-height: 1.6;
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
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .media-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .media-item {
            border: 1px solid #ead9be;
            border-radius: 16px;
            overflow: hidden;
            background: #fffaf0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
        }

        .media-item img,
        .media-item video {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }

        .media-label {
            padding: 12px;
            font-size: 14px;
            font-weight: 700;
            color: #7c2d12;
            background: #ffffff;
            border-top: 1px solid #ead9be;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .section-title {
            font-size: 20px;
            color: #12372a;
            margin-bottom: 10px;
            font-weight: 700;
            border-bottom: 2px solid #ead9be;
            padding-bottom: 8px;
        }

        .description {
            font-size: 17px;
            line-height: 1.9;
            color: #333;
            text-align: justify;
            white-space: pre-line;
            margin-bottom: 30px;
        }

        .action-bar {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            border-top: 1px solid #ead9be;
            padding-top: 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 700;
            text-decoration: none;
            font-size: 15px;
            transition: 0.2s ease;
        }

        .btn-edit {
            background: #b45309;
            color: #ffffff;
        }

        .btn-edit:hover {
            background: #92400e;
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

        <h1>{{ $prestasi->judul }}</h1>

        @if($prestasi->media->count() > 0)
            <div class="media-gallery">
                @foreach($prestasi->media as $media)
                    <div class="media-item">
                        @if($media->tipe == 'foto')
                            <img src="{{ asset('storage/' . $media->file) }}" alt="Foto Dokumentasi">
                            <div class="media-label">
                                <i class="fa-solid fa-image"></i>
                                Foto Dokumentasi
                            </div>
                        @elseif($media->tipe == 'video')
                            <video controls>
                                <source src="{{ asset('storage/' . $media->file) }}">
                            </video>
                            <div class="media-label">
                                <i class="fa-solid fa-video"></i>
                                Video Dokumentasi
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <div style="width: 100%; height: 260px; display: flex; align-items: center; justify-content: center; background: #ffedd5; color: #7c2d12; font-size: 64px; border-radius: 16px; margin-bottom: 30px; border: 1px solid #ead9be;">
                🏆
            </div>
        @endif

        <div class="section-title">
            Deskripsi Prestasi
        </div>

        <div class="description">
            {{ $prestasi->deskripsi ?? 'Tidak ada deskripsi.' }}
        </div>

        @auth
            <div class="action-bar">
                <a href="{{ route('prestasi.edit', $prestasi->id) }}" class="btn btn-edit">
                    <i class="fa-solid fa-pen"></i>
                    Edit Prestasi
                </a>
            </div>
        @endauth

    </div>

</body>

</html>