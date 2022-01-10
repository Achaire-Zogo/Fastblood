<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function fosas()
    {
        return $this->hasMany(Fosa::class);
    }
}
