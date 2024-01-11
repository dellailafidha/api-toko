<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class barangController extends Controller
{
    public function index()
    {
        $barang = barang::all ();
        return response() ->json($barang);
    }

    public function show($id)
    {
        $barang = barang::find ($id);
        return response() ->json($barang);
    }

    public function store(Request $request)
    {
        barang::create($request->all());
        return response() ->json("Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $barang = barang::find ($id);
        $barang->update($request->all());
        return response() ->json("Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $barang = barang::find ($id);
        $barang->delete();
        return response() ->json("Berhasil Dihapus");
    }
}