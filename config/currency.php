<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Currency Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains the currency settings for the application.
    |
    */

    'default_currency' => env('CURRENCY_DEFAULT', 'BDT'),
    
    'currency_symbol' => env('CURRENCY_SYMBOL', 'Taka'),
    
    'currency_position' => env('CURRENCY_POSITION', 'after'), // 'before' or 'after'
    
    'decimal_places' => env('CURRENCY_DECIMAL_PLACES', 2),
    
    'thousands_separator' => env('CURRENCY_THOUSANDS_SEPARATOR', ','),
    
    'decimal_separator' => env('CURRENCY_DECIMAL_SEPARATOR', '.'),
    
    'currencies' => [
        'BDT' => [
            'name' => 'Bangladeshi Taka',
            'symbol' => 'Taka',
            'code' => 'BDT',
            'position' => 'after',
        ],
        'USD' => [
            'name' => 'US Dollar',
            'symbol' => '$',
            'code' => 'USD',
            'position' => 'before',
        ],
    ],
];

