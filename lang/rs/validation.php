<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'object_uuid' => [
            'required' => 'Molimo unesite ID objekta.',
            'uuid' => 'Format ID-ja neispravan.',
            'exists' => 'Ne postoji objekat sa unesenim ID-jem.'
        ],
        'card_uuid' => [
            'required' => 'Molimo unesite ID kartice.',
            'uuid' => 'Format ID-ja neispravan.',
            'exists' => 'Ne postoji kartica sa unesenim ID-jem.',
            'not_belong_to_user' => 'Skenirana kartica ne pripada korisniku nasih usluga.',
            'scanned_today' => 'Skenirana kartica je vec jednom upotrebljena danas.'
        ]
    ]
];
