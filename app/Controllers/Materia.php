<?php

namespace App\Controllers;

use App\Models\AkunProfessoresModel;
use App\Models\AulaModel;
use App\Models\MateriaModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Materia extends ResourcePresenter
{
   protected $professores;
   protected $aula;
   protected $materia;
    protected $helpers = ['eskola'];
    function __construct()
    {
        $this->professores = new AkunProfessoresModel();
        $this->materia = new MateriaModel();
        $this->aula = new AulaModel();
    }
    public function index()
    {
        $materia  = $this->materia->materia();
        $professores  = $this->materia->kode_materia();
        $professor  = $this->professores->akunprofessores();
        $data = [
            'title' => 'Materia Do Professores',
            'show' => 'Table Materia Do Professores',
            'materia' => $materia,
            'professores' => $professores,
            'professor' => $professor,
        ];
        return view('materia/materia', $data);
    }

   
    public function show($id = null)
    {
        $materia  = $this->materia->where('professores', $id)->materia();
        if (($materia)) {
        $data = [
            'title' => 'Materia Do Professores',
            'show' => 'Table Materia Do Professores',
            'professores' => $materia,
        ];
        return view('materia/detailmateria', $data);
         }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Link Nebe Ita Buka La Iha');
        }
    }

    public function materia($id = null)
    {
        $materia  = $this->materia->where('professores', $id)->materia();
        if (($materia)) {
        $data = [
            'title' => 'Materia Do Professores',
            'show' => 'Table Materia Do Professores',
            'professores' => $materia,
        ];
        return view('materia/detailmateria', $data);
         }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Link Nebe Ita Buka La Iha');
        }
    }
    
    public function new()
    {
        $professores    = $this->professores->where('id_role =', 3)->orderBy('id_user','DESC')->findAll();
        $aula           = $this->aula->orderBy('id_aula','DESC')->findAll();
        $data = [
            'title' => 'Data Materia',
            'show' => 'Aumenta Materia',
            'professores' => $professores,
            'aula' => $aula,
        ];
        return view('materia/aumenta_materia', $data);
    }

 
    public function create()
    {
        $kode_materia = $this->request->getPost('kode_materia');
        $materia = $this->request->getPost('materia');
        $professores = $this->request->getPost('professores');
        $aula_materia = $this->request->getPost('aula_materia');
        $loron_materia = $this->request->getPost('loron_materia');
        $horas_materia = $this->request->getPost('horas_materia');
        $dia_materia = $this->request->getPost('dia_materia');
        $tinan_akademiko = $this->request->getPost('tinan_akademiko');
        $data = [
            'kode_materia'      => $kode_materia,
            'materia'           => $materia,
            'professores'       => $professores,
            'aula_materia'      => $aula_materia,
            'loron_materia'     => $loron_materia,
            'horas_materia'     => $horas_materia,
            'dia_materia'       => $dia_materia,
            'tinan_akademiko'   => $tinan_akademiko,
        ];
        $materia = $this->materia->insert($data);
        if (!$materia) {
            // dd( $this->userrole->errors());
            return redirect()->back()->withInput()->with('errors', $this->materia->errors());
        }else{
            return redirect()->to(base_url('materia/'.$professores))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

   
    public function edit($id = null)
    {
        $professores = $this->professores->where('id_role =', 3)->orderBy('id_user','DESC')->findAll();
        $row = $this->materia->where('id_materia', $id)->first();
        $aula           = $this->aula->orderBy('id_aula','DESC')->findAll();
        if (is_object($row)) {
            $data = [
            'title'     => 'Data materia',
            'show'      => 'Mudah materia',
            'professores' => $professores,
            'aula' => $aula,
            'materia'  => $row,
        ];
        return view('materia/muda_materia', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Link Nebe Ita Buka La Iha');
        }
    }

    
    public function update($id = null)
    {
        $kode_materia = $this->request->getPost('kode_materia');
        $materia = $this->request->getPost('materia');
        $professores = $this->request->getPost('professores');
        $aula_materia = $this->request->getPost('aula_materia');
        $loron_materia = $this->request->getPost('loron_materia');
        $horas_materia = $this->request->getPost('horas_materia');
        $dia_materia = $this->request->getPost('dia_materia');
        $data = [
            'kode_materia'      => $kode_materia,
            'materia'           => $materia,
            'professores'       => $professores,
            'aula_materia'      => $aula_materia,
            'loron_materia'     => $loron_materia,
            'horas_materia'     => $horas_materia,
            'dia_materia'       => $dia_materia
        ];
        $update = $this->materia->update($id, $data);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->materia->errors());
        }else {
            return redirect()->to(base_url('materia/'.$professores))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

   
    public function remove($id = null)
    {
        //
    }

   
    public function delete($id = null)
    {
        $this->materia->where('id_materia', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }
}
