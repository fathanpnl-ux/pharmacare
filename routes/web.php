<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ApotekController;
use App\Models\Pelanggan;
use App\Models\Staf;
use App\Models\Obat;

// ===============================
// HALAMAN UTAMA
// ===============================
Route::get('/', [ApotekController::class, 'index']);


// ===============================
// CRUD PELANGGAN
// ===============================

// Menampilkan data pelanggan
Route::get('/pelanggan', function () {
    $pelanggan = Pelanggan::orderBy('id', 'asc')->get();
    return view('apotek.pelanggan', compact('pelanggan'));
});

// Menyimpan data pelanggan
Route::post('/pelanggan', function (Request $request) {
    $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string',
        'no_hp' => 'required|string|max:20',
    ]);

    Pelanggan::create($request->all());

    return redirect('/pelanggan')->with('success', 'Data pelanggan berhasil disimpan!');
});

// Halaman edit pelanggan
Route::get('/pelanggan/{id}/edit', function ($id) {
    $pelanggan = Pelanggan::findOrFail($id);
    return view('apotek.edit-pelanggan', compact('pelanggan'));
});

// Update pelanggan
Route::put('/pelanggan/{id}', function (Request $request, $id) {
    $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string',
        'no_hp' => 'required|string|max:20',
    ]);

    $pelanggan = Pelanggan::findOrFail($id);
    $pelanggan->update($request->all());

    return redirect('/pelanggan')->with('success', 'Data pelanggan berhasil diperbarui!');
});

// Hapus pelanggan
Route::delete('/pelanggan/{id}', function ($id) {
    $pelanggan = Pelanggan::findOrFail($id);
    $pelanggan->delete();

    return redirect('/pelanggan')->with('success', 'Data pelanggan berhasil dihapus!');
});


// ===============================
// CRUD STAF APOTEK
// ===============================

// Menampilkan data staf
Route::get('/staf', function () {
    $staf = Staf::orderBy('id', 'asc')->get();
    return view('apotek.staf', compact('staf'));
});

// Menyimpan data staf
Route::post('/staf', function (Request $request) {
    $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string',
        'tanggal_lahir' => 'required|date',
        'tempat_lahir' => 'required|string|max:255',
        'no_hp' => 'required|string|max:20',
    ]);

    Staf::create($request->all());

    return redirect('/staf')->with('success', 'Data staf berhasil disimpan!');
});

// Halaman edit staf
Route::get('/staf/{id}/edit', function ($id) {
    $staf = Staf::findOrFail($id);
    return view('apotek.edit-staf', compact('staf'));
});

// Update staf
Route::put('/staf/{id}', function (Request $request, $id) {
    $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string',
        'tanggal_lahir' => 'required|date',
        'tempat_lahir' => 'required|string|max:255',
        'no_hp' => 'required|string|max:20',
    ]);

    $staf = Staf::findOrFail($id);
    $staf->update($request->all());

    return redirect('/staf')->with('success', 'Data staf berhasil diperbarui!');
});

// Hapus staf
Route::delete('/staf/{id}', function ($id) {
    $staf = Staf::findOrFail($id);
    $staf->delete();

    return redirect('/staf')->with('success', 'Data staf berhasil dihapus!');
});


// ===============================
// CRUD DAFTAR OBAT
// ===============================

// Menampilkan data obat
Route::get('/obat', function () {
    $obat = Obat::orderBy('id', 'asc')->get();
    return view('apotek.obat', compact('obat'));
});

// Menyimpan data obat
Route::post('/obat', function (Request $request) {
    $request->validate([
        'kode_obat' => 'required|string|max:255|unique:obats,kode_obat',
        'nama_obat' => 'required|string|max:255',
        'stok_obat' => 'required|integer|min:0',
        'tanggal_expired' => 'required|date',
    ]);

    Obat::create($request->all());

    return redirect('/obat')->with('success', 'Data obat berhasil disimpan!');
});

// Halaman edit obat
Route::get('/obat/{id}/edit', function ($id) {
    $obat = Obat::findOrFail($id);
    return view('apotek.edit-obat', compact('obat'));
});

// Update obat
Route::put('/obat/{id}', function (Request $request, $id) {
    $request->validate([
        'kode_obat' => 'required|string|max:255|unique:obats,kode_obat,' . $id,
        'nama_obat' => 'required|string|max:255',
        'stok_obat' => 'required|integer|min:0',
        'tanggal_expired' => 'required|date',
    ]);

    $obat = Obat::findOrFail($id);
    $obat->update($request->all());

    return redirect('/obat')->with('success', 'Data obat berhasil diperbarui!');
});

// Hapus obat
Route::delete('/obat/{id}', function ($id) {
    $obat = Obat::findOrFail($id);
    $obat->delete();

    return redirect('/obat')->with('success', 'Data obat berhasil dihapus!');
});