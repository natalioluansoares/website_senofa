<?php

namespace App\Controllers;

use App\Models\ProfessoresModel;
use App\Models\UserRoleModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Professores extends ResourcePresenter
{
    protected $professores;
    protected $userrole;
    protected $helpers = ['eskola'];
    public function __construct()
    {
        $this->professores = new ProfessoresModel();
        $this->userrole = new UserRoleModel();
    }
    public function index()
    {
        $professores  = $this->professores->professores();
        // print_r($formador);
        $data = [
            'title' => 'Data Professores',
            'show' => 'Table Professores',
            'instituisaun' => $professores,
        ];
        return view('admin/professores/professores', $data);
    }


    public function show($id = null)
    {
        
    }

    
    public function new()
    {
        $userrole = $this->userrole->where('id',3)->orderBy('id','DESC')->findAll();
        $data = [
            'title' => 'Data professores',
            'show' => 'Aumenta Data professores',
             'userrole' => $userrole,
        ];
        return view('admin/professores/aumenta_professores', $data);
    }

    
    public function create()
    {
        $post = $this->request->getPost();
        $insert = $this->professores->insert($post);
        if (!$insert) {
            return redirect()->back()->withInput()->with('errors',$this->professores->errors());
        }else {
            return redirect()->to(base_url('professores'))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    
    public function edit($id = null)
    {
        $userrole = $this->userrole->where('id',3)->orderBy('id','DESC')->findAll();
        $professores = $this->professores->where(['id_instituisaun' => $id])->first();
        if (is_object($professores)) {
        $data = [
            'title' => 'Data professores',
            'show' => 'Mudansa Data professores',
             'userrole' => $userrole,
             'professores' => $professores,
        ];
        return view('admin/professores/muda_professores', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Link Nebe Ita Lahetan');
        }
    }

    
    public function update($id = null)
    {
        $post = $this->request->getPost();
        $update = $this->professores->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->professores->errors());
        }else {
            return redirect()->to(base_url('professores'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    
    public function remove($id = null)
    {
        //
    }

    
    public function delete($id = null)
    {
        $this->professores->where('id_instituisaun',$id)->delete();
        return redirect()->to(base_url('professores'))->with('success', 'Hamos Tiha Ona Dados');
    }
}
