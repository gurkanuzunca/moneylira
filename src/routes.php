<?php
// Routes

$app->get('/{id}', 'Src\Controllers\HomeController:indexAction');

/*
$app->get('/index', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
*/