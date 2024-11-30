<?php

namespace App\Models;



use App\Models\MemberFamily;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Family extends Model
{
    /** @use HasFactory<\Database\Factories\FamilyFactory> */
    use HasFactory;

    protected $fillable = [
        'kk',
        'address',
        'name_family_head'
    ];


    public function memberFamily()
    {
        return $this->hasMany(MemberFamily::class, 'id_family', 'id');
    }
}
