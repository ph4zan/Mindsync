<?php

require_once "../vendor/autoload.php";
require_once '../app/helpers.php';

use Core\Router;

$router = new Router();

require_once "../routes/web.php";

$router->resolve();