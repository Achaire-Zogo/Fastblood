<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kirschbaum\PowerJoins\PowerJoins;

class Association extends Model
{
    use HasFactory, SoftDeletes, PowerJoins;

    protected $fillable = ['type_association_id', 'name', 'abbreviation',
        'responsable', 'contact' , 'siege', 'description'];

    public function typeassociation()
    {
        return $this->belongsTo(TypeAssociation::class);
    }

    public function associationbanks()
    {
        return $this->hasMany(AssociationBank::class);
    }

    public function resultats()
    {
        return $this->hasMany(Resultat::class);
    }
}
