<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class Card extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeUuid(Builder $query, string $uuid)
    {
        $query->where('uuid', $uuid);
    }

    public function scopeBelongsToUser(Builder $query)
    {
        $query->whereNotNull('user_id');
    }

    public function isNotScannedTodayForFacility(SportFacility $sportFacility): bool
    {
        return $this->user()->whereHas('entries', function (Builder $query) use ($sportFacility) {
            $query
                ->where('sport_facility_id', $sportFacility->id)
                ->whereDate('entered_at', today());
        })->doesntExist();
    }
}
