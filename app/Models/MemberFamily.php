<?php

namespace App\Models;

use App\Models\Family;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MemberFamily extends Model
{
    /** @use HasFactory<\Database\Factories\MemberFamilyFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
        'id_family',
    ];


    public function family()
    {
        return $this->belongsTo(Family::class, 'id_family', 'id');
    }
}
