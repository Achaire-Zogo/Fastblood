<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kirschbaum\PowerJoins\PowerJoins;

class AssociationBank extends Model
{
    use HasFactory, SoftDeletes, PowerJoins;

    protected $fillable = ['association_id', 'blood_bank_id'];

    public function association()
    {
        return $this->belongsTo(Association::class);
    }

    public function bloodbank()
    {
        return $this->belongsTo(BloodBank::class);
    }
}
