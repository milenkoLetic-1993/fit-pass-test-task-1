<?php

namespace App\Rules;

use App\Models\Card;
use App\Models\SportFacility;
use Illuminate\Contracts\Validation\Rule;

class CardIsNotScannedTodayRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(protected ?string $sportFacilityUuid = null){}

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        /** @var Card $card */
        $card = Card::uuid($value)->firstOrFail();
        $sportFacility = SportFacility::uuid($this->sportFacilityUuid)->firstOrFail();

        return $card->isNotScannedTodayForFacility($sportFacility);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return trans('validation.custom.card_uuid.scanned_today');
    }
}
