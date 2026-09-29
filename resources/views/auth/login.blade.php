<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Sistem Absensi Pembelajaran Digital</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;

            background:
                linear-gradient(
                    rgba(8, 42, 82, 0.90),
                    rgba(8, 42, 82, 0.90)
                ),
                url('/images/foto-sekolah.png');

            background-size: cover;
            background-position: center;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 20px;
        }

        .login-card {
            width: 100%;
            max-width: 420px;

            background: white;
            border-radius: 14px;

            padding: 38px;

            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.20);
        }

        .logo-wrapper {
            text-align: center;
            margin-bottom: 24px;
        }

        .logo {
            width: 78px;
            height: 78px;

            object-fit: contain;

            background: white;
            padding: 6px;

            border-radius: 8px;
        }

        .title {
            text-align: center;
            color: #111827;
            font-size: 24px;
            font-weight: 700;

            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #64748b;
            font-size: 13px;

            line-height: 1.6;

            margin-bottom: 28px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;

            font-size: 13px;
            font-weight: 600;

            color: #334155;

            margin-bottom: 7px;
        }

        .form-group input {
            width: 100%;

            padding: 13px 14px;

            border: 1px solid #dbe2ea;
            border-radius: 7px;

            outline: none;

            font-size: 14px;

            transition: 0.2s;
        }

        .form-group input:focus {
            border-color: #2563eb;

            box-shadow:
                0 0 0 3px rgba(37, 99, 235, 0.10);
        }

        .btn-login {
            width: 100%;

            border: none;
            border-radius: 7px;

            padding: 13px;

            background: #2563eb;
            color: white;

            font-size: 14px;
            font-weight: 600;

            cursor: pointer;

            transition: 0.3s;
        }

        .btn-login:hover {
            background: #1d4ed8;
        }

        .back-home {
            display: block;

            text-align: center;

            margin-top: 20px;

            color: #64748b;

            font-size: 13px;

            text-decoration: none;
        }

        .back-home:hover {
            color: #2563eb;
        }

        @media (max-width: 480px) {

            .login-card {
                padding: 28px 22px;
            }

            .title {
                font-size: 21px;
            }
        }
    </style>
</head>

<body>

    <div class="login-card">

        <div class="logo-wrapper">
            <img
                src="/images/logo-sekolah.jpeg"
                alt="Logo Sekolah"
                class="logo"
            >
        </div>

        <h1 class="title">
            Masuk ke Sistem
        </h1>

        <p class="subtitle">
            Sistem Absensi Pembelajaran Digital
        </p>

        <form action="/login" method="POST">
    @csrf

    <div class="form-group">

        <label for="email">
            Email
        </label>

        <input
            type="email"
            id="email"
            name="email"
            placeholder="Masukkan email"
            value="{{ old('email') }}"
            required
        >

    </div>


    <div class="form-group">

        <label for="password">
            Password
        </label>

        <input
            type="password"
            id="password"
            name="password"
            placeholder="Masukkan password"
            required
        >

    </div>


    @if ($errors->any())

        <div style="
            color: #dc2626;
            font-size: 13px;
            margin-bottom: 15px;
        ">
            {{ $errors->first() }}
        </div>

    @endif


    <button type="submit" class="btn-login">
        Masuk
    </button>

</form>

        <a href="/" class="back-home">
            ← Kembali ke halaman utama
        </a>

    </div>

</body>
</html>