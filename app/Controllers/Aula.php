<?php

namespace App\Controllers;

use App\Models\AulaModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Aula extends ResourcePresenter
{
    protected $aula;
    protected $helpers = ['eskola'];
    function __construct()
    {
        $this->aula = new AulaModel();
    }
    public function index()
    {
        $aula  = $this->aula->orderBy('id_aula','DESC')->findAll();
        $data = [
            'title' => 'Data Aula',
            'show' => 'Table Aula',
            'aula' => $aula,
        ];
        return view('aula/aula', $data);
    }

    
    public function show($id = null)
    {
        //
    }

   
    public function new()
    {
         $data = [
            'title' => 'Data Aula',
            'show' => 'Aumenta Aula',
        ];
        return view('aula/aumenta_aula', $data);
    }

    
    public function create()
    {
        $data = $this->aula->insert($this->request->getPost());
        if (!$data) {
            // dd( $this->userrole->errors());
            return redirect()->back()->withInput()->with('errors', $this->aula->errors());
        }else{
            return redirect()->to(base_url('aula'))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    
    public function edit($id = null)
    {
        $row = $this->aula->where('id_aula', $id)->first();
        if (is_object($row)) {
            $data = [
            'title'     => 'Data Aula',
            'show'      => 'Mudah Aula',
            'aula'  => $row,
        ];
        return view('aula/muda_aula', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Link Nebe Ita Buka La Iha');
        }
    }

   
    public function update($id = null)
    {
        $post = $this->request->getPost();
        $update = $this->aula->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->aula->errors());
        }else {
            return redirect()->to(base_url('aula'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    
    public function remove($id = null)
    {
        //
    }

    
    public function delete($id = null)
    {
        $this->aula->where('id_aula', $id)->delete();
        return redirect()->to(base_url('aula'))->with('success', 'Hamos Tiha Ona Dados');
    }
}
