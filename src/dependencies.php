<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
/*
php-view
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};
*/
$container['renderer'] = function ($c) {
    $view = new \Slim\Views\Twig('path/to/templates', [
        'cache' => 'path/to/cache'
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $basePath));

    return $view;

    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));
    return $logger;
};
