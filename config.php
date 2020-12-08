<?php

return [

    'database' => [
        'database' => 'mysql',
        'host' => '127.0.0.1',
        'dbname' => 'mytodo',
        'username' => 'sam',
        'password' => '123456',
        'options' => extension_loaded('pdo_mysql') ? array_filter([
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]) : [],
    ]
];