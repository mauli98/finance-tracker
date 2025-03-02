<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens; // Added for Sanctum token generation

class User extends Authenticatable
{
    use HasApiTokens; // Added to enable token generation


    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'family_account_id', // Added for family account management
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * User roles
     */
    const ADMIN = 'admin';
    const FAMILY_MEMBER = 'family_member';
    const FAMILY_ACCOUNT = 'family_account'; // Added for family account management

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }   
    // Relationship to the family account
    public function familyAccount()
    {
        return $this->belongsTo(FamilyAccount::class);
    }

    // Method to invite a family member
    public function inviteFamilyMember(User $member)
    {
        // Logic to invite a family member
    }
}
