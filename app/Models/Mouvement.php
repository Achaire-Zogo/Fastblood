<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kirschbaum\PowerJoins\PowerJoins;

class Mouvement extends Model
{
    use HasFactory, PowerJoins;

    protected $fillable = ['blood_bank_id', 'blood_pocket_id', 'type_mouvement', 'date_mouvement'];

    public function blood_bank()
    {
        return $this->belongsTo(BloodBank::class);
    }

    public function blood_pocket()
    {
        return $this->belongsTo(BloodPocket::class);
    }
}
