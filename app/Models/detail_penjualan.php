<?php

namespace App\Models;
use illuminate\Database\Eloquent\Model;



class detail_penjualan extends Model
{
    protected $primarykey = 'ID_Detail';
    protected $table = 'detail_penjualan';
    protected $fillable = [
        'ID_Detail', 'ID_Penjualan', 'ID_Barang', 'Jumlah', 'Harga_Jual'
    ];
    protected $hidden = [];
}