<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory,  SoftDeletes;

    protected $fillable = ['type_activity_id', 'description', 'date', 'objectif', 'lieu', 'quartier'];

    public function typeactivity()
    {
        return $this->belongsTo(TypeActivity::class);
    }

    public function partneractivities()
    {
        return $this->hasMany(PartnerActivity::class);
    }

    public function resultats()
    {
        return $this->hasMany(Resultat::class);
    }
}
