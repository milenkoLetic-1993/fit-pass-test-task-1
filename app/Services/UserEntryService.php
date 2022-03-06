<?php

namespace App\Services;

use App\Models\Card;
use App\Models\SportFacility;
use Illuminate\Database\Eloquent\Model;

class UserEntryService
{
    public function store(SportFacility $sportFacility, Card $card): Model
    {
        return $card->user->entries()->create([
            'sport_facility_id' => $sportFacility->id,
            'entered_at' => now()
        ]);
    }
}
