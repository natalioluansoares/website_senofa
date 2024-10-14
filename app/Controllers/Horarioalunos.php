<?php

namespace App\Controllers;

use App\Models\AkunProfessoresModel;
use App\Models\HorariaAulaModel;
use App\Models\MateriaModel;
use App\Models\ValoresEstudanteModel;
use CodeIgniter\RESTful\ResourceController;

class Horarioalunos extends ResourceController
{
   protected $professores;
   protected $valores;
   protected $materia;
   protected $horario;
    protected $helpers = ['eskola'];
    function __construct()
    {
        $this->professores = new AkunProfessoresModel();
        $this->materia = new MateriaModel();
        $this->valores = new ValoresEstudanteModel();
        $this->horario = new HorariaAulaModel();
    }
    public function index()
    {
        $segunda    = $this->materia->segunda();
        $terca      = $this->materia->terca();
        $quarta     = $this->materia->quarta();
        $quinta     = $this->materia->quinta();
        $sexta      = $this->materia->sexta();
        $sabado     = $this->materia->sabado();
        $data = [
            'title'     => 'Data Materia',
            'show'      => 'Table Materia',
            'segunda'   =>$segunda,
            'terca'     =>$terca,
            'quarta'    =>$quarta,
            'quinta'    =>$quinta,
            'sexta'     =>$sexta,
            'sabado'    =>$sabado,
        ];
        return view('alunos/horarioalunos/horarioalunos', $data);
    }

    public function show($id = null)
    {
        //
    }

    public function new()
    {
     
        $horario = $this->horario->findAll();
        $data = [
            'title' => 'Valores Estudante',
            'horario' => $horario
           
            
        ];
        return view('alunos/horarioalunos/valores', $data);
    }

   
    public function create()
    {
        $post = $this->request->getPost();
        $this->horario->insert($post);
        return redirect()->to(base_url('horarioalunos'))->with('success','Aumenta Tiha Ona Dados Foun');
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
        
    }
    public function valores_primeiro_periodo($exame = null, $tinan = null)
    {
        $segunda    = $this->valores->where(['exame_periode'=>$exame, 'tinan_exame'=>$tinan])->valores_sequnda_primeiro();
        $terca      = $this->valores->where(['exame_periode'=>$exame, 'tinan_exame'=>$tinan])->valores_terca_primeiro();
        $quarta     = $this->valores->where(['exame_periode'=>$exame, 'tinan_exame'=>$tinan])->valores_quarta_primeiro();
        $quinta     = $this->valores->where(['exame_periode'=>$exame, 'tinan_exame'=>$tinan])->valores_quinta_primeiro();
        $sexta      = $this->valores->where(['exame_periode'=>$exame, 'tinan_exame'=>$tinan])->valores_sexta_primeiro();
        $sabado     = $this->valores->where(['exame_periode'=>$exame, 'tinan_exame'=>$tinan])->valores_sabado_primeiro();
        $data = [
            'title' => 'Valores Estudante',
            'segunda' =>$segunda,
            'terca' =>$terca,
            'quarta' =>$quarta,
            'quinta' =>$quinta,
            'sexta' =>$sexta,
            'sabado' =>$sabado,

           
            
        ];
        return view('alunos/horarioalunos/harevalores', $data);
    }
}
