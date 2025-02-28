<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/DashboardController.php";
require_once "Controllers/SupplierController.php";


$route = new Router();
$route->get("/", [DashboardController::class, 'dashboard']);

// Suppliers
$route->get("/suppliers", [SupplierController::class, 'index']);


$route->route();