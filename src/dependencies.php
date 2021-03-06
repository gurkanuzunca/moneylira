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
    $settings = $c->get('settings')['renderer'];


    $view = new Slim\Views\Twig($settings['templatePath'], [
        //'cache' => $settings['cachePath']
    ]);

    $view->addExtension(new Src\Support\TwigExtension\Common());

    return $view;
};


$container['database'] = function ($c) {
    $settings = $c->get('settings')['database'];

    $capsule = new Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($settings);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};

$container['repository'] = function ($c) {
    $settings = $c->get('settings')['repository'];
    $repository = new Src\Support\RepositoryManager($c, $settings);

    return $repository;
};


// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));

    return $logger;
};

