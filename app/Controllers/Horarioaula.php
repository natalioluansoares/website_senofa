<?php

namespace App\Controllers;

use App\Models\HorariaAulaModel;

class Horarioaula extends BaseController
{
    protected $helpers = ['eskola'];
    protected $horario;
    public function __construct()
    {
        $this->horario = new HorariaAulaModel();
    }
    public function index(): string
    {
        $segunda  = $this->horario->segunda();
        $terca  = $this->horario->terca();
        $quarta  = $this->horario->quarta();
        $quinta  = $this->horario->quinta();
        $sexta  = $this->horario->sexta();
        $sabado  = $this->horario->sabado();
        $data = [
            'title' => 'Data Horario Aula',
            'segunda' =>$segunda,
            'terca' =>$terca,
            'quarta' =>$quarta,
            'quinta' =>$quinta,
            'sexta' =>$sexta,
            'sabado' =>$sabado,
            
        ];
        return view('alunos/horarioalunos/horarioaula', $data);
    }
}
