<?php 
/**
 * This is main route file 
 * All application routes are added here
 */
use Src\Core\Router;
use Src\App\Controllers\ToDoController;

$router = new Router;

$router->add("/php-todo", [ToDoController::class, "index"]);
$router->add("/php-todo/create", [ToDoController::class, "create"]);
$router->add("/php-todo/store", [ToDoController::class, "store"]);
$router->add("/php-todo/edit/{id}", [ToDoController::class, "edit"]);
$router->add("/php-todo/update/{id}", [ToDoController::class, "update"]);
$router->add("/php-todo/delete/{id}", [ToDoController::class, "delete"]);
$router->add("/php-todo/complete_task/{id}", [ToDoController::class, "completeTask"]);