<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "on-primary-fixed": "#002114",
              "on-tertiary": "#ffffff",
              "on-tertiary-fixed-variant": "#0e5138",
              "tertiary-fixed-dim": "#95d4b3",
              "surface-container-highest": "#e1e3e4",
              "primary": "#012d1d",
              "outline-variant": "#c1c8c2",
              "on-background": "#191c1d",
              "secondary": "#775a19",
              "error-container": "#ffdad6",
              "on-error-container": "#93000a",
              "surface-container-high": "#e7e8e9",
              "surface-tint": "#3f6653",
              "surface-container-low": "#f3f4f5",
              "on-error": "#ffffff",
              "secondary-container": "#fed488",
              "outline": "#717973",
              "surface-variant": "#e1e3e4",
              "on-secondary-fixed-variant": "#5d4201",
              "primary-fixed": "#c1ecd4",
              "tertiary-fixed": "#b1f0ce",
              "surface-dim": "#d9dadb",
              "error": "#ba1a1a",
              "on-surface-variant": "#414844",
              "primary-fixed-dim": "#a5d0b9",
              "tertiary": "#002d1c",
              "on-primary-fixed-variant": "#274e3d",
              "on-secondary-container": "#785a1a",
              "on-surface": "#191c1d",
              "surface-container-lowest": "#ffffff",
              "inverse-primary": "#a5d0b9",
              "inverse-surface": "#2e3132",
              "surface": "#f8f9fa",
              "inverse-on-surface": "#f0f1f2",
              "surface-container": "#edeeef",
              "on-primary-container": "#86af99",
              "primary-container": "#1b4332",
              "surface-bright": "#f8f9fa",
              "on-tertiary-container": "#75b393",
              "secondary-fixed-dim": "#e9c176",
              "on-secondary-fixed": "#261900",
              "tertiary-container": "#00452e",
              "background": "#f8f9fa",
              "on-secondary": "#ffffff",
              "secondary-fixed": "#ffdea5",
              "on-primary": "#ffffff",
              "on-tertiary-fixed": "#002114"
            },
            fontFamily: {
              "headline": ["Noto Serif"],
              "body": ["Manrope"],
              "label": ["Manrope"]
            },
            borderRadius: {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .masonry-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-auto-rows: 200px;
            gap: 1.5rem;
        }
        .masonry-item-tall { grid-row: span 3; }
        .masonry-item-wide { grid-column: span 2; }
        .masonry-item-standard { grid-row: span 2; }
        @media (max-width: 768px) {
            .masonry-item-wide { grid-column: span 1; }
        }
    </style>
</head>
<body class="bg-surface font-body text-on-surface antialiased">
<!-- Top Navigation -->
<header class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
<nav class="flex justify-between items-center max-w-7xl mx-auto px-6 h-20">
<div class="text-2xl font-bold font-headline text-emerald-900">Al-Falah</div>
<div class="hidden md:flex space-x-8 font-headline font-medium tracking-tight">
<a class="text-emerald-800 hover:text-amber-600 transition-colors duration-300" href="#">Beranda</a>
<a class="text-emerald-800 hover:text-amber-600 transition-colors duration-300" href="#">Profil</a>
<a class="text-emerald-800 hover:text-amber-600 transition-colors duration-300" href="#">Program</a>
<a class="text-emerald-800 hover:text-amber-600 transition-colors duration-300" href="#">Kegiatan</a>
<a class="text-amber-700 font-bold border-b-2 border-amber-600" href="#">Galeri</a>
<a class="text-emerald-800 hover:text-amber-600 transition-colors duration-300" href="#">Kontak</a>
</div>
<button class="bg-primary text-on-primary px-6 py-2 rounded-md font-medium scale-95 active:opacity-80 transition-transform"></button>
</nav>
</header>
<main class="pt-32 pb-24">
<!-- Hero Section -->
<section class="max-w-7xl mx-auto px-6 mb-20 text-center">
<span class="label-md uppercase tracking-[0.2em] text-secondary font-bold text-xs mb-4 block">Visual Journey</span>
<h1 class="font-headline text-5xl md:text-7xl font-bold text-primary tracking-tight mb-8">Galeri Kehidupan Al-Falah</h1>
<p class="max-w-2xl mx-auto text-on-surface-variant text-lg leading-relaxed">
                Rekaman momen berharga dalam perjalanan menghafal Al-Quran, pengabdian masyarakat, dan keceriaan para santri di Rumah Tahfidz Al-Falah.
            </p>
</section>
<!-- Gallery Filter -->
<section class="max-w-7xl mx-auto px-6 mb-12 overflow-x-auto">
<div class="flex space-x-4 pb-4 border-b border-outline-variant/20">
<button class="px-6 py-2 bg-primary text-on-primary rounded-full text-sm font-semibold whitespace-nowrap">Semua Momen</button>
<button class="px-6 py-2 text-on-surface-variant hover:bg-surface-container-low rounded-full text-sm font-semibold transition-all whitespace-nowrap">Kegiatan Santri</button>
<button class="px-6 py-2 text-on-surface-variant hover:bg-surface-container-low rounded-full text-sm font-semibold transition-all whitespace-nowrap">Hafalan Quran</button>
<button class="px-6 py-2 text-on-surface-variant hover:bg-surface-container-low rounded-full text-sm font-semibold transition-all whitespace-nowrap">Acara Sosial</button>
<button class="px-6 py-2 text-on-surface-variant hover:bg-surface-container-low rounded-full text-sm font-semibold transition-all whitespace-nowrap">Fasilitas</button>
</div>
</section>
<!-- Editorial Masonry Grid -->
<section class="max-w-7xl mx-auto px-6">
<div class="masonry-grid">
<!-- Item 1: Tall -->
<div class="masonry-item-tall relative group overflow-hidden bg-surface-container-high rounded-xl">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Young children in traditional clothing sitting together reading Quran in a peaceful, sunlit mosque interior" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTebP6aZHy7ACnEC6YvudAQSY2hkpXqpmpCO9KbKDImaY4EqNo9gR4N1LpFfesyhpaIEEOuhUFE-6H1GsCSlXV5lBsQV8moWyS8BByECHsQ-L1bPlvHwkrrFVnfmv4IhCE372a-tjQmidcSBzUf7vrt-p7-hr3__SEKWmbBC0LVHRWKWU0vO5Yr9R0YMfI3Mq3jHWzbetuNNun85gV7unmGglVJlntbbsELuzeRvNVAeaKlL9GHsuwey4iYFBGDG4F0GUGL4ICKBA"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
<span class="text-secondary-fixed text-xs font-bold uppercase tracking-wider mb-2">Kegiatan Santri</span>
<h3 class="text-white font-headline text-xl">Tilawah Pagi</h3>
</div>
</div>
<!-- Item 2: Wide -->
<div class="masonry-item-wide masonry-item-standard relative group overflow-hidden bg-surface-container-high rounded-xl">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Group of community members sharing a traditional Indonesian meal outdoors under golden hour light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCffbQIxx1VK7J3b1i4lta0Qj3bTV82aywDuQPIRiQenl9xgvYuDvQawEPtszX7NRFHwMXpn-L3JNZLc6H9icQcdc5GrPpEwAQHg5Kj375ah2a5t4kK2lSy95MnFG4A4pFrV_cQE48Q5-ij-BS8gv7JheTfvHa8K_34zIJCgkSBcEQaLI8__dr_9bsOmC2h9R5O2BDh_h57IkPzaCDgC-em4w5xOUce6U5fqkCW5p0nrVfdFfdszdDwEgoIS8T39VUSdV68eEtMFak"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
<span class="text-secondary-fixed text-xs font-bold uppercase tracking-wider mb-2">Acara Sosial</span>
<h3 class="text-white font-headline text-xl">Buka Puasa Bersama Masyarakat</h3>
</div>
</div>
<!-- Item 3: Standard -->
<div class="masonry-item-standard relative group overflow-hidden bg-surface-container-high rounded-xl">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Close-up of an open Quran with intricate calligraphy on a wooden stand in a soft focus library background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOxBHzivHfIDhjL8a3urPoK-RF0bJQ5fDnF8DwFNPi4_rjarXJJMxn5AEMvmK-MFCEmNXDkl5LEnODwet45zQeW8aMJefWulXMk_S20r4SpB7mJrLJMhUqY7fP-QxZ5TX29H2K3brkjVDqp8WThJs3XnKn1aTNzWdrVFE1QUoEWRLYxIyNzjPa1FCA8dfrCFfCaCfJnZVJ4pJ5wniJv3Pi1i0TpAebcPMy-xoOy1Uty7T6XiHz6sn-wOiRN3Ydl2DoTSVJ7DsDhLQ"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
<span class="text-secondary-fixed text-xs font-bold uppercase tracking-wider mb-2">Fasilitas</span>
<h3 class="text-white font-headline text-xl">Perpustakaan Islami</h3>
</div>
</div>
<!-- Item 4: Tall -->
<div class="masonry-item-tall relative group overflow-hidden bg-surface-container-high rounded-xl">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Young student looking upwards with a bright smile, surrounded by books and soft classroom lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBOHMm0HsAO4PJJ0s88wpO4DBVfpTwR3H_jiF670qDqELDyPKxMT4AHP--3TJYVW5pA5UEBEDAqAqAbbALGkuoFzXxhZxXbZQ6zmJdmF4FkuKnaTqA01FvRd8nIQiLjaTxVzO7uFdX1Ht6mIh9W_OJ3R0H0EJcjzTKqB5xE3uZfGQRZcBpZMv1E0TuGiXZyEgNXP-4RW2g8eq5OCukpVkHZbtR4glOEovHqkf1JJKz9n1DYflSN6rz-5BeA8LUA7-ZKustsp3Dm3g"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
<span class="text-secondary-fixed text-xs font-bold uppercase tracking-wider mb-2">Profil Santri</span>
<h3 class="text-white font-headline text-xl">Senyum Harapan</h3>
</div>
</div>
<!-- Item 5: Standard -->
<div class="masonry-item-standard relative group overflow-hidden bg-surface-container-high rounded-xl">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Detailed view of Islamic architectural elements with arches and intricate geometric patterns at sunrise" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAQYTWyiX_8JOYr6phYKgl0zohlyVpbztNdlaLrUAXr3SjPpXHN_-dU88Uk4vMaPDyypdbRvQxUhEAmwAUdJ-pe04BAYCCdd0CUSAiQplxK9TFsTJnR73y8CmMM0n4DzhbO9540y1VWkpbjBcRQyvPq8XV1BSP6pzC6Co6rOpM81bb5miqZIVFlq_eYJ4EpXP5jJzePy9m-fUJCI1gk4c-BDl10Msr7Mt7j6RufSliwkBbIdKyrT-h_NQLDr7zYemOmOOpunFOfwQ"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
<span class="text-secondary-fixed text-xs font-bold uppercase tracking-wider mb-2">Fasilitas</span>
<h3 class="text-white font-headline text-xl">Arsitektur Qur'ani</h3>
</div>
</div>
<!-- Item 6: Wide -->
<div class="masonry-item-wide masonry-item-standard relative group overflow-hidden bg-surface-container-high rounded-xl">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Aerial view of students playing in a green courtyard during a break, surrounded by classical white buildings" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRV26m83uoOUp3062efL3r5V6O-hJzwWqnP9jWiUdh7a9LGuEMeYc5TMZ8XLmDpxJi-LhesQxp-cHcFszFRLWChgGJD_qd6MqgZZkWAn4PF6axAZCEhmsTNiFloMT4ymvDTCCyO_gNZ_FB5J2U0AkXPOniMTd5e54vbUCKh5Re0-lZO1rk3Gnd35wQHe5GYq1WpwV9d-xTjBelG9orM_ouTrXmqhbAoeDM7p2jxlt4Hv_PGrw_3xEx-bgG7bzjN5GpqPwY00CmhRU"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
<span class="text-secondary-fixed text-xs font-bold uppercase tracking-wider mb-2">Waktu Istirahat</span>
<h3 class="text-white font-headline text-xl">Keceriaan di Halaman</h3>
</div>
</div>
</div>
</section>
<!-- Ayah Quote Signature Component -->
<section class="w-full mt-24 py-24 bg-primary-container text-center">
<div class="max-w-4xl mx-auto px-6">
<span class="material-symbols-outlined text-secondary-fixed text-4xl mb-6" data-icon="format_quote">format_quote</span>
<h2 class="font-headline text-3xl md:text-4xl italic text-secondary-fixed leading-relaxed mb-8">
                    "Sesungguhnya orang-orang yang selalu membaca Kitab Allah dan mendirikan shalat serta menafkahkan sebagian dari rezeki yang Kami anugerahkan kepada mereka dengan diam-diam dan terang-terangan..."
                </h2>
