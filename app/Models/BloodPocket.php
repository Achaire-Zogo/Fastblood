<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BloodPocket extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['blood_group_id', 'blood_bank_id', 'serial_number', 'duree_vie'];

    public function bloodgroup()
    {
        return $this->belongsTo(BloodGroup::class);
    }

    public function bloodbank()
    {
        return $this->belongsTo(BloodBank::class);
    }

    public function pocketbanks()
    {
        return $this->hasMany(PocketBank::class);
    }
}
