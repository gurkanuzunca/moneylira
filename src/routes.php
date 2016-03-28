<?php
// Routes

$app->get('/', 'Src\Controllers\HomeController:indexAction');
$app->get('/customer', 'Src\Controllers\HomeController:customerAction');