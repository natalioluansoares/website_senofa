<?php

namespace App\Controllers;

class Homealunos extends BaseController
{
    protected $helpers = ['eskola'];
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('alunos/homealunos/homealunos', $data);
    }
}
