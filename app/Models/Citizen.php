<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Citizen extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'gender', 'address', 'phone', 'ward_id'];

    public function ward():BelongsTo
    {
        return $this->belongsTo(Ward::class);
    }
}
