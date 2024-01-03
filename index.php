<?php

use App\Core\Core;
use App\Routes\Route;
use App\Utils\Debug;

require __DIR__."/vendor/autoload.php";
include __DIR__."/App/Routes/web.php";

Core::run(Route::getRoutes());
