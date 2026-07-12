<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }}</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, Helvetica, sans-serif;
            background:#f5f6f8;
            color:#333;
        }

        .container{
            max-width:1100px;
            margin:50px auto;
            padding:0 20px;
        }

        .artikel-card{
            background:#fff;
            border-radius:20px;
            padding:40px;
            box-shadow:0 10px 35px rgba(0,0,0,.08);
        }

        /* Breadcrumb */

        .breadcrumb{
            margin-bottom:25px;
            font-size:14px;
            color:#777;
        }

        .breadcrumb a{
            color:#12372a;
            text-decoration:none;
            font-weight:600;
        }

        .breadcrumb span{
            margin:0 8px;
        }

        /* Tombol kembali */

        .back-link{
            display:inline-block;
            margin-bottom:25px;
            color:#12372a;
            text-decoration:none;
            font-weight:bold;
        }

        .back-link:hover{
            color:#d4a017;
        }

        /* Judul */

        h1{
            font-size:48px;
            color:#12372a;
            line-height:1.2;
            margin-bottom:18px;
        }

        /* Meta */

        .tanggal{
            font-size:15px;
            color:#777;
            margin-bottom:30px;
        }

        /* Gambar */

        .gambar-wrapper{
            width:100%;
            margin-bottom:35px;
            text-align:center;
        }

        .gambar-berita{
            width:100%;
            height:auto;
            display:block;
            margin:auto;
            object-fit:contain;
            border-radius:18px;
            box-shadow:0 8px 25px rgba(0,0,0,.12);
        }

        /* Isi */

        .isi-berita{
            font-size:18px;
            line-height:2;
            text-align:justify;
            color:#444;
            white-space:pre-line;
        }

        /* Tombol */

        .aksi{
            margin-top:50px;
            display:flex;
            gap:15px;
            flex-wrap:wrap;
        }

        .btn{
            padding:14px 28px;
            border-radius:40px;
            text-decoration:none;
            font-weight:bold;
            transition:.3s;
        }

        .btn-primary{
            background:#12372a;
            color:white;
        }

        .btn-primary:hover{
            background:#d4a017;
            color:#12372a;
        }

        .btn-outline{
            border:2px solid #12372a;
            color:#12372a;
            background:white;
        }

        .btn-outline:hover{
            background:#12372a;
            color:white;
        }

        /* Responsive */

        @media(max-width:992px){

            .artikel-card{
                padding:30px;
            }

            h1{
                font-size:38px;
            }

            .isi-berita{
                font-size:17px;
            }

        }

        @media(max-width:768px){

            .container{
                margin:20px auto;
                padding:0 12px;
            }

            .artikel-card{
                padding:20px;
                border-radius:15px;
            }

            h1{
                font-size:30px;
            }

            .tanggal{
                font-size:14px;
            }

            .isi-berita{
                font-size:16px;
                line-height:1.8;
            }

            .aksi{
                flex-direction:column;
            }

            .btn{
                width:100%;
                text-align:center;
            }

        }

    </style>

</head>

<body>

<div class="container">

    <div class="artikel-card">

        <nav class="breadcrumb">
            <a href="{{ url('/') }}">Beranda</a>
            <span>›</span>
            <span>Berita</span>
            <span>›</span>
            <span>{{ $berita->judul }}</span>
        </nav>

        <a href="{{ url()->previous() }}" class="back-link">
            ← Kembali
        </a>

        <h1>{{ $berita->judul }}</h1>

        @if(!empty($berita->tanggal))
            <div class="tanggal">
                📅 {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}
            </div>
        @endif

        @if(!empty($berita->gambar))
        <div class="gambar-wrapper">
            <img
                src="{{ asset('storage/'.$berita->gambar) }}"
                alt="{{ $berita->judul }}"
                class="gambar-berita">
        </div>
        @endif

        <div class="isi-berita">
            {{ $berita->isi }}
        </div>

        <div class="aksi">

            <a href="{{ url('/') }}" class="btn btn-outline">
                Semua Berita
            </a>

            <a href="{{ url()->previous() }}" class="btn btn-primary">
                Kembali
            </a>

        </div>

    </div>

</div>

</body>
</html>