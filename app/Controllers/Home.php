<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        echo 'Route= Home::index || Controller=Home';
        return view('welcome_message');
    }
}
