<?php

namespace App\Http\Controllers;

use App\Http\Resources\CardResource;
use App\Models\Card;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CardController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return CardResource::collection(Card::all());
    }
}
