<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Verification extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'status',
    ];

    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
