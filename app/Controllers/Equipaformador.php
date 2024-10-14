<?php

namespace App\Controllers;

use App\Models\EquipaFormadorModel;
use App\Models\UserRoleModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Equipaformador extends ResourcePresenter
{
    protected $formador;
    protected $userrole;
    protected $helpers = ['eskola'];
    public  function __construct()
    {
        $this->formador = new EquipaFormadorModel();
        $this->userrole = new UserRoleModel();
    }
    public function index()
    {
        $formador  = $this->formador->equipaformador()->findAll();
        // print_r($formador);
        $data = [
            'title' => 'Data Equipa Formador',
            'show' => 'Table Equipa Formador',
            'instituisaun' => $formador,
        ];
        return view('admin/equipa_formador/equipa_formador', $data);
    }


    public function show($id = null)
    {
        //
    }

    public function new()
    {
        $userrole = $this->userrole->where('id',2)->orderBy('id','DESC')->findAll();
        $data = [
            'title' => 'Data Equipa Formador',
            'show' => 'Aumenta Data Equipa Formador',
             'userrole' => $userrole,
        ];
        return view('admin/equipa_formador/aumenta_equipa_formador', $data);
    }

    
    public function create()
    {
        $post = $this->request->getPost();
        $insert = $this->formador->insert($post);
        if (!$insert) {
            return redirect()->back()->withInput()->with('errors',$this->formador->errors());
        }else {
            return redirect()->to(base_url('equipaformador'))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $userrole = $this->userrole->where('id',2)->orderBy('id','DESC')->findAll();
        $formador = $this->formador->where(['id_instituisaun' => $id])->first();
        if (is_object($formador)) {
        $data = [
            'title' => 'Data Equipa Formador',
            'show' => 'Mudansa Data Equipa Formador',
             'userrole' => $userrole,
             'formador' => $formador,
        ];
        return view('admin/equipa_formador/muda_equipa_formador', $data);
    }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Tidak Ditemukan');
    }
    
    }

    public function update($id = null)
    {
        $post = $this->request->getPost();
        $update = $this->formador->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->formador->errors());
        }else {
            return redirect()->to(base_url('equipaformador'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
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
        $this->formador->where('id_instituisaun',$id)->delete();
        return redirect()->to(base_url('equipaformador'))->with('success', 'Hamos Tiha Ona Dados');
    }
}
