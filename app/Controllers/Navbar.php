<?php

namespace App\Controllers;

class Navbar extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('navbar/navbar', $data);
    }
}
