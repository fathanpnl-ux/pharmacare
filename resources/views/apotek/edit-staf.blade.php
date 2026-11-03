<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Staf Apotek</title>

    <style>
        * {
            box-sizing: border-box;
        }

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

        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <a href="/staf" class="kembali">← Kembali ke Data Staf</a>

    <h2>Edit Data Staf Apotek</h2>
    <p>Silakan ubah informasi staf berikut.</p>

    @if($errors->any())
        <div class="error">
            <strong>Terjadi kesalahan:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/staf/{{ $staf->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Staf</label>
        <input type="text" name="nama"
               value="{{ old('nama', $staf->nama) }}" required>

        <label>Alamat</label>
        <textarea name="alamat" required>{{ old('alamat', $staf->alamat) }}</textarea>

        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir"
               value="{{ old('tanggal_lahir', $staf->tanggal_lahir) }}"
               required>

        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir"
               value="{{ old('tempat_lahir', $staf->tempat_lahir) }}"
               required>

        <label>Nomor HP</label>
        <input type="text" name="no_hp"
               value="{{ old('no_hp', $staf->no_hp) }}"
               required>

        <button type="submit">Simpan Perubahan</button>
    </form>

</div>

</body>
</html>
