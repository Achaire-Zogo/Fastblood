<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kirschbaum\PowerJoins\PowerJoins;

class BloodBank extends Model
{
    use HasFactory, PowerJoins;

    protected $fillable = ['name', 'address', 'user_id', 'enabled'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bankpockets()
    {
        return $this->hasMany(BankPocket::class);
    }

    public function mouvements()
    {
        return $this->hasMany(Mouvement::class);
    }

    public function bloodbankmanager()
    {
        return $this->hasMany(BloodBankManager::class);
    }
}
