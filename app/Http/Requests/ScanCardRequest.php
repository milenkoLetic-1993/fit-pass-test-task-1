<?php

namespace App\Http\Requests;

use App\Rules\CardBelongsToUserRule;
use App\Rules\CardIsNotScannedTodayRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ScanCardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'object_uuid' => ['required', 'uuid', 'exists:sport_facilities,uuid'],
            'card_uuid' => [
                'bail', 'required', 'uuid', 'exists:cards,uuid',
                new CardBelongsToUserRule,
                Rule::when(!is_null($this->object_uuid), [
                    new CardIsNotScannedTodayRule($this->object_uuid)
                ])
            ]
        ];
    }
}
