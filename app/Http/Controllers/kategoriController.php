<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class kategoriController extends Controller
{
    public function index()
    {
        $kategori = kategori::all();
        return response()->json($kategori);
    }
    public function show($id)
    {
        $kategori = kategori::find($id);
        return response()->json($kategori);
    }
    public function store(Request $request)
    {
        $kategori = kategori::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }
    public function update(Request $request, $id)
    {
        $kategori = kategori::find($id);
        $kategori->update($request->all());
        return response()->json("Berhasil diupdate");
    }
    public function destroy($id)
    {
        $kategori = kategori::find($id);
        $kategori->forceDelete();
        return response()->json("Berhasil Dihapus");
    }
}