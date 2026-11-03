<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staf Apotek - PharmaCare</title>

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
            width: 245px;
            height: 100vh;
            background: #103c35;
            padding: 28px 18px;
            color: white;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 45px;
        }

        .brand-icon {
            width: 43px;
            height: 43px;
            background: #24b58b;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .brand h2 {
            font-size: 18px;
            font-weight: 800;
        }

        .brand p {
            font-size: 9px;
            color: #b5d4ca;
            margin-top: 4px;
        }

        .menu-title {
            color: #91b5a9;
            font-size: 10px;
            font-weight: 700;
            margin: 25px 10px 12px;
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
            font-size: 12px;
        }

        .nav-link:hover,
        .nav-link.active {
            background: #216b59;
            color: white;
        }

        .nav-link i {
            width: 20px;
        }

        .main {
            margin-left: 245px;
            padding: 35px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .topbar h1 {
            font-size: 24px;
            font-weight: 800;
        }

        .topbar p {
            color: #82938d;
            font-size: 12px;
            margin-top: 7px;
        }

        .profile {
            background: white;
            padding: 12px 17px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 3px 15px #163d3510;
        }

        .profile-icon {
            width: 38px;
            height: 38px;
            background: #d9f5e9;
            color: #15956d;
            border-radius: 50%;
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
            font-size: 10px;
            margin-top: 4px;
        }

        .breadcrumb {
            font-size: 12px;
            color: #82938d;
            margin-bottom: 22px;
        }

        .breadcrumb a {
            color: #15956d;
            text-decoration: none;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 360px 1fr;
            gap: 22px;
            align-items: start;
        }

        .panel {
            background: white;
            border-radius: 16px;
            padding: 25px;
            border: 1px solid #edf2ef;
            box-shadow: 0 4px 20px #163d3508;
        }

        .panel-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 22px;
        }

        .heading-icon {
            width: 43px;
            height: 43px;
            border-radius: 12px;
            background: #e6f1ff;
            color: #3983d6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .panel-heading h3 {
            font-size: 15px;
        }

        .panel-heading p {
            font-size: 10px;
            color: #82938d;
            margin-top: 5px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 12px 13px;
            border: 1px solid #e2eae6;
            border-radius: 9px;
            outline: none;
            font-family: inherit;
            font-size: 12px;
            background: #fbfdfc;
        }

        input:focus, textarea:focus {
            border-color: #20a77c;
            box-shadow: 0 0 0 3px #20a77c18;
        }

        textarea {
            resize: vertical;
            min-height: 75px;
        }

        .btn-save {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 9px;
            background: #15956d;
            color: white;
            font-weight: 700;
            font-size: 12px;
            cursor: pointer;
        }

        .btn-save:hover {
            background: #107754;
        }

        .table-panel {
            overflow: hidden;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
        }

        .table-header h3 {
            font-size: 15px;
        }

        .count {
            background: #e0f7ed;
            color: #15956d;
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
        }

        th {
            background: #f3f8f5;
            color: #61776d;
            text-align: left;
            padding: 14px 12px;
            font-size: 10px;
        }

        td {
            padding: 15px 12px;
            border-bottom: 1px solid #edf2ef;
            font-size: 11px;
        }

        tr:hover td {
            background: #fbfdfc;
        }

        .badge-id {
            background: #e6f1ff;
            color: #3983d6;
            padding: 6px 9px;
            border-radius: 7px;
            font-weight: 700;
        }

        .actions {
            display: flex;
            gap: 7px;
        }

        .btn-edit, .btn-delete {
            padding: 8px 10px;
            border-radius: 7px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 10px;
            font-weight: 700;
        }

        .btn-edit {
            background: #e6f1ff;
            color: #3983d6;
        }

        .btn-delete {
            background: #ffe9e7;
            color: #dc554b;
        }

        .alert-success {
            background: #e0f7ed;
            color: #137b58;
            padding: 13px;
            border-radius: 9px;
            font-size: 12px;
            margin-bottom: 18px;
        }

        .alert-error {
            background: #ffe9e7;
            color: #c0392b;
            padding: 13px;
            border-radius: 9px;
            font-size: 11px;
            margin-bottom: 18px;
        }

        .empty {
            text-align: center;
            color: #82938d;
            padding: 35px;
        }

        .empty i {
            font-size: 30px;
            margin-bottom: 12px;
        }

        footer {
            text-align: center;
            color: #9aa9a3;
            font-size: 10px;
            margin-top: 35px;
        }

        @media(max-width: 1100px) {
            .content-grid {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width: 700px) {
            .sidebar {
                width: 65px;
                padding: 20px 8px;
            }

            .brand div:last-child,
            .menu-title,
            .nav-link span {
                display: none;
            }

            .brand {
                justify-content: center;
            }

            .nav-link {
                justify-content: center;
                padding: 14px 5px;
            }

            .main {
                margin-left: 65px;
                padding: 20px 12px;
            }

            .profile {
                display: none;
            }

            .topbar h1 {
                font-size: 20px;
            }

            .panel {
                padding: 18px;
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

    <div class="menu-title">MENU UTAMA</div>

    <a href="/" class="nav-link">
        <i class="fa-solid fa-house"></i>
        <span>Dashboard</span>
    </a>

    <a href="/pelanggan" class="nav-link">
        <i class="fa-solid fa-users"></i>
        <span>Data Pelanggan</span>
    </a>

    <a href="/staf" class="nav-link active">
        <i class="fa-solid fa-user-doctor"></i>
        <span>Staf Apotek</span>
    </a>

    <a href="/obat" class="nav-link">
        <i class="fa-solid fa-capsules"></i>
        <span>Daftar Obat</span>
    </a>
</aside>

<main class="main">

    <div class="topbar">
        <div>
            <h1>Staf Apotek</h1>
            <p>Kelola informasi dan identitas staf apotek.</p>
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

    <div class="breadcrumb">
        <a href="/">Dashboard</a> / Staf Apotek
    </div>

    @if(session('success'))
        <div class="alert-success">
            <i class="fa-solid fa-circle-check"></i>
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert-error">
            <strong>Periksa kembali data yang dimasukkan:</strong>
            <ul style="margin:8px 0 0 18px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="content-grid">

        <section class="panel">
            <div class="panel-heading">
                <div class="heading-icon">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
                <div>
                    <h3>Tambah Staf</h3>
                    <p>Masukkan informasi staf apotek baru.</p>
                </div>
            </div>

            <form action="/staf" method="POST">
                @csrf

                <div class="form-group">
                    <label>Nama Staf</label>
                    <input type="text" name="nama"
                           value="{{ old('nama') }}"
                           placeholder="Masukkan nama staf" required>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat"
                              placeholder="Masukkan alamat staf"
                              required>{{ old('alamat') }}</textarea>
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir"
                           value="{{ old('tanggal_lahir') }}" required>
                </div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir"
                           value="{{ old('tempat_lahir') }}"
                           placeholder="Masukkan tempat lahir" required>
                </div>

                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="text" name="no_hp"
                           value="{{ old('no_hp') }}"
                           placeholder="Contoh: 081234567890" required>
                </div>

                <button type="submit" class="btn-save">
                    <i class="fa-solid fa-floppy-disk"></i>
                    Simpan Data Staf
                </button>
            </form>
        </section>

        <section class="panel table-panel">
            <div class="table-header">
                <h3>Daftar Staf Apotek</h3>
                <span class="count">
                    {{ $staf->count() }} Data
                </span>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>No. HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($staf as $data)
                            <tr>
                                <td>
                                    <span class="badge-id">#{{ $data->id }}</span>
                                </td>

                                <td><strong>{{ $data->nama }}</strong></td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                                <td>{{ $data->tempat_lahir }}</td>
                                <td>{{ $data->no_hp }}</td>

                                <td>
                                    <div class="actions">
                                        <a href="/staf/{{ $data->id }}/edit"
                                           class="btn-edit">
                                            <i class="fa-solid fa-pen"></i>
                                            Edit
                                        </a>

                                        <form action="/staf/{{ $data->id }}"
                                              method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus data staf ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn-delete">
                                                <i class="fa-solid fa-trash"></i>
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="empty">
                                    <i class="fa-solid fa-user-doctor"></i>
                                    <br>
                                    Belum ada data staf apotek.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>

    </div>

    <footer>
        © 2026 PharmaCare - Sistem Informasi Apotek
    </footer>

</main>

</body>
</html>