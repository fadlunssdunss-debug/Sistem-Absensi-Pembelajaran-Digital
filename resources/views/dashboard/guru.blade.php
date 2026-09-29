<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Guru - Sistem Absensi</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f7fb;
            color: #1f2937;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100vh;
            background: #082a52;
            color: white;
            padding: 25px 18px;
        }

        .logo-area {
            text-align: center;
            margin-bottom: 35px;
        }

        .logo-area img {
            width: 65px;
            height: 65px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .logo-area h2 {
            font-size: 16px;
            line-height: 1.4;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .menu a {
            text-decoration: none;
            color: #dbeafe;
            padding: 13px 15px;
            border-radius: 10px;
            transition: .2s;
        }

        .menu a:hover,
        .menu a.active {
            background: #164a80;
            color: white;
        }

        /* CONTENT */
        .content {
            margin-left: 250px;
            padding: 30px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .topbar h1 {
            font-size: 27px;
            color: #082a52;
        }

        .topbar p {
            margin-top: 5px;
            color: #6b7280;
        }

        .profile {
            background: white;
            padding: 10px 16px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,.05);
        }

        /* STATISTIC */
        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 22px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,.05);
        }

        .card h3 {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 12px;
        }

        .number {
            font-size: 28px;
            font-weight: bold;
            color: #082a52;
        }

        /* SECTION */
        .section {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,.05);
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-header h2 {
            color: #082a52;
            font-size: 20px;
        }

        .btn {
            background: #082a52;
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 9px;
            font-size: 14px;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 14px 10px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }

        th {
            color: #6b7280;
            font-size: 13px;
        }

        td {
            font-size: 14px;
        }

        .status {
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .hadir {
            background: #dcfce7;
            color: #166534;
        }

        .izin {
            background: #fef3c7;
            color: #92400e;
        }

        .belum {
            background: #fee2e2;
            color: #991b1b;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {

            .sidebar {
                width: 200px;
            }

            .content {
                margin-left: 200px;
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 650px) {

            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .content {
                margin-left: 0;
                padding: 20px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            table {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo-area">

            <img src="/images/logo-sekolah.jpeg" alt="Logo Sekolah">

            <h2>
                Sistem Absensi<br>
                Pembelajaran Digital
            </h2>

        </div>

        <nav class="menu">

            <a href="/dashboard/guru" class="active">
                🏠 Dashboard
            </a>

            <a href="#">
                📅 Jadwal Hari Ini
            </a>

            <a href="#">
                👥 Daftar Siswa
            </a>

            <a href="#">
                📝 Absensi
            </a>

            <a href="#">
                📊 Rekap Absensi
            </a>

            <a href="#">
                🔔 Notifikasi
            </a>

            <a href="#">
                ⚙️ Pengaturan
            </a>

            <a href="/login">
                🚪 Keluar
            </a>

        </nav>

    </aside>


    <!-- CONTENT -->
    <main class="content">

        <div class="topbar">

            <div>
                <h1>Dashboard Guru</h1>

                <p>
                    Selamat datang kembali, Guru 👋
                </p>
            </div>

            <div class="profile">
                👨‍🏫 Guru
            </div>

        </div>


        <!-- STATISTICS -->
        <section class="stats">

            <div class="card">

                <h3>Total Kelas Hari Ini</h3>

                <div class="number">
                    4
                </div>

            </div>


            <div class="card">

                <h3>Absensi Hari Ini</h3>

                <div class="number">
                    3
                </div>

            </div>


            <div class="card">

                <h3>Belum Diabsen</h3>

                <div class="number">
                    1
                </div>

            </div>


            <div class="card">

                <h3>Total Siswa</h3>

                <div class="number">
                    128
                </div>

            </div>

        </section>


        <!-- JADWAL -->
        <section class="section">

            <div class="section-header">

                <h2>
                    Jadwal Mengajar Hari Ini
                </h2>

                <a href="#" class="btn">
                    Lihat Semua
                </a>

            </div>


            <table>

                <thead>

                    <tr>
                        <th>Jam</th>
                        <th>Mata Pelajaran</th>
                        <th>Kelas</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>

                </thead>


                <tbody>

                    <tr>

                        <td>
                            07:00 - 08:30
                        </td>

                        <td>
                            Pemrograman Web
                        </td>

                        <td>
                            IX PPLG
                        </td>

                        <td>
                            <span class="status hadir">
                                Sudah Absen
                            </span>
                        </td>

                        <td>
                            <a href="#" class="btn">
                                Detail
                            </a>
                        </td>

                    </tr>


                    <tr>

                        <td>
                            08:30 - 10:00
                        </td>

                        <td>
                            Basis Data
                        </td>

                        <td>
                            IX PPLG
                        </td>

                        <td>
                            <span class="status hadir">
                                Sudah Absen
                            </span>
                        </td>

                        <td>
                            <a href="#" class="btn">
                                Detail
                            </a>
                        </td>

                    </tr>


                    <tr>

                        <td>
                            10:15 - 11:45
                        </td>

                        <td>
                            Pemrograman Mobile
                        </td>

                        <td>
                            VIII PPLG
                        </td>

                        <td>
                            <span class="status belum">
                                Belum Absen
                            </span>
                        </td>

                        <td>
                            <a href="#" class="btn">
                                Absen
                            </a>
                        </td>

                    </tr>

                </tbody>

            </table>

        </section>

    </main>

</body>
</html>