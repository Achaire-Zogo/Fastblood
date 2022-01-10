<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['region_id', 'department_id', 'name'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
