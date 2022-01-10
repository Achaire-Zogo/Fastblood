<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Association extends Model
{
    use HasFactory, SoftDeletes;

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
}
