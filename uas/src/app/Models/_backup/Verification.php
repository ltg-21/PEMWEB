<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pendaftar;

class Verification extends Model
{
    protected $fillable = [
        'pendaftar_id',
        'status',
        'catatan',
    ];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class);
    }
}