<?php

namespace App\Controllers;

use App\Models\HorariaAulaModel;
use CodeIgniter\RESTful\ResourceController;

class Familiavaloresestudante extends ResourceController
{
    protected $horario;
    protected $helpers = ['eskola'];
    public function __construct()
    {
        $this->horario = new HorariaAulaModel();
    }
    public function index()
    {
        $segunda  = $this->horario->segunda_familia();
        $terca  = $this->horario->terca_familia();
        $quarta  = $this->horario->quarta_familia();
        $quinta  = $this->horario->quinta_familia();
        $sexta  = $this->horario->sexta_familia();
        $sabado  = $this->horario->sabado_familia();
        $data = [
            'title' => 'Valores Estudante',
            'segunda' =>$segunda,
            'terca' =>$terca,
            'quarta' =>$quarta,
            'quinta' =>$quinta,
            'sexta' =>$sexta,
            'sabado' =>$sabado,
            
        ];
        return view('familia/valores/valores', $data);
    }

    
    public function show($id = null)
    {
        //
    }

    
    public function new()
    {
        //
    }

    
    public function create()
    {
        //
    }

   
    public function edit($id = null)
    {
        //
    }

    
    public function update($id = null)
    {
        //
    }

    
    public function delete($id = null)
    {
        //
    }
}
