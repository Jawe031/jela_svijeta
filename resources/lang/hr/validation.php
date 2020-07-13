<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */
    'accepted'        => 'Polje mora biti prihvaćeno.',
    'active_url'      => 'Polje nije ispravan URL.',
    'after'           => 'Polje mora biti datum nakon :date.',
    'after_or_equal'  => 'Polje mora biti datum veći ili jednak :date.',
    'alpha'           => 'Polje smije sadržavati samo slova.',
    'alpha_dash'      => 'Polje smije sadržavati samo slova, brojeve i crtice.',
    'alpha_num'       => 'Polje smije sadržavati samo slova i brojeve.',
    'array'           => 'Polje mora biti niz.',
    'before'          => 'Polje mora biti datum prije :date.',
    'before_or_equal' => 'Polje mora biti datum manji ili jednak :date.',
    'between'         => [
        'numeric' => 'Polje mora biti između :min - :max.',
        'file'    => 'Polje mora biti između :min - :max kilobajta.',
        'string'  => 'Polje mora biti između :min - :max znakova.',
        'array'   => 'Polje mora imati između :min - :max stavki.',
    ],
    'boolean'        => 'Polje mora biti false ili true.',
    'confirmed'      => 'Potvrda polja se ne podudara.',
    'date'           => 'Polje nije ispravan datum.',
    'date_equals'    => 'Stavka mora biti jednaka :date.',
    'date_format'    => 'Polje ne podudara s formatom :format.',
    'different'      => 'Polja i :other moraju biti različita.',
    'digits'         => 'Polje mora sadržavati :digits znamenki.',
    'digits_between' => 'Polje mora imati između :min i :max znamenki.',
    'dimensions'     => 'Polje ima neispravne dimenzije slike.',
    'distinct'       => 'Polje ima dupliciranu vrijednost.',
    'email'          => 'Polje mora biti ispravna e-mail adresa.',
    'ends_with'      => 'The must end with one of the following: :values',
    'exists'         => 'Odabrano polje nije ispravno.',
    'file'           => 'Polje mora biti datoteka.',
    'filled'         => 'Polje je obavezno.',
    'gt'             => [
        'numeric' => 'Polje mora biti veće od :value.',
        'file'    => 'Polje mora biti veće od :value kilobajta.',
        'string'  => 'Polje mora biti veće od :value karaktera.',
        'array'   => 'Polje mora biti veće od :value stavki.',
    ],
    'gte' => [
        'numeric' => 'Polje mora biti veće ili jednako :value.',
        'file'    => 'Polje mora biti veće ili jednako :value kilobajta.',
        'string'  => 'Polje mora biti veće ili jednako :value znakova.',
        'array'   => 'Polje mora imati :value stavki ili više.',
    ],
    'image'    => 'Polje mora biti slika.',
    'in'       => 'Odabrano polje nije ispravno.',
    'in_array' => 'Polje ne postoji u :other.',
    'integer'  => 'Polje mora biti broj.',
    'ip'       => 'Polje mora biti ispravna IP adresa.',
    'ipv4'     => 'Polje mora biti ispravna IPv4 adresa.',
    'ipv6'     => 'Polje mora biti ispravna IPv6 adresa.',
    'json'     => 'Polje mora biti ispravan JSON string.',
    'lt'       => [
        'numeric' => 'Polje mora biti manje od :value.',
        'file'    => 'Polje mora biti manje od :value kilobajta.',
        'string'  => 'Polje mora biti manje od :value znakova.',
        'array'   => 'Polje mora biti manje od :value stavki.',
    ],
    'lte' => [
        'numeric' => 'Polje mora biti manje ili jednako :value.',
        'file'    => 'Polje mora biti manje ili jednako :value kilobajta.',
        'string'  => 'Polje mora biti manje ili jednako :value znakova.',
        'array'   => 'Polje ne smije imati više od :value stavki.',
    ],
    'max' => [
        'numeric' => 'Polje mora biti manje od :max.',
        'file'    => 'Polje mora biti manje od :max kilobajta.',
        'string'  => 'Polje mora sadržavati manje od :max znakova.',
        'array'   => 'Polje ne smije imati više od :max stavki.',
    ],
    'mimes'     => 'Polje mora biti datoteka tipa: :values.',
    'mimetypes' => 'Polje mora biti datoteka tipa: :values.',
    'min'       => [
        'numeric' => 'Polje mora biti najmanje :min.',
        'file'    => 'Polje mora biti najmanje :min kilobajta.',
        'string'  => 'Polje mora sadržavati najmanje :min znakova.',
        'array'   => 'Polje mora sadržavati najmanje :min stavki.',
    ],
    'not_in'               => 'Odabrano polje nije ispravno.',
    'not_regex'            => 'Format polja je neispravan.',
    'numeric'              => 'Polje mora biti broj.',
    'present'              => 'Polje mora biti prisutno.',
    'regex'                => 'Polje se ne podudara s formatom.',
    'required'             => 'Polje je obavezno.',
    'required_if'          => 'Polje je obavezno kada polje :other sadrži :value.',
    'required_unless'      => 'Polje je obavezno osim :other je u :values.',
    'required_with'        => 'Polje je obavezno kada postoji polje :values.',
    'required_with_all'    => 'Polje je obavezno kada postje polja :values.',
    'required_without'     => 'Polje je obavezno kada ne postoji polje :values.',
    'required_without_all' => 'Polje je obavezno kada nijedno od polja :values ne postoji.',
    'same'                 => 'Polja i :other se moraju podudarati.',
    'size'                 => [
        'numeric' => 'Polje mora biti :size.',
        'file'    => 'Polje mora biti :size kilobajta.',
        'string'  => 'Polje mora biti :size znakova.',
        'array'   => 'Polje mora sadržavati :size stavki.',
    ],
    'starts_with' => 'Stavka mora započinjati jednom od narednih stavki: :values',
    'string'      => 'Polje mora biti string.',
    'timezone'    => 'Polje mora biti ispravna vremenska zona.',
    'unique'      => 'Polje već postoji.',
    'uploaded'    => 'Polje nije uspešno učitano.',
    'url'         => 'Polje nije ispravnog formata.',
    'uuid'        => 'Stavka mora biti valjani UUID.',
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
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [],
];
