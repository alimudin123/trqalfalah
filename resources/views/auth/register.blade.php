<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Rumah Tahfidz Qur'an Al-Falah</title>

    <style>
        :root {
            --green-dark: #061f16;
            --green: #0b2f22;
            --cream: #f8f4ea;
            --gold: #d7b56d;
            --text: #08231a;
            --muted: #666666;
            --input: #eef4ff;
            --border: #ddd2b8;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background:
                radial-gradient(circle at top left, rgba(215, 181, 109, 0.13), transparent 35%),
                linear-gradient(135deg, #061f16 0%, #092b1f 50%, #061f16 100%);
            color: var(--text);
        }

        .auth-page {
            min-height: 100vh;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
            padding: 28px 20px 60px;
        }

        .brand {
            text-align: center;
            color: var(--cream);
            margin-bottom: 28px;
        }

        .brand img {
            width: 140px;
            height: 100px;
            object-fit: contain;
            background: var(--cream);
            border: 1.5px solid var(--gold);
            border-radius: 28px;
            padding: 12px;
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.28);
            margin-bottom: 18px;
        }

        .brand h1 {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 40px;
            line-height: 1.15;
            font-weight: 700;
            letter-spacing: 1px;
            color: #fff8e6;
        }

        .brand p {
            margin: 18px 0 0;
            font-size: 18px;
            color: #fff8e6;
        }

        .auth-card {
            width: 100%;
            max-width: 575px;
            background: var(--cream);
            border-radius: 32px;
            padding: 45px 42px 35px;
            box-shadow: 0 28px 65px rgba(0, 0, 0, 0.35);
        }

        .auth-card h2 {
            margin: 0;
            text-align: center;
            font-size: 31px;
            font-weight: 800;
            letter-spacing: 1px;
            color: var(--text);
        }

        .auth-card .subtitle {
            text-align: center;
            margin: 14px 0 34px;
            color: var(--muted);
            font-size: 17px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            margin-bottom: 12px;
            font-size: 17px;
            font-weight: 800;
            color: var(--text);
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            height: 64px;
            border-radius: 17px;
            border: 1.5px solid var(--border);
            background: var(--input);
            padding: 0 22px;
            font-size: 17px;
            color: #111827;
            outline: none;
            transition: 0.2s ease;
        }

        input:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 4px rgba(215, 181, 109, 0.22);
        }

        .error {
            margin-top: 8px;
            color: #dc2626;
            font-size: 14px;
        }

        .auth-actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            margin-top: 30px;
        }

        .auth-link {
            color: #5f635f;
            font-size: 16px;
            text-decoration: underline;
            text-underline-offset: 4px;
        }

        .btn-auth {
            border: none;
            border-radius: 999px;
            padding: 15px 36px;
            background: var(--green-dark);
            color: #fff8e6;
            font-size: 16px;
            font-weight: 800;
            letter-spacing: 1.5px;
            cursor: pointer;
            box-shadow: 0 12px 24px rgba(6, 31, 22, 0.35);
            transition: 0.2s ease;
        }

        .btn-auth:hover {
            background: #0a2d20;
            transform: translateY(-2px);
        }

        @media (max-width: 600px) {
            .brand h1 {
                font-size: 32px;
            }

            .auth-card {
                padding: 35px 24px 30px;
                border-radius: 26px;
            }

            .auth-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-auth {
                width: 100%;
            }

            .auth-link {
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <div class="auth-page">

        <div class="brand">
            <img src="{{ asset('images/logo.jpeg') }}" alt="Logo Rumah Tahfidz Al-Falah">

            <h1>
                Rumah Tahfidz <br>
                Qur'an Al-Falah
            </h1>

            <p>Silakan daftar untuk membuat akun admin</p>
        </div>

        <div class="auth-card">
            <h2>Register</h2>
            <p class="subtitle">Buat akun baru untuk masuk ke sistem</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input id="name"
                           type="text"
                           name="name"
                           value="{{ old('name') }}"
                           required
                           autofocus
                           autocomplete="name">

                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email"
                           type="email"
                           name="email"
                           value="{{ old('email') }}"
                           required
                           autocomplete="username">

                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password"
                           type="password"
                           name="password"
                           required
                           autocomplete="new-password">

                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input id="password_confirmation"
                           type="password"
                           name="password_confirmation"
                           required
                           autocomplete="new-password">

                    @error('password_confirmation')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="auth-actions">
                    <a href="{{ route('login') }}" class="auth-link">
                        Sudah punya akun?
                    </a>

                    <button type="submit" class="btn-auth">
                        REGISTER
                    </button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>