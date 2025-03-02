<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Define the relationship with users
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
