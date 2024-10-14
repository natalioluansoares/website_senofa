<?php

namespace App\Controllers;

class Homefamilia extends BaseController
{
    protected $helpers = ['eskola'];
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('familia/homefamilia/homefamilia', $data);
    }
}
