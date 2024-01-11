<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class barang extends Model
{
    protected $primaryKey = 'ID_Barang';
    protected $table = 'barang';
    protected $fillable = [
        'ID_Barang', 'Nama_Barang', 'Harga', 'Stok','ID_Kategori'
    ];
    protected $hidden = [];
}