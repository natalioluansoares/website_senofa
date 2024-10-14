<?php

namespace App\Controllers;

use App\Models\ParoquiaModel;
use App\Models\UserRoleModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Paroquia extends ResourcePresenter
{
    protected $paroquia;
    protected $userrole;
    protected $helpers = ['eskola'];
    public function __construct()
    {
        $this->paroquia = new ParoquiaModel();
        $this->userrole = new UserRoleModel();
    }
    public function index()
    {
        $paroquia  = $this->paroquia->paroquia();
        // print_r($formador);
        $data = [
            'title' => 'Data Paroquia',
            'show' => 'Table Paroquia',
            'instituisaun' => $paroquia,
        ];
        return view('admin/paroquia/paroquia', $data);
    }

   
    public function show($id = null)
    {
        
    }

   
    public function new()
    {
        $userrole = $this->userrole->where('id',4)->orderBy('id','DESC')->findAll();
        $data = [
            'title' => 'Data Paroquia',
            'show' => 'Aumenta Data Paroquia',
             'userrole' => $userrole,
        ];
        return view('admin/paroquia/aumenta_paroquia', $data);
    }

    
    public function create()
    {
        $post = $this->request->getPost();
        $insert = $this->paroquia->insert($post);
        if (!$insert) {
            return redirect()->back()->withInput()->with('errors',$this->paroquia->errors());
        }else {
            return redirect()->to(base_url('paroquia'))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    
    public function edit($id = null)
    {
        $userrole = $this->userrole->where('id',4)->orderBy('id','DESC')->findAll();
        $paroquia = $this->paroquia->where(['id_instituisaun' => $id])->first();
        if (is_object($paroquia)) {
        $data = [
            'title' => 'Data Paroquia',
            'show' => 'Mudansa Data Paroquia',
             'userrole' => $userrole,
             'paroquia' => $paroquia,
        ];
        return view('admin/paroquia/muda_paroquia', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Tidak Ditemukan');
        }
        
       
    }

    
    public function update($id = null)
    {
        $post = $this->request->getPost();
        $update = $this->paroquia->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->paroquia->errors());
        }else {
            return redirect()->to(base_url('paroquia'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    
    public function remove($id = null)
    {
        //
    }

   
    public function delete($id = null)
    {
        $this->paroquia->where('id_instituisaun',$id)->delete();
        return redirect()->to(base_url('paroquia'))->with('success', 'Hamos Tiha Ona Dados');
    }
}
