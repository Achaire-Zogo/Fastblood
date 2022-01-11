<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resultat extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['association_id', 'activity_id', 'nbre_personne', 'nbre_poche', 'comments'];

    public function association()
    {
        return $this->belongsTo(Association::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
