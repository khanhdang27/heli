<?php
return [
    'client_id' => config('app.paypal_client_id'),
    'secret' => config('app.paypal_secret'),
    'settings' => array(
        'mode' => config('app.paypal_mode'),
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];
