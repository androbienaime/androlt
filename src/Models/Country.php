<?php

namespace AndroLT\Countrypkg\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getStates() : HasMany
    {
        return $this->hasMany(State::class);
    }
}
