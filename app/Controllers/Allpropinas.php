<?php

namespace App\Controllers;

use App\Models\PropinasModel;

class Allpropinas extends BaseController
{
    protected $helpers = ['eskola'];
    protected $propinas;
    public function __construct()
    {
     $this->propinas   = new PropinasModel(); 
    }
    public function index(): string
    {
        $propinas = $this->propinas->allpropinas();
        $data = [
            'title' => 'Table Propinas',
            'show' => 'Propinas Estudante SENOFA',
            'propinas' => $propinas,
        ];
        return view('admin/propinas/propinas_estudante', $data);
    }
}
