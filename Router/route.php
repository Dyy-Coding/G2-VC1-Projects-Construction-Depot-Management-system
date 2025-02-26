<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/DashboardController.php";
require_once "Controllers/InventoryController.php";


$route = new Router();
$route->get("/", [DashboardController::class, 'dashboard']);


// Inventory
$route->get("/inventory", [InventoryController::class, 'index']);

$route->route();