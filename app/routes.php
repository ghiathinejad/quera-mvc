<?php

namespace App;

use Core\Router;

Router::addRoute('/', [Controllers\HomeController::class, 'index']);
Router::addRoute('/test_view', [Controllers\HomeController::class, 'testView']);
Router::addRoute('/users', [Controllers\UserController::class, 'users']);
