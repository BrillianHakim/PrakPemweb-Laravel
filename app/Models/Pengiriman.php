<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table = 'Pengiriman';
    protected $primaryKey = 'id_pengiriman';
    public $incrementing = true;
    protected $fillable = ['nama_pengiriman', 'nomer_telepon', 'jenis_barang','berat_barang','tujuan_barang'];
    public $timestamps = false;
}


