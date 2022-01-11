<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mouvement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['blood_pocket_id', 'type_mouvement'];

    public function bloodpocket()
    {
        return $this->belongsTo(BloodPocket::class);
    }
}
