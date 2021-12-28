<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'owner_id', 'description', 'enabled'];

    public function groupe_users()
    {
        return $this->hasMany(GroupeUser::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
