<?php

namespace App\Models;

use App\Models\resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lingkungan extends Model
{
    /** @use HasFactory<\Database\Factories\LingkunganFactory> */
    use HasFactory;

    protected $table = "lingkungan";

    public function resident()
    {
        return $this->hasMany(resident::class);
    }
}
