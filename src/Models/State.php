<?php

namespace AndroLT\Countrypkg\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getCities() : HasMany
    {
        return $this->hasMany(City::class);
    }

    public function getCountry() : BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
