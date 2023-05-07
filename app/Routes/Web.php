<?php

use \App\Controllers\BasicController;

$router = citrus()->router();

$router->get('/', [BasicController::class, 'index']);