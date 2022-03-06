<?php

namespace App\Http\Controllers;

use App\Http\Resources\SportFacilityResource;
use App\Models\SportFacility;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SportFacilityController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return SportFacilityResource::collection(SportFacility::all());
    }
}
