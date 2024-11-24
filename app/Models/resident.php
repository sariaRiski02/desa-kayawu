<?php

namespace App\Models;

use App\Models\Lingkungan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class resident extends Model
{
    /** @use HasFactory<\Database\Factories\ResidentFactory> */
    use HasFactory;


    public function lingkungan()
    {
        return $this->belongsTo(Lingkungan::class);
    }
}
