<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/adminController/DashboardController.php";
require_once "Controllers/adminController/InventoryController.php";
require_once "Controllers/adminController/SaleController.php";
require_once "Controllers/adminController/CustomerController.php";
require_once "Controllers/adminController/UserController.php";


$route = new Router();
$route->get("/", [DashboardController::class, 'dashboard']);


// Inventory
$route->get("/inventory", [InventoryController::class, 'index']);


// Sales
$route->get("/sale", [SaleController::class, 'index']);


// Customers
$route->get("/customer", [CustomerController::class, 'index']);

// register
$route->get("/register", [UserController::class, 'register']);

// Login
$route->get("/login", [UserController::class, 'login']);


$route->route();
