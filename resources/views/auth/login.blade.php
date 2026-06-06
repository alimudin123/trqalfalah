<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rumah Tahfidz Qur'an Al-Falah</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Poppins:wght@300;400;500;600;700;800&display=swap');

        :root {
            --primary: #0F2A1D;
            --primary-dark: #0A1F15;
            --secondary: #C8912D;
            --secondary-dark: #A66F1D;
            --cream: #F8F3E7;
            --soft-cream: #FFF9ED;
            --white: #FFFFFF;
            --text-dark: #102116;
            --text-muted: #6B6B5F;
            --border: #E7D8B8;
            --danger: #B42318;
            --success-bg: #E9F7EF;
            --success-text: #146C43;
            --shadow: 0 18px 45px rgba(10, 31, 21, 0.22);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            min-height: 100%;
        }

        body {
            font-family: 'Poppins', Arial, sans-serif;
            background:
                radial-gradient(circle at 20% 15%, rgba(200, 145, 45, 0.18), transparent 30%),
                radial-gradient(circle at 85% 75%, rgba(255, 249, 237, 0.16), transparent 32%),
                linear-gradient(135deg, var(--primary-dark), var(--primary), #183D2B);
            color: var(--text-dark);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 18px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 460px;
        }

        .brand-area {
            text-align: center;
            margin-bottom: 24px;
        }

        .logo-box {
            width: 112px;
            height: 112px;
            margin: 0 auto 16px;
            background: var(--soft-cream);
            border: 2px solid rgba(200, 145, 45, 0.35);
            border-radius: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            box-shadow: var(--shadow);
        }

        .logo-box img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-area h1 {
            font-family: 'Amiri', serif;
            font-size: 36px;
            font-weight: 700;
            line-height: 1.08;
            color: #FFF4D8;
            text-shadow: 0 8px 24px rgba(0, 0, 0, 0.22);
        }

        .brand-area p {
            margin-top: 8px;
            font-size: 14px;
            color: #EADFC8;
        }

        .login-card {
            background: rgba(255, 249, 237, 0.97);
            border: 1px solid rgba(231, 216, 184, 0.9);
            border-radius: 28px;
            padding: 34px;
            box-shadow: var(--shadow);
        }

        .login-card h2 {
            text-align: center;
            font-size: 28px;
            font-weight: 800;
            color: var(--primary-dark);
            margin-bottom: 6px;
        }

        .subtitle {
            text-align: center;
            font-size: 14px;
            color: var(--text-muted);
            margin-bottom: 28px;
        }

        .status-message {
            background: var(--success-bg);
            color: var(--success-text);
            border: 1px solid #B7E4C7;
            padding: 12px 14px;
            border-radius: 12px;
            font-size: 14px;
            margin-bottom: 18px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            height: 52px;
            border: 1px solid var(--border);
            border-radius: 16px;
            background: var(--white);
            padding: 0 16px;
            font-size: 15px;
            color: var(--text-dark);
            outline: none;
            transition: 0.25s ease;
        }

        .form-control:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 4px rgba(200, 145, 45, 0.18);
        }

        .form-control::placeholder {
            color: #A49A8A;
        }

        .error-text {
            color: var(--danger);
            font-size: 13px;
            margin-top: 7px;
        }

        .remember-row {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin: 4px 0 24px;
            color: var(--text-muted);
            font-size: 14px;
            cursor: pointer;
        }

        .remember-row input {
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }

        .bottom-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .forgot-link {
            color: var(--secondary-dark);
            font-size: 14px;
            font-weight: 700;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        .login-btn {
            min-width: 130px;
            height: 48px;
            border: 0;
            border-radius: 999px;
            background: var(--primary);
            color: var(--white);
            font-size: 15px;
            font-weight: 800;
            letter-spacing: 0.8px;
            cursor: pointer;
            transition: 0.25s ease;
            box-shadow: 0 10px 22px rgba(15, 42, 29, 0.28);
        }

        .login-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .register-text {
            text-align: center;
            margin-top: 22px;
            color: #EADFC8;
            font-size: 14px;
        }

        .register-text a {
            color: #FFD98A;
            font-weight: 800;
        }

        .register-text a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .login-page {
                padding: 28px 14px;
            }

            .login-card {
                padding: 28px 22px;
            }

            .brand-area h1 {
                font-size: 30px;
            }

            .bottom-row {
                flex-direction: column;
                align-items: stretch;
            }

            .forgot-link {
                text-align: center;
            }

            .login-btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <main class="login-page">
        <div class="login-wrapper">

            <div class="brand-area">
                <div class="logo-box">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="Logo Rumah Tahfidz Al-Falah">
                </div>

                <h1>Rumah Tahfidz<br>Qur'an Al-Falah</h1>
                <p>Silakan login untuk masuk ke sistem</p>
            </div>

            <section class="login-card">
                <h2>Login</h2>
                <p class="subtitle">Masuk menggunakan akun yang sudah terdaftar</p>

                @if (session('status'))
                    <div class="status-message">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input
                            id="email"
                            class="form-control"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="username"
                            placeholder="Masukkan email">

                        @error('email')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input
                            id="password"
                            class="form-control"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="Masukkan password">

                        @error('password')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <label class="remember-row" for="remember">
                        <input id="remember" type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>

                    <div class="bottom-row">
                        @if (Route::has('password.request'))
                            <a class="forgot-link" href="{{ route('password.request') }}">
                                Forgot your password?
                            </a>
                        @endif

                        <button type="submit" class="login-btn">
                            LOG IN
                        </button>
                    </div>
                </form>
            </section>

            @if (Route::has('register'))
                <div class="register-text">
                    Belum punya akun?
                    <a href="{{ route('register') }}">Daftar sekarang</a>
                </div>
            @endif

        </div>
    </main>
</body>

</html>
