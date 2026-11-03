<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    // Menampilkan semua data obat
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Obat::all()
        ]);
    }

    // Menambahkan data obat
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_obat' => 'required|string|max:255|unique:obats,kode_obat',
            'nama_obat' => 'required|string|max:255',
            'stok_obat' => 'required|integer|min:0',
            'tanggal_expired' => 'required|date',
        ]);

        $obat = Obat::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Data obat berhasil ditambahkan',
            'data' => $obat
        ], 201);
    }

    // Menampilkan satu data obat
    public function show(string $id)
    {
        $obat = Obat::findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $obat
        ]);
    }

    // Mengubah data obat
    public function update(Request $request, string $id)
    {
        $obat = Obat::findOrFail($id);

        $validated = $request->validate([
            'kode_obat' => 'sometimes|required|string|max:255|unique:obats,kode_obat,' . $id,
            'nama_obat' => 'sometimes|required|string|max:255',
            'stok_obat' => 'sometimes|required|integer|min:0',
            'tanggal_expired' => 'sometimes|required|date',
        ]);

        $obat->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Data obat berhasil diperbarui',
            'data' => $obat
        ]);
    }

    // Menghapus data obat
    public function destroy(string $id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data obat berhasil dihapus'
        ]);
    }
}
