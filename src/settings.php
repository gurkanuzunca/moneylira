<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production

        // Renderer settings
        'renderer' => [
            'templatePath' => __DIR__ . '/../views/',
            'cachePath' => __DIR__ . '/../var/cache/twig/',
        ],

        'database' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'moneylira',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../var/logs/app.log',
        ],
    ],
];
