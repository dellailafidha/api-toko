<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penjualan;

class penjualanController extends Controller
{
    public function index()
    {
        $penjualan = penjualan::all();
        return response()->json($penjualan);
    }
    public function show($id)
    {
        $penjualan = penjualan::find($id);
        return response()->json($penjualan);
    }
    public function store(Request $request)
    {
        $penjualan = penjualan::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }
    public function update(Request $request, $id)
    {
        $penjualan = penjualan::find($id);
        $penjualan->update($request->all());
        return response()->json("Berhasil diupdate");
    }
    public function destroy($id)
    {
        $penjualan = penjualan::find($id);
        $penjualan->delete();
        return response()->json("Berhasil Dihapus");
    }
}