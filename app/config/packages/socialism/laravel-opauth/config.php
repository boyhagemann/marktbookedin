<?php
/**
 * User: RiderSx
 * Date: 18.09.13
 * Time: 12:14
 */

return [
    'route' => 'auth.social',

    'opauth' => [
        'callback_transport' => 'post',

        'Strategy' => [
            'LinkedIn' => [
                'api_key' => $_SERVER['LINKEDIN_KEY'],
                'secret_key' => $_SERVER['LINKEDIN_SECRET'],
            ]
        ]
    ]
];