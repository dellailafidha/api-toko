<?php

namespace App\Models;
use illuminate\Database\Eloquent\Model;



class kategori extends Model
{
    protected $primaryKey = 'ID_Kategori';
    protected $table = 'kategori';
    protected $fillable = [
        'ID_Kategori', 'Nama_Kategori'
    ];
}