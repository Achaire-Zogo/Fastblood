<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeFosa extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function fosas()
    {
        return $this->hasMany(Fosa::class);
    }
}
