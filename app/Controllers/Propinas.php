<?php

namespace App\Controllers;

use App\Models\AkunAlunosModel;
use App\Models\AulaModel;
use App\Models\PropinasModel;
use CodeIgniter\RESTful\ResourceController;

class Propinas extends ResourceController
{
    protected $akunalunos;
    protected $propinas;
    protected $aula;
    protected $helpers = ['eskola'];
    public function __construct()
    {
     $this->akunalunos = new AkunAlunosModel();  
     $this->aula       = new AulaModel(); 
     $this->propinas   = new PropinasModel(); 
    }
    public function index()
    {
        $alunos = $this->akunalunos->akunalunos();
        $data = [
            'title' => 'Data Propinas',
            'show' => 'Table Propinas',
            'alunos' => $alunos,
        ];
        return view('admin/propinas/harepropinas', $data);
    }

   
    public function show($id = null)
    {
        $propinas = $this->propinas->where(['naran_alunos'=>$id])->propinas();
        $data = [
            'title' => 'Data Propinas',
            'show' => 'Table Propinas',
            'propinas' => $propinas,
        ];
        return view('admin/propinas/propinas', $data);
    }

    
    public function new()
    {
        $akunalunos = $this->akunalunos->akunalunos();
        $aula      = $this->aula->orderBy('id_aula', 'DESC')->findAll();
        $data = [
            'title' => 'Data Propinas',
            'show' => 'Aumenta Dados Propinas',
            'akunalunos' => $akunalunos,
            'aula' => $aula,
        ];
        return view('admin/propinas/aumenta_propinas', $data);
    }

    
    public function create()
    {
        $naran_alunos       = $this->request->getPost('naran_alunos');
        $aula_alunos        = $this->request->getPost('aula_alunos');
        $propinas           = $this->request->getPost('propinas');
        $pre_exame          = $this->request->getPost('pre_exame');
        $loron_propinas     = $this->request->getPost('loron_propinas');
        $horas_propinas     = $this->request->getPost('horas_propinas');
        $post = [
            'naran_alunos'      => $naran_alunos,
            'aula_alunos'       => $aula_alunos,
            'propinas'          => $propinas,
            'pre_exame'         => $pre_exame,
            'loron_propinas'    => $loron_propinas,
            'horas_propinas'    => $horas_propinas,
        ];
        $insert = $this->propinas->insert($post);
        if (!$insert) {
            return redirect()->back()->withInput()->with('errors',$this->propinas->errors());
        }else {
            return redirect()->to(base_url('propinas/'.$naran_alunos.'/show'))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    
    public function edit($id = null)
    {
        $akunalunos = $this->akunalunos->akunalunos();
        $aula      = $this->aula->orderBy('id_aula', 'DESC')->findAll();
        $propinas = $this->propinas->where(['id_propinas' => $id])->first();
        if (is_object($propinas)) {
        $data = [
             'title' => 'Data Propinas',
            'show' => 'Aumenta Dados Propinas',
            'akunalunos' => $akunalunos,
            'propinas' => $propinas,
            'aula' => $aula,
        ];
        return view('admin/propinas/muda_propinas', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Tidak Ditemukan');
        }
    }

    
    public function update($id = null)
    {
        
        $naran_alunos       = $this->request->getPost('naran_alunos');
        $aula_alunos        = $this->request->getPost('aula_alunos');
        $propinas           = $this->request->getPost('propinas');
        $pre_exame          = $this->request->getPost('pre_exame');
        $loron_propinas     = $this->request->getPost('loron_propinas');
        $horas_propinas     = $this->request->getPost('horas_propinas');
        $post = [
            'id_alunos'         => $id,
            'naran_alunos'      => $naran_alunos,
            'aula_alunos'       => $aula_alunos,
            'propinas'          => $propinas,
            'pre_exame'          => $pre_exame,
            'loron_propinas'    => $loron_propinas,
            'horas_propinas'    => $horas_propinas,
        ];
        $update = $this->propinas->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->propinas->errors());
        }else {
            return redirect()->to(base_url('propinas/'.$naran_alunos.'/show'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

   
    public function delete($id = null)
    {
        //
    }
}
