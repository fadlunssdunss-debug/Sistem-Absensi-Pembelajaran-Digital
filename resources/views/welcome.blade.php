<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Absensi Pembelajaran Digital</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
            color: #1e293b;
        }

        .hero {
            min-height: 520px;
            position: relative;

            background-image:
                linear-gradient(
                    rgba(8, 42, 82, 0.88),
                    rgba(8, 42, 82, 0.88)
                ),
                url('/images/foto-sekolah.png');

            background-size: cover;
            background-position: center;

            display: flex;
            justify-content: center;
            align-items: center;

            text-align: center;
            padding: 40px 20px;
        }

        .hero-content {
            max-width: 800px;
            color: white;
        }

        .logo {
            width: 90px;
            height: 90px;
            object-fit: contain;
            background: white;
            padding: 8px;
            margin-bottom: 22px;
        }

        .hero h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .hero p {
            max-width: 620px;
            margin: 0 auto 25px;
            font-size: 15px;
            line-height: 1.7;
            color: #dbeafe;
        }

        .btn-login {
            display: inline-flex;
            align-items: center;
            gap: 10px;

            padding: 13px 24px;

            background: #2563eb;
            color: white;

            text-decoration: none;
            border-radius: 7px;

            font-size: 14px;
            font-weight: 600;

            transition: 0.3s;
        }

        .btn-login:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }

        .features {
            max-width: 1100px;
            margin: -55px auto 0;

            position: relative;
            z-index: 2;

            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;

            padding: 0 20px 60px;
        }

        .feature-card {
            background: white;
            border-radius: 10px;

            padding: 25px;

            box-shadow: 0 8px 25px rgba(15, 23, 42, 0.08);

            border: 1px solid #e5e7eb;
        }

        .feature-icon {
            width: 35px;
            height: 35px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #eff6ff;
            color: #2563eb;

            border-radius: 7px;

            margin-bottom: 15px;

            font-size: 16px;
        }

        .feature-card h3 {
            font-size: 16px;
            margin-bottom: 7px;
            color: #111827;
        }

        .feature-card p {
            font-size: 12px;
            line-height: 1.6;
            color: #64748b;
        }

        @media (max-width: 768px) {

            .hero {
                min-height: 500px;
            }

            .hero h1 {
                font-size: 30px;
            }

            .hero p {
                font-size: 14px;
            }

            .features {
                grid-template-columns: 1fr;
                margin-top: -30px;
            }
        }

        @media (max-width: 480px) {

            .hero {
                min-height: 530px;
            }

            .hero h1 {
                font-size: 26px;
            }

            .logo {
                width: 75px;
                height: 75px;
            }

            .features {
                padding-left: 15px;
                padding-right: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- HERO -->
    <section class="hero">

        <div class="hero-content">

            <img
                src="/images/logo-sekolah.jpeg"
                alt="Logo Sekolah"
                class="logo"
            >

            <h1>
                Sistem Absensi Pembelajaran Digital
            </h1>

            <p>
                Memudahkan Guru dan Wali Kelas mengelola absensi siswa
                secara cepat, tepat, dan terorganisir.
            </p>

            <a href="/login" class="btn-login">
            Masuk ke Sistem
            <span>→</span>
             </a>

        </div>

    </section>


    <!-- FITUR -->
    <section class="features">

        <div class="feature-card">

            <div class="feature-icon">
                ⚡
            </div>

            <h3>
                Cepat
            </h3>

            <p>
                Pencatatan hanya dalam beberapa langkah.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-icon">
                ◎
            </div>

            <h3>
                Tepat
            </h3>

            <p>
                Status akurat dan mudah divalidasi.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-icon">
                ▣
            </div>

            <h3>
                Teratur
            </h3>

            <p>
                Rekap tersimpan rapi dan siap diunduh.
            </p>

        </div>

    </section>

</body>
</html>