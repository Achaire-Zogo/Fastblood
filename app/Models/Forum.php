<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Forum extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['administrator', 'name', 'description', 'photo', 'forum_type'];

    public function administrator()
    {
        return $this->belongsTo(User::class);
    }

    public function userforums()
    {
        return $this->hasMany(UserForum::class);
    }
}
