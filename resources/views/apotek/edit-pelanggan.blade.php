<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan - Sistem Informasi Apotek</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f7;
            margin: 0;
            padding: 30px;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        h2 {
            color: #008b83;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        button {
            background: #008b83;
            color: white;
            border: none;
            padding: 11px 18px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .kembali {
            color: #008b83;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <a href="/pelanggan" class="kembali">← Kembali ke Data Pelanggan</a>

    <h2>Edit Data Pelanggan</h2>
    <p>Silakan ubah informasi pelanggan berikut.</p>

    <form action="/pelanggan/{{ $pelanggan->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Pelanggan</label>
        <input type="text" name="nama"
               value="{{ old('nama', $pelanggan->nama) }}" required>

        <label>Alamat</label>
        <textarea name="alamat" required>{{ old('alamat', $pelanggan->alamat) }}</textarea>

        <label>Nomor HP</label>
        <input type="text" name="no_hp"
               value="{{ old('no_hp', $pelanggan->no_hp) }}" required>

        <button type="submit">Simpan Perubahan</button>
    </form>

</div>

</body>
</html>