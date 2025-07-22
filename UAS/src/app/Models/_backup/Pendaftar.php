<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Verification;

class Pendaftar extends Model
{
    protected $table = 'pendaftars';

    protected $fillable = [
        'nama_santri',
        'tanggal_lahir',
        'kelas_sd',
        'alamat',
        'nama_wali',
        'no_hp_wali',
    ];

    /**
     * Relasi ke tabel verifications
     */
    public function verification()
    {
        return $this->hasOne(Verification::class);
    }
}