<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Kelola Konten</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>

        body{
            background:#f5f5f5;
            font-family:'Poppins', sans-serif;
        }

        .container-custom{
            width:80%;
            margin:auto;
            padding:40px 0;
        }

        .section-box{
            background:white;
            padding:35px;
            border-radius:18px;
            box-shadow:0 4px 10px rgba(0,0,0,0.08);
            margin-bottom:40px;
        }

        .section-header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:25px;
        }

        .section-title h1{
            font-size:48px;
            font-weight:700;
            margin-bottom:0;
        }

        .section-title p{
            color:#555;
            margin-top:5px;
        }

        .btn-custom{
            background:#d9d9d9;
            border:none;
            padding:12px 30px;
            border-radius:12px;
            font-size:20px;
            transition:0.3s;
        }

        .btn-custom:hover{
            background:#c5c5c5;
        }

        .content-card{
            background:#dcdcdc;
            border-radius:15px;
            padding:15px 20px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:20px;
            box-shadow:0 4px 8px rgba(0,0,0,0.08);
        }

        .content-left{
            display:flex;
            align-items:center;
            gap:20px;
        }

        .content-image{
            width:70px;
            height:70px;
            background:#fff;
            border-radius:10px;
            overflow:hidden;
        }

        .content-image img{
            width:100%;
            height:100%;
            object-fit:cover;
        }

        .content-info small{
            color:#444;
            font-size:12px;
        }

        .content-info h3{
            margin-top:5px;
            font-size:22px;
        }

        .content-action{
            display:flex;
            gap:15px;
        }

        .action-btn{
            border:none;
            background:none;
            font-size:24px;
            cursor:pointer;
        }

        .edit-btn{
            color:#000;
        }

        .delete-btn{
            color:#000;
        }

    </style>

</head>
<body>

<div class="container-custom">

    <!-- BERITA -->
    <div class="section-box">

        <div class="section-header">

            <div class="section-title">
                <h1>Berita</h1>
                <p>Kelola berita terbaru mengenai Rumah Tahfidz</p>
            </div>

            <button class="btn-custom">
                + Tambah Berita Baru
            </button>

        </div>

        <!-- Card -->
        <div class="content-card">

            <div class="content-left">

                <div class="content-image">
                    <img src="https://via.placeholder.com/70" alt="">
                </div>

                <div class="content-info">
                    <small>
                        <i class="fa-solid fa-calendar"></i>
                        18 April 2025
                    </small>

                    <h3>Berita 1</h3>
                </div>

            </div>

            <div class="content-action">

                <button class="action-btn edit-btn">
                    <i class="fa-solid fa-pen"></i>
                </button>

                <button class="action-btn delete-btn">
                    <i class="fa-solid fa-trash"></i>
                </button>

            </div>

        </div>

        <!-- Card -->
        <div class="content-card">

            <div class="content-left">

                <div class="content-image">
                    <img src="https://via.placeholder.com/70" alt="">
                </div>

                <div class="content-info">
                    <small>
                        <i class="fa-solid fa-calendar"></i>
                        18 April 2025
                    </small>

                    <h3>Berita 2</h3>
                </div>

            </div>

            <div class="content-action">

                <button class="action-btn edit-btn">
                    <i class="fa-solid fa-pen"></i>
                </button>

                <button class="action-btn delete-btn">
                    <i class="fa-solid fa-trash"></i>
                </button>

            </div>

        </div>

    </div>



    <!-- KEGIATAN -->
    <div class="section-box">

        <div class="section-header">

            <div class="section-title">
                <h1>Kegiatan</h1>
                <p>Kelola kegiatan mengenai Rumah Tahfidz</p>
            </div>

            <button class="btn-custom">
                + Tambah Kegiatan
            </button>

        </div>

        <div class="content-card">

            <div class="content-left">

                <div class="content-image">
                    <img src="https://via.placeholder.com/70" alt="">
                </div>

                <div class="content-info">
                    <small>
                        <i class="fa-solid fa-calendar"></i>
                        18 April 2025
                    </small>

                    <h3>Kegiatan 1</h3>
                </div>

            </div>

            <div class="content-action">

                <button class="action-btn edit-btn">
                    <i class="fa-solid fa-pen"></i>
                </button>

                <button class="action-btn delete-btn">
                    <i class="fa-solid fa-trash"></i>
                </button>

            </div>

        </div>

    </div>



    <!-- PRESTASI -->
    <div class="section-box">

        <div class="section-header">

            <div class="section-title">
                <h1>Prestasi</h1>
                <p>Kelola prestasi pada Rumah Tahfidz</p>
            </div>

            <button class="btn-custom">
                + Tambah Prestasi
            </button>

        </div>

        <div class="content-card">

            <div class="content-left">

                <div class="content-image">
                    <img src="https://via.placeholder.com/70" alt="">
                </div>

                <div class="content-info">
                    <small>
                        <i class="fa-solid fa-calendar"></i>
                        18 April 2025
                    </small>

                    <h3>Prestasi 1</h3>
                </div>

            </div>

            <div class="content-action">

                <button class="action-btn edit-btn">
                    <i class="fa-solid fa-pen"></i>
                </button>

                <button class="action-btn delete-btn">
                    <i class="fa-solid fa-trash"></i>
                </button>

            </div>

        </div>

    </div>

</div>

</body>
</html>