<?php

return [
    'dependencies' => [
        'factories' => [
            'DBAL' => App\Factory\DBALFactory::class,
            App\Actions\GetAction::class => App\Factory\ActionFactory::class
        ]
    ],
    'database' => [
        'dbname' => 'expressive-curso',
        'user' => 'root',
        'password' => '',
        'host' => 'localhost',
        'driver' => 'pdo_mysql'
    ]
];