<p class="text-on-primary-container uppercase tracking-widest font-bold text-sm">Surah Fatir : 29</p>
</div>
</section>
<!-- Video Gallery / Highlights -->
<section class="max-w-7xl mx-auto px-6 mt-24">
<div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
<div class="max-w-xl">
<h2 class="font-headline text-4xl font-bold text-primary mb-4">Momen dalam Gerak</h2>
<p class="text-on-surface-variant">Saksikan dokumentasi video kegiatan pembelajaran dan perkembangan program Rumah Tahfidz kami.</p>
</div>
<button class="flex items-center space-x-2 text-secondary font-bold hover:underline transition-all">
<span>Lihat YouTube Kami</span>
<span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="relative aspect-video bg-primary group overflow-hidden rounded-xl">
<img class="w-full h-full object-cover opacity-60" data-alt="Cinematic still of a student graduation ceremony with caps and traditional gowns in a grand hall" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7KuXo4NhYEDMGSWmcOoQNM1X85sladBgnuyYwglRu5a9AwfnuKFiwtpRX0iDkqROFL3FVbqGdxNIjs11Ko1CUxP6Kw-2S8K7mjRmOLghqyN0dC3FqD30IFslO7cvh2VqPJiRsRir_n0xQYC2BGT5x1JwTpOSro5-9TccBj-U110uAGJu8WlinAqCz0A-zQxiSrRH2gFKSAQvmtsn6hQRVmU8_vf6qxLKG08Maq0VGk69KSHtwFYqETZgX1z4gOcrUoYt14Gy3tWY"/>
<div class="absolute inset-0 flex items-center justify-center">
<button class="w-20 h-20 bg-secondary/90 text-white rounded-full flex items-center justify-center transition-transform group-hover:scale-110">
<span class="material-symbols-outlined text-4xl" data-icon="play_arrow" data-weight="fill" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
</button>
</div>
<div class="absolute bottom-6 left-6 text-white">
<p class="text-sm font-bold uppercase tracking-tighter opacity-80">Video Highlight</p>
<h4 class="text-xl font-headline">Wisuda Tahfidz Angkatan VII</h4>
</div>
</div>
<div class="relative aspect-video bg-primary group overflow-hidden rounded-xl">
<img class="w-full h-full object-cover opacity-60" data-alt="Interior of a modern classroom with Islamic geometric patterns on glass walls and bright natural light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBh2lxfJkbPP7y642Oib8vaCaJsXmwh8uQGmnylgogsrTAwOkDmcOoMatTgwmFS2emLAS-bZMe7X32IMfQ7cYS0kj8PQLw7j-KlKDxAv6fhNg6HczpkjOMHDiMpOEQefRDziXmudMIHKySYOKQW9Fy115l8CP0zgQtdSFmgLwyWY4EvzyKz2gE1dV_9c2W2kyQUldND4rqp8nknUChjR3C7VP71GiUhOlir7_8zk1iGI39tTVCcO-m49t361Wo6znQFyzYRSxYv-SU"/>
<div class="absolute inset-0 flex items-center justify-center">
<button class="w-20 h-20 bg-secondary/90 text-white rounded-full flex items-center justify-center transition-transform group-hover:scale-110">
<span class="material-symbols-outlined text-4xl" data-icon="play_arrow" data-weight="fill" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
</button>
</div>
<div class="absolute bottom-6 left-6 text-white">
<p class="text-sm font-bold uppercase tracking-tighter opacity-80">Fasilitas Baru</p>
<h4 class="text-xl font-headline">Tur Virtual Kompleks Al-Falah</h4>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-emerald-900 text-emerald-50 w-full py-12 px-6 mt-auto">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
<div>
<h3 class="text-xl font-noto-serif text-amber-400 mb-6">Al-Falah</h3>
<p class="font-manrope text-sm leading-relaxed text-emerald-200/80 mb-6">
                    Membangun generasi Qur'ani yang berkarakter, cerdas, dan bertaqwa melalui pendidikan Tahfidz yang berkualitas.
                </p>
<div class="flex space-x-4">
<span class="material-symbols-outlined p-2 bg-white/10 rounded-full cursor-pointer hover:bg-amber-400 hover:text-emerald-900 transition-all" data-icon="facebook">social_leaderboard</span>
<span class="material-symbols-outlined p-2 bg-white/10 rounded-full cursor-pointer hover:bg-amber-400 hover:text-emerald-900 transition-all" data-icon="instagram">retweet</span>
<span class="material-symbols-outlined p-2 bg-white/10 rounded-full cursor-pointer hover:bg-amber-400 hover:text-emerald-900 transition-all" data-icon="youtube_activity">youtube_activity</span>
</div>
</div>
<div class="flex flex-col space-y-4">
<h4 class="font-bold text-amber-400 uppercase tracking-widest text-xs">Navigasi Cepat</h4>
<a class="text-emerald-200/80 hover:text-white underline-offset-4 hover:underline transition-all" href="#">Program Unggulan</a>
<a class="text-emerald-200/80 hover:text-white underline-offset-4 hover:underline transition-all" href="#">Pendaftaran Santri</a>
<a class="text-emerald-200/80 hover:text-white underline-offset-4 hover:underline transition-all" href="#">Donasi Dakwah</a>
<a class="text-emerald-200/80 hover:text-white underline-offset-4 hover:underline transition-all" href="#">Tentang Kami</a>
</div>
<div class="flex flex-col space-y-4">
<h4 class="font-bold text-amber-400 uppercase tracking-widest text-xs">Kontak</h4>
<p class="text-emerald-200/80 text-sm flex items-center">
<span class="material-symbols-outlined mr-2 text-sm" data-icon="location_on">location_on</span>
                    Jahri Saleh, Surgi Mufti, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan. 
                </p>
<p class="text-emerald-200/80 text-sm flex items-center">
<span class="material-symbols-outlined mr-2 text-sm" data-icon="mail">mail</span>
                    info@alfalah-tahfidz.org
                </p>
<p class="text-emerald-200/80 text-sm flex items-center">
<span class="material-symbols-outlined mr-2 text-sm" data-icon="call">call</span>
                    +62 813-3676-9945
                </p>
</div>
</div>
<div class="max-w-7xl mx-auto border-t border-emerald-800/50 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
<p class="font-manrope text-sm leading-relaxed text-emerald-200/80">
                © 2024 Rumah Tahfidz Quran Al-Falah. All Rights Reserved.
            </p>
<div class="flex space-x-6">
<a class="text-emerald-200/80 text-sm hover:text-amber-400" href="#">Kebijakan Privasi</a>
<a class="text-emerald-200/80 text-sm hover:text-amber-400" href="#">Syarat &amp; Ketentuan</a>
<a class="text-emerald-200/80 text-sm hover:text-amber-400" href="#">Peta Situs</a>
</div>
</div>
</footer>
</body></html>