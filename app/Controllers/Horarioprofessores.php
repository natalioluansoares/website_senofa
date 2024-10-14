<?php

namespace App\Controllers;

use App\Models\HorariaAulaModel;
use App\Models\MateriaModel;
use App\Models\ValoresEstudanteModel;
use CodeIgniter\RESTful\ResourceController;

class Horarioprofessores extends ResourceController
{
    protected $horario;
    protected $materia;
    protected $valoresestudante;
    protected $helpers = ['eskola'];
    public function __construct()
    {
       $this->horario = new HorariaAulaModel();  
       $this->materia = new MateriaModel();
       $this->valoresestudante = new ValoresEstudanteModel();
    }
    public function index()
    {
        $kode = $this->materia->kode_materia();
        $data = [
            'title' => 'Data Kode Materia',
            'show'      => 'Aumenta Valores',
            'kode'  => $kode,
            
        ];
        return view('admin/horarioprofessores/horariomateria', $data);
    }

    public function show($id = null)
    {
      
    }

    public function new()
    {
          
    }

    public function create()
    {
        $kode_materia = $this->request->getPost('kode_materia');
        $materia = $this->request->getPost('materia');
        $alunos = $this->request->getPost('alunos');
        $professores = $this->request->getPost('professores');
        $aula_valores = $this->request->getPost('aula_valores');
        $loron_valores = $this->request->getPost('loron_valores');
        $horas_valores = $this->request->getPost('horas_valores');
        $exame_periode = $this->request->getPost('exame_periode');
        $tinan_exame = $this->request->getPost('tinan_exame');
        $valor_tpc = $this->request->getPost('valor_tpc');
        $valor_exame = $this->request->getPost('valor_exame');
        $data = [
            'kode_materia'      => $kode_materia,
            'materia'           => $materia,
            'alunos'            => $alunos,
            'professores'       => $professores,
            'aula_valores'      => $aula_valores,
            'loron_valores'     => $loron_valores,
            'horas_valores'     => $horas_valores,
            'exame_periode'     => $exame_periode,
            'tinan_exame'       => $tinan_exame,
            'valor_tpc'         => $valor_tpc,
            'valor_exame'       => $valor_exame,
        ];
        $insert = $this->valoresestudante->insert($data);
        if ($insert) {
            return redirect()->to(base_url('valoresestudantes/'.$exame_periode.'/'.$kode_materia))->with('success','Aumenta Tiha Ona Dados Foun');
        }

    }

    public function edit($id = null)
    {
        $segunda  = $this->horario->where('kode_materia',$id)->segunda_professores($id);
        // $terca  = $this->horario->where('kode_materia',$id)->terca_professores($id);
        // $quarta  = $this->horario->where('kode_materia',$id)->quarta_professores($id);
        // $quinta  = $this->horario->where('kode_materia',$id)->quinta_professores($id);
        // $sexta  = $this->horario->where('kode_materia',$id)->sexta_professores($id);
        // $sabado  = $this->horario->where('kode_materia',$id)->sabado_professores($id);
        $data = [
            'title' => 'Data Horario Aula',
            'show'      => 'Table Horario Aula',
            'segunda' =>$segunda,
            // 'terca' =>$terca,
            // 'quarta' =>$quarta,
            // 'quinta' =>$quinta,
            // 'sexta' =>$sexta,
            // 'sabado' =>$sabado,
            
        ];
        return view('admin/horarioprofessores/horarioprofessores', $data);
    }

    public function update($id = null)
    {

    }


    public function delete($id = null)
    {
        
    }

    public function valores()
    {
        $id = $this->request->getPost('id_horario');
        $exame = $this->request->getPost('valor_exame');
        $tpc = $this->request->getPost('valor_tpc');

        $data = [
            'id_horario' => $id,
            'valor_exame' => $exame,
            'valor_tpc' => $tpc,
        ];
        print_r($data);
        $update = $this->horario->update($id, $data);
        if ($update) {
            return redirect()->back()->with('success', 'Aumenta Ona Valor Estudante');
        }
    }
}
