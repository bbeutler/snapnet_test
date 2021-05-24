<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ward extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lga_id'];

    public function lga():BelongsTo
    {
        return $this->belongsTo(Ward::class);
    }

    public function citizens():HasMany
    {
        return $this->hasMany(Citizen::class);
    }
}
