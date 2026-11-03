<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaCare - Sistem Informasi Apotek</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f8f7;
            color: #20332e;
        }

        .sidebar {
            position: fixed;
            width: 255px;
            height: 100vh;
            background: #103c35;
            padding: 30px 20px;
            color: white;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 45px;
        }

        .brand-icon {
            width: 45px;
            height: 45px;
            background: #24b58b;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
        }

        .brand h2 {
            font-size: 19px;
            font-weight: 800;
        }

        .brand p {
            font-size: 10px;
            color: #b5d4ca;
            margin-top: 4px;
        }

        .menu-title {
            color: #91b5a9;
            font-size: 11px;
            font-weight: 700;
            margin: 25px 10px 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 14px;
            margin-bottom: 7px;
            color: #d0e4dc;
            text-decoration: none;
            border-radius: 10px;
            font-size: 13px;
            transition: .2s;
        }

        .nav-link:hover,
        .nav-link.active {
            background: #216b59;
            color: white;
        }

        .nav-link i {
            width: 20px;
            font-size: 16px;
        }

        .main {
            margin-left: 255px;
            padding: 35px 45px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
        }

        .topbar h2 {
            font-size: 23px;
            font-weight: 800;
        }

        .topbar p {
            color: #82938d;
            font-size: 13px;
            margin-top: 7px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 12px;
            background: white;
            padding: 10px 15px;
            border-radius: 12px;
            box-shadow: 0 3px 15px #163d3510;
        }

        .profile-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #d9f5e9;
            color: #15956d;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile strong {
            font-size: 12px;
        }

        .profile small {
            display: block;
            color: #82938d;
            margin-top: 4px;
        }

        .welcome {
            background: linear-gradient(120deg, #126b53, #20a77c);
            color: white;
            border-radius: 20px;
            padding: 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .welcome h1 {
            font-size: 27px;
            margin-bottom: 12px;
        }

        .welcome p {
            font-size: 13px;
            color: #d5f3e8;
            line-height: 1.7;
        }

        .welcome-icon {
            font-size: 100px;
            opacity: .2;
            margin-right: 30px;
        }

        .section-heading {
            margin: 30px 0 18px;
        }

        .section-heading h3 {
            font-size: 18px;
            font-weight: 800;
        }

        .section-heading p {
            color: #82938d;
            font-size: 12px;
            margin-top: 7px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 4px 20px #163d3509;
            border: 1px solid #edf2ef;
            transition: .25s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px #163d3515;
        }

        .card-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 22px;
        }

        .green { background: #e0f7ed; color: #15956d; }
        .blue { background: #e6f1ff; color: #3983d6; }
        .orange { background: #fff0df; color: #e99438; }

        .card h4 {
            font-size: 16px;
            margin-bottom: 9px;
        }

        .card p {
            color: #82938d;
            font-size: 12px;
            line-height: 1.7;
            min-height: 42px;
        }

        .card a {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: #15956d;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            margin-top: 20px;
        }

        .info-box {
            background: white;
            border: 1px solid #edf2ef;
            border-radius: 16px;
            padding: 24px;
            margin-top: 25px;
        }

        .info-box h3 {
            font-size: 15px;
            margin-bottom: 10px;
        }

        .info-box p {
            color: #82938d;
            font-size: 12px;
            line-height: 1.8;
        }

        footer {
            text-align: center;
            color: #9aa9a3;
            font-size: 11px;
            margin-top: 35px;
            padding-bottom: 20px;
        }

        @media(max-width: 900px) {
            .sidebar {
                width: 75px;
                padding: 25px 10px;
            }

            .brand {
                justify-content: center;
            }

            .brand div:last-child,
            .menu-title,
            .nav-link span {
                display: none;
            }

            .nav-link {
                justify-content: center;
                padding: 15px 5px;
            }

            .main {
                margin-left: 75px;
                padding: 25px;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width: 550px) {
            .main {
                padding: 18px;
            }

            .topbar {
                align-items: flex-start;
            }

            .profile {
                display: none;
            }

            .welcome {
                padding: 25px;
            }

            .welcome h1 {
                font-size: 21px;
            }

            .welcome-icon {
                font-size: 55px;
                margin: 0;
            }
        }
    </style>
</head>

<body>

<aside class="sidebar">

    <div class="brand">
        <div class="brand-icon">
            <i class="fa-solid fa-prescription-bottle-medical"></i>
        </div>

        <div>
            <h2>PharmaCare</h2>
            <p>APOTEK MANAGEMENT</p>
        </div>
    </div>

    <div class="menu-title">Menu Utama</div>

    <a href="/" class="nav-link active">
        <i class="fa-solid fa-house"></i>
        <span>Dashboard</span>
    </a>

    <a href="/pelanggan" class="nav-link">
        <i class="fa-solid fa-users"></i>
        <span>Data Pelanggan</span>
    </a>

    <a href="/staf" class="nav-link">
        <i class="fa-solid fa-user-doctor"></i>
        <span>Staf Apotek</span>
    </a>

    <a href="/obat" class="nav-link">
        <i class="fa-solid fa-capsules"></i>
        <span>Daftar Obat</span>
    </a>

    <div class="menu-title">Informasi</div>

    <a href="/" class="nav-link">
        <i class="fa-solid fa-circle-info"></i>
        <span>Tentang Aplikasi</span>
    </a>

</aside>


<main class="main">

    <div class="topbar">
        <div>
            <h2>Dashboard</h2>
            <p>Selamat datang di sistem informasi apotek.</p>
        </div>

        <div class="profile">
            <div class="profile-icon">
                <i class="fa-solid fa-user"></i>
            </div>

            <div>
                <strong>Administrator</strong>
                <small>Admin Apotek</small>
            </div>
        </div>
    </div>


    <section class="welcome">
        <div>
            <h1>Selamat Datang di PharmaCare! 👋</h1>

            <p>
                Kelola informasi apotek dengan lebih mudah,
                cepat, dan terorganisir melalui satu platform.
                <br>
                Semua data pelanggan, staf, dan obat tersedia di sini.
            </p>
        </div>

        <div class="welcome-icon">
            <i class="fa-solid fa-hospital"></i>
        </div>
    </section>


    <div class="section-heading">
        <h3>Menu Pengelolaan</h3>
        <p>Pilih menu yang ingin kamu kelola.</p>
    </div>


    <section class="cards">

        <div class="card">
            <div class="card-icon green">
                <i class="fa-solid fa-users"></i>
            </div>

            <h4>Data Pelanggan</h4>

            <p>
                Kelola informasi pelanggan, alamat,
                dan nomor telepon dengan mudah.
            </p>

            <a href="/pelanggan">
                Kelola Pelanggan
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>


        <div class="card">
            <div class="card-icon blue">
                <i class="fa-solid fa-user-doctor"></i>
            </div>

            <h4>Staf Apotek</h4>

            <p>
                Kelola data identitas staf apotek,
                tempat lahir, dan tanggal lahir.
            </p>

            <a href="/staf">
                Kelola Staf
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>


        <div class="card">
            <div class="card-icon orange">
                <i class="fa-solid fa-capsules"></i>
            </div>

            <h4>Daftar Obat</h4>

            <p>
                Kelola kode obat, nama obat,
                jumlah stok, dan tanggal kadaluarsa.
            </p>

            <a href="/obat">
                Kelola Obat
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

    </section>


    <section class="info-box">
        <h3>
            <i class="fa-solid fa-shield-heart" style="color:#15956d"></i>
            Tentang PharmaCare
        </h3>

        <p>
            PharmaCare merupakan sistem informasi apotek yang
            dirancang untuk membantu pengelolaan data pelanggan,
            staf apotek, dan persediaan obat secara terstruktur.
            Sistem ini menyediakan fitur tambah, lihat, ubah,
            dan hapus data untuk mendukung pengelolaan informasi
            apotek secara lebih efektif.
        </p>
    </section>


    <footer>
        © 2026 PharmaCare - Sistem Informasi Apotek.
        All Rights Reserved.
    </footer>

</main>

</body>
</html>