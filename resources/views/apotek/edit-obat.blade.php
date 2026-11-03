<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Obat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f8;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            box-sizing: border-box;
        }

        button {
            background: #008b8b;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        a {
            color: #008b8b;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Data Obat</h2>

    <form action="/obat/{{ $obat->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Kode Obat</label>
        <input type="text" name="kode_obat"
               value="{{ $obat->kode_obat }}" required>

        <label>Nama Obat</label>
        <input type="text" name="nama_obat"
               value="{{ $obat->nama_obat }}" required>

        <label>Stok Obat</label>
        <input type="number" name="stok_obat"
               value="{{ $obat->stok_obat }}" min="0" required>

        <label>Tanggal Kadaluarsa</label>
        <input type="date" name="tanggal_expired"
               value="{{ $obat->tanggal_expired }}" required>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <br>
    <a href="/obat">Kembali</a>
</div>

</body>
</html>