<?php

namespace App\Controllers;

use App\Models\AdministrasaunModel;
use App\Models\UserRoleModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Administrasaun extends ResourcePresenter
{

    protected $userrole;
    protected $administrasaun;
    protected $helpers = ['eskola'];
    public function __construct()
    {
        $this->userrole = new UserRoleModel();
        $this->administrasaun = new AdministrasaunModel();
    }
    public function index()
    {
        $administrasaun = $this->administrasaun->administrasaun();
        // print_r($formador);
        $data = [
            'title' => 'Data Administrasaun',
            'show' => 'Table Administrasaun',
            'instituisaun' => $administrasaun
        ];
        return view('admin/administrasaun/administrasaun', $data);
    }

   
    public function show($id = null)
    {
        
    }

   
    public function new()
    {
        $userrole = $this->userrole->where('id',6)->orderBy('id','DESC')->findAll();
        $data = [
            'title' => 'Data Administrasaun',
            'show' => 'Aumenta Data Administrasaun',
             'userrole' => $userrole,
        ];
        return view('admin/administrasaun/aumenta_administrasaun', $data);
    }

    
    public function create()
    {
        $post = $this->request->getPost();
        $insert = $this->administrasaun->insert($post);
        if (!$insert) {
            return redirect()->back()->withInput()->with('errors',$this->administrasaun->errors());
        }else {
            return redirect()->to(base_url('administrasaun'))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

  
    public function edit($id = null)
    {
        $userrole = $this->userrole->where('id',6)->orderBy('id','DESC')->findAll();
        $administrasaun = $this->administrasaun->where(['id_instituisaun' => $id])->first();
        if (is_object($administrasaun)) {
        $data = [
            'title' => 'Data Familia',
            'show' => 'Mudansa Data Familia',
            'userrole' => $userrole,
            'administrasaun' => $administrasaun,
        ];
        return view('admin/administrasaun/muda_administrasaun', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Tidak Ditemukan');
        }
    }

   
    public function update($id = null)
    {
        $post = $this->request->getPost();
        $update = $this->administrasaun->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->administrasaun->errors());
        }else {
            return redirect()->to(base_url('administrasaun'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
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
        $this->administrasaun->where('id_instituisaun',$id)->delete();
        return redirect()->to(base_url('administrasaun'))->with('success', 'Hamos Tiha Ona Dados');
    }
}
