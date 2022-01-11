<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartnerActivity extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['activity_id', 'partner_id'];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
