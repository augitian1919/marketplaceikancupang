<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama_ikan',
        'jenis',
        'stok',
        'harga',
        'deskripsi',
        'foto'
    ];
}