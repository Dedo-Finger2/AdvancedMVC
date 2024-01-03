<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        // $this->render("home", "Layout", [
        //     "title" => "Home",
        //     "name" => "Greg", 
        // ]);
        $this->renderWithLayout("bootstrap", "home", [
            "title" => "Home",
            "name" => "Greg",
        ]);
    }
}
