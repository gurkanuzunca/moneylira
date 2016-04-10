<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production

        // Renderer settings
        'renderer' => [
            'templatePath' => __DIR__ . '/../views/',
            'cachePath' => __DIR__ . '/../var/cache/twig/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../var/logs/app.log',
        ],
    ],
];
