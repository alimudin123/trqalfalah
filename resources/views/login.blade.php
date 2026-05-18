<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Login - Al-Falah</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&amp;family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .font-noto-serif { font-family: 'Noto Serif', serif; }
        .font-manrope { font-family: 'Manrope', sans-serif; }
        
        .glass-panel {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }

        .editorial-shadow {
            box-shadow: 0 32px 64px -12px rgba(1, 45, 29, 0.08);
        }
    </style>
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
</head>
<body class="bg-surface text-on-surface font-body min-h-screen flex flex-col items-center justify-center p-6 relative overflow-hidden">
<!-- Background Aesthetic Elements -->
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover opacity-10 filter grayscale" data-alt="blurred close-up of intricate islamic geometric patterns carved in stone with soft sunlight casting deep shadows and scholarly atmosphere" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2L83AQumUIdY-z0_SAUggo52GytQvavn8ea4eW5EJx5PaNiMi70qnAxe5i-xReduuSpIW4TRCxGL6U1wXIZlKbGKMLrzrbakdH045U7Wh9bqaJUxCKqq56-KwkJ05Ogx8RGb76PTbFKrnzB4XxcP93QCsyIEXpQK7B32TAxuXsD5OE-LYJVyWb-Gcy3KNilV_xHzFDQCoWwFileblcspouiKhg_Piar29RP4fBAVSFz1yWKB5p2D1pTjkpt85NHRF23xMsqfWJrI"/>
<div class="absolute inset-0 bg-gradient-to-tr from-primary/20 via-transparent to-secondary/10"></div>
</div>
<!-- Login Container -->
<main class="relative z-10 w-full max-w-md">
<!-- Brand Identity -->
<div class="text-center mb-10">
<div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-primary-container mb-6 editorial-shadow">
<span class="material-symbols-outlined text-4xl text-secondary-fixed" data-icon="auto_stories" style="font-variation-settings: 'FILL' 1;">auto_stories</span>
</div>
<h1 class="font-headline text-3xl font-bold tracking-tight text-primary mb-2">Panel Admin</h1>
<p class="text-on-surface-variant font-medium tracking-wide label-md uppercase opacity-80">Rumah Tahfidz Quran Al-Falah</p>
</div>
<!-- Login Form Card -->
<div class="glass-panel p-10 rounded-xl editorial-shadow ring-1 ring-outline-variant/15">
<form action="#" class="space-y-8" method="POST">
<!-- Field: Email/Username -->
<div class="space-y-2">
<label class="block text-xs font-bold uppercase tracking-widest text-primary/70 px-1" for="identity">
                        Email atau Username
                    </label>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-lg" data-icon="person">person</span>
</div>
<input class="block w-full pl-11 pr-4 py-4 bg-surface-container-low border-none rounded-lg focus:ring-2 focus:ring-secondary/30 text-on-surface placeholder-outline/50 transition-all duration-300" id="identity" name="identity" placeholder="admin@alfalah.com" required="" type="text"/>
</div>
</div>
<!-- Field: Password -->
<div class="space-y-2">
<div class="flex justify-between items-end px-1">
<label class="block text-xs font-bold uppercase tracking-widest text-primary/70" for="password">
                            Kata Sandi
                        </label>
<a class="text-xs font-semibold text-secondary hover:text-primary transition-colors" href="#">Lupa sandi?</a>
</div>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-lg" data-icon="lock">lock</span>
</div>
<input class="block w-full pl-11 pr-4 py-4 bg-surface-container-low border-none rounded-lg focus:ring-2 focus:ring-secondary/30 text-on-surface placeholder-outline/50 transition-all duration-300" id="password" name="password" placeholder="••••••••••••" required="" type="password"/>
</div>
</div>
<!-- Remember Me -->
<div class="flex items-center px-1">
<input class="h-4 w-4 text-primary border-outline-variant rounded focus:ring-secondary-container" id="remember-me" name="remember-me" type="checkbox"/>
<label class="ml-3 block text-sm text-on-surface-variant font-medium" for="remember-me">
                        Tetap masuk selama 30 hari
                    </label>
</div>
<!-- Submit Button -->
<button class="w-full flex justify-center items-center gap-3 bg-primary text-on-primary py-4 px-6 rounded-lg font-bold text-sm uppercase tracking-widest hover:bg-primary-container transition-all active:scale-[0.98] group" type="submit">
<span>Masuk ke Panel</span>
<span class="material-symbols-outlined text-xl transition-transform group-hover:translate-x-1" data-icon="arrow_forward">arrow_forward</span>
</button>
</form>
<!-- Footer info within card -->
<div class="mt-10 pt-8 border-t border-outline-variant/10 flex flex-col items-center gap-4">
<div class="flex items-center gap-2 text-on-surface-variant/60">
<span class="material-symbols-outlined text-base" data-icon="verified_user" style="font-variation-settings: 'FILL' 1;">verified_user</span>
<span class="text-xs font-semibold tracking-wide">Sistem Keamanan Terenkripsi</span>
</div>
</div>
</div>
<!-- External Footer Links -->
<div class="mt-12 text-center">
<a class="inline-flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors font-medium text-sm" href="/">
<span class="material-symbols-outlined text-lg" data-icon="home">home</span>
                Kembali ke Beranda Utama
            </a>
</div>
</main>
<!-- Decorative Corner Element -->
<div class="fixed bottom-0 right-0 p-8 hidden lg:block pointer-events-none opacity-20">
<div class="font-headline text-primary text-9xl select-none leading-none opacity-10">
            ٱلْفَلَاحِ
        </div>
</div>
<!-- Ayah Quote reset (Contextualized as a small footer note) -->
<footer class="mt-auto pt-10 pb-6 relative z-10 w-full text-center">
<p class="font-manrope text-[10px] uppercase tracking-[0.2em] text-on-surface-variant/40">
            © 2024 Rumah Tahfidz Quran Al-Falah. Dedicated to Academic &amp; Spiritual Excellence.
        </p>
</footer>
</body></html>