<?php
return [
    'version'      => '1.0',
    'autoInitBean' => true,
    'bootScan'     => [
        'App\Commands',
        'App\Boot',
    ],
    'beanScan'     => [
        'App\Controllers',
        'App\Models',
        'App\Middlewares',
        'App\Tasks',
        'App\Services',
        'App\Breaker',
        'App\Pool',
        'App\Exception',
        'App\Listener',
        'App\Process',
    ],
    'I18n'         => [
        'sourceLanguage' => '@root/resources/messages/',
    ],
    'env'          => 'Base',
    'db'           => require __DIR__ . DS . 'db.php',
    'cache'        => require __DIR__ . DS . 'cache.php',
    'service'      => require __DIR__ . DS . 'service.php',
    'breaker'      => require __DIR__ . DS . 'breaker.php',
];