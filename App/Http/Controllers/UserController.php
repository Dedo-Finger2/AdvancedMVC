<?php

namespace App\Http\Controllers;
use App\Utils\Debug;

class UserController
{
    public function show(array $args)
    {
        Debug::dd($args);
    }
}
