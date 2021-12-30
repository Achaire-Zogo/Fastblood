<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'enabled','blood_bank_id'];

    public function groupe_users()
    {
        return $this->hasMany(GroupeUser::class);
    }
}
