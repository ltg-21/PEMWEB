<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_santri',
        'tanggal_lahir',
        'kelas_sd',
        'alamat',
        'nama_wali',
        'no_hp_wali',
    ];

}
