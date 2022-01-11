<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BloodBank extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['fosa_id', 'name', 'contact', 'status'];

    public function fosa()
    {
        return $this->belongsTo(Fosa::class);
    }

    public function bloodpockets()
    {
        return $this->hasMany(BloodPocket::class);
    }

    public function userbanks()
    {
        return $this->hasMany(UserBank::class);
    }

    public function pocketbanks()
    {
        return $this->hasMany(PocketBank::class);
    }

    public function associationbanks()
    {
        return $this->hasMany(AssociationBank::class);
    }
}
