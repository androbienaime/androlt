<?php

namespace AndroLT\Countrypkg\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getState() : BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
