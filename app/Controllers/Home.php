<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $helpers = ['eskola'];
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('dashboard/dashboard', $data);
    }
}
