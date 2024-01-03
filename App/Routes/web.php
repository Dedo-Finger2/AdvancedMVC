<?php
use App\Core\Core;
use App\Routes\Route;

require __DIR__ ."/../../vendor/autoload.php";

Route::get("/", "HomeController", "index");
Route::get("/users", "UserController", "index");
Route::get("/user/{id}/show", "UserController", "show");

