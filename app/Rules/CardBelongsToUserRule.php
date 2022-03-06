<?php

namespace App\Rules;

use App\Models\Card;
use Illuminate\Contracts\Validation\Rule;

class CardBelongsToUserRule implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return Card::uuid($value)->belongsToUser()->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return trans('validation.custom.card_uuid.not_belong_to_user');
    }
}
