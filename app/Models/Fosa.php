<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fosa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['type_fosa_id', 'region_id', 'department_id', 'name'];

    public function typefosa()
    {
        return $this->belongsTo(TypeFosa::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function bloodbanks()
    {
        return $this->hasMany(BloodBank::class);
    }
}
