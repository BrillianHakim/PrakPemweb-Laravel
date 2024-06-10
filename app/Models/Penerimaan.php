<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    use HasFactory;

    protected $table = 'penerimaan';

    protected $fillable = [
        'nama',
        'waktu_diterima',
        'no_hp',
        'alamat',
    ];
}
