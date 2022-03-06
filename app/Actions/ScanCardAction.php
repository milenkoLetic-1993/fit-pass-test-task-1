<?php

namespace App\Actions;

use App\Http\Requests\ScanCardRequest;
use App\Models\Card;
use App\Models\SportFacility;
use App\Services\UserEntryService;
use Illuminate\Database\Eloquent\Model;

class ScanCardAction
{
    public function __construct(protected UserEntryService $userEntryService) {}

    public function __invoke(ScanCardRequest $request): Model
    {
        /** @var Card $card */
        $card = Card::with('user')->uuid($request->card_uuid)->firstOrFail();
        $sportFacility = SportFacility::uuid($request->object_uuid)->firstOrFail();

        return $this->userEntryService->store($sportFacility, $card);
    }
}
