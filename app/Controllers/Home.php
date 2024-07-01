<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Ensure views are properly concatenated and handled
        // $header = view("header", ["title" => "Home"]);
        // $content = view("Home/index");

        // return $header . $content;
        return view("Hello/world");
    }

}

