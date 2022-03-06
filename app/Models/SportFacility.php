<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SportFacility extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function entries(): HasMany
    {
        return $this->hasMany(UserEntry::class);
    }

    public function scopeUuid(Builder $query, string $uuid)
    {
        $query->where('uuid', $uuid);
    }
}
