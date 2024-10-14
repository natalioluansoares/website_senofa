<?php

namespace App\Controllers;

use App\Models\PropinasModel;
use App\Controllers\BaseController;

class Propinasparoquia extends BaseController
{
    protected $propinas;
    protected $helpers = ['eskola'];
    public function __construct()
    {
       $this->propinas = new PropinasModel(); 
    }
    public function index()
    {
        $propinas = $this->propinas->paroquiapropinas();
        $data = [
            'title' => 'Data Propinas',
            'show' => 'Table Propinas',
            'propinas' => $propinas,
        ];
        return view('paroquia/propinas/propinas', $data); 
    }
}
