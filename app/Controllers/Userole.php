<?php

namespace App\Controllers;

use App\Models\UserRoleModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Userole extends ResourcePresenter
{
    protected $userrole;
    protected $helpers = ['eskola'];
    function __construct()
    {
        $this->userrole = new UserRoleModel();
    }
    public function index()
    {
        $userrole  = $this->userrole->orderBy('id','DESC')->findAll();
        $data = [
            'title' => 'Data Regulamento Sistema',
            'show' => 'Table Regulamento Sistema',
            'userrole' => $userrole,
        ];
        return view('admin/userrole/userrole', $data);
    }

    public function show($id = null)
    {
        //
    }

    public function new()
    {
        $data = [
            'title' => 'Data Regulamento Sistema',
            'show' => 'Aumenta Regulamento Sistema',
        ];
        return view('admin/userrole/aumenta_userrole', $data);
    }

    public function create()
    {
        $data = $this->userrole->insert($this->request->getPost());
        if (!$data) {
            // dd( $this->userrole->errors());
            return redirect()->back()->withInput()->with('errors', $this->userrole->errors());
        }else{
            return redirect()->to(base_url('userole'))->with('success','Aumenta Tiha Ona Dados Foun');
        }

    }

    public function edit($id = null)
    {
        $row = $this->userrole->where('id', $id)->first();
        if (is_object($row)) {
            $data = [
            'title'     => 'Data Regulamento Sistema',
            'show'      => 'Mudah Regulamento Sistema',
            'userrole'  => $row,
        ];
        return view('admin/userrole/muda_userrole', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Link Nebe Ita Buka La Iha');
        }
    }

    public function update($id = null)
    {
        $post = $this->request->getPost();
        $update = $this->userrole->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->userrole->errors());
        }else {
            return redirect()->to(base_url('userole'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

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
        $this->userrole->where('id', $id)->delete();
        return redirect()->to(base_url('userole'))->with('success', 'Hamos Tiha Ona Dados');
    }
}
