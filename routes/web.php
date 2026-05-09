<?php

use App\controllers\AppController;
use App\Controllers\HomeController;
use App\controllers\TaskApiController;

/** @var Router $router */

$router->get('/', [HomeController::class, 'index']);
$router->get('/tasks', [AppController::class, 'index']);
$router->get('/api/tasks', [TaskApiController::class, 'index']);
$router->get('/tasks{id}', [AppController::class, 'show']);
$router->post('/api/tasks', [TaskApiController::class, 'create']);
$router->patch('/api/tasks', [TaskApiController::class, 'updateStatus']);