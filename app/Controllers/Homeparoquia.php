<?php

namespace App\Controllers;

class Homeparoquia extends BaseController
{
    protected $helpers = ['eskola'];
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('paroquia/homeparoquia/homeparoquia', $data);
    }
}
