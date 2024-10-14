<?php

namespace App\Controllers;

use App\Models\AlunosModel;
use App\Models\UserRoleModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Alunos extends ResourcePresenter
{
    protected $userrole;
    protected $alunos;
    protected $helpers = ['eskola'];
    public function __construct()
    {
        $this->userrole = new UserRoleModel();
        $this->alunos   = new AlunosModel();
    }
    public function index()
    {
        $alunos  = $this->alunos->alunos();
        $data = [
            'title' => 'Data Alunos',
            'show' => 'Table Alunos',
            'instituisaun' => $alunos,
        ];
        return view('admin/alunos/alunos', $data);
    }

    
    public function show($id = null)
    {
        
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        $userrole = $this->userrole->where('id',7)->orderBy('id','DESC')->findAll();
        $data = [
            'title' => 'Data Alunos',
            'show' => 'Aumenta Data Alunos',
             'userrole' => $userrole,
        ];
        return view('admin/alunos/aumenta_alunos', $data);
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $post = $this->request->getPost();
        $insert = $this->alunos->insert($post);
        if (!$insert) {
            return redirect()->back()->withInput()->with('errors',$this->alunos->errors());
        }else {
            return redirect()->to(base_url('alunos'))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    
    public function edit($id = null)
    {
        $userrole = $this->userrole->where('id',7)->orderBy('id','DESC')->findAll();
        $alunos = $this->alunos->where(['id_instituisaun' => $id])->first();
        if (is_object($alunos)) {
        $data = [
            'title' => 'Data Alunos',
            'show' => 'Mudansa Data Alunos',
            'userrole' => $userrole,
            'alunos' => $alunos,
        ];
        return view('admin/alunos/muda_alunos', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Tidak Ditemukan');
        }
    }

    
    public function update($id = null)
    {
        $post = $this->request->getPost();
        $update = $this->alunos->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->alunos->errors());
        }else {
            return redirect()->to(base_url('alunos'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->alunos->where('id_instituisaun',$id)->delete();
        return redirect()->to(base_url('alunos'))->with('success', 'Hamos Tiha Ona Dados');
    }
}
