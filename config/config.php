<?php
return [


    /*
    |--------------------------------------------------------------------------
    | FTP Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the FTP connections setup for your application.
    |
    */

    'connections' => [
        'default' => [
            'host'   => 'localhost',
            'port'  => 21,
            'username' => '',
            'password'   => '',
            'timeout'   => 90,
            'passive'   => false,
            'debug'   => false,
            'secure' => false,
            'ssl_mode' => false,
        ],
    ],
];
