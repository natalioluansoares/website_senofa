<?php

namespace App\Controllers;

use App\Models\FamiliaModel;
use App\Models\UserRoleModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Familia extends ResourcePresenter
{
   protected $familia;
   protected $userrole;
   protected $helpers = ['eskola'];
    public function __construct()
    {
        $this->familia = new FamiliaModel();
        $this->userrole = new UserRoleModel();
    }
    public function index()
    {
        $familia  = $this->familia->familia();
        $data = [
            'title' => 'Data familia',
            'show' => 'Table familia',
            'instituisaun' => $familia,
        ];
        return view('admin/familia/familia', $data);
    }

   
    public function show($id = null)
    {
        //
    }

    
    public function new()
    {
        $userrole = $this->userrole->where('id',5)->orderBy('id','DESC')->findAll();
        $data = [
            'title' => 'Data Familia',
            'show' => 'Aumenta Data Familia',
             'userrole' => $userrole,
        ];
        return view('admin/familia/aumenta_familia', $data);
    }

    
    public function create()
    {
        $post = $this->request->getPost();
        $insert = $this->familia->insert($post);
        if (!$insert) {
            return redirect()->back()->withInput()->with('errors',$this->familia->errors());
        }else {
            return redirect()->to(base_url('familia'))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }


    public function edit($id = null)
    {
        $userrole = $this->userrole->where('id',5)->orderBy('id','DESC')->findAll();
        $familia = $this->familia->where(['id_instituisaun' => $id])->first();
        if (is_object($familia)) {
        $data = [
            'title' => 'Data Familia',
            'show' => 'Mudansa Data Familia',
            'userrole' => $userrole,
            'familia' => $familia,
        ];
        return view('admin/familia/muda_familia', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Tidak Ditemukan');
        }
    }

    
    public function update($id = null)
    {
        $post = $this->request->getPost();
        $update = $this->familia->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->familia->errors());
        }else {
            return redirect()->to(base_url('familia'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    
    public function remove($id = null)
    {
        //
    }

    
    public function delete($id = null)
    {
        $this->familia->where('id_instituisaun',$id)->delete();
        return redirect()->to(base_url('familia'))->with('success', 'Hamos Tiha Ona Dados');
    }
}
