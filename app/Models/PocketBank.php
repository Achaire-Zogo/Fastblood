<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PocketBank extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['blood_pocket_id', 'blood_bank_id'];

    public function bloodpocket()
    {
        return $this->belongsTo(BloodPocket::class);
    }

    public function bloodbank()
    {
        return $this->belongsTo(BloodBank::class);
    }
}
