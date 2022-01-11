<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kirschbaum\PowerJoins\PowerJoins;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'telephone',
        'role_id',
        'email',
        'password',
        'enabled',
        'profile_picture',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function bloodbanks()
    {
        return $this->hasMany(BloodBank::class);
    }

    public function demands()
    {
        return $this->hasMany(Demand::class);
    }

    public function forums()
    {
        return $this->hasMany(Forum::class);
    }

    public function userforums()
    {
        return $this->hasMany(UserForum::class);
    }

    public function userbanks()
    {
        return $this->hasMany(UserBank::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
