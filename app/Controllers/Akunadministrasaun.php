<?php

namespace App\Controllers;

use App\Models\AdministrasaunModel;
use App\Models\AkunAdministrasaunModel;
use App\Models\UserRoleModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Akunadministrasaun extends ResourcePresenter
{
    protected $akunadministrasaun;
    protected $administrasaun;
    protected $userrole;
    protected $helpers = ['eskola'];
    public function __construct()
    {
        $this->akunadministrasaun = new AkunAdministrasaunModel();
        $this->administrasaun = new AdministrasaunModel();
        $this->userrole = new UserRoleModel();
    }
    
    public function index()
    {
        $akunadministrasaun  = $this->akunadministrasaun->akunadministrasaun();
        // print_r($formador);
        $data = [
            'title' => 'Akun administrasaun',
            'show' => 'Table Akun administrasaun',
            'instituisaun' => $akunadministrasaun,
        ];
        return view('admin/akun_administrasaun/akun_administrasaun', $data);
    }

    
    public function show($id = null)
    {
        //
    }

    
    public function new()
    {
        $userrole = $this->userrole->where('id',6)->orderBy('id','DESC')->findAll();
        $administrasaun  = $this->administrasaun->orderBy('id_instituisaun', 'DESC')->where('id_role', 6)->findAll();
        $data = [
            'title' => 'Data administrasaun',
            'show' => 'Aumenta Data administrasaun',
             'userrole' => $userrole,
             'administrasaun' => $administrasaun,
        ];
        return view('admin/akun_administrasaun/aumenta_akun_administrasaun', $data);
    }

    
    public function create()
    {
        $senha = $this->request->getVar('senha');
        $conf  = $this->request->getVar('conf_senha');
        if ($senha == null) {
            return redirect()->back()->with('error','Dados Senha Sei Mamuk');
        }elseif ($senha != $conf) {
            return redirect()->back()->with('error','Dados Confirmasaun Senha La Hanesan Ho Dados Senha');
        }else {
                $data = [
                'id_role'           => $this->request->getPost('id_role'),
                'naran_kompleto'    => $this->request->getPost('naran_kompleto'),
                'jenero'            => $this->request->getPost('jenero'),
                'senha'             => password_hash($senha, PASSWORD_BCRYPT),
                'status'            => $this->request->getPost('status'),
                'status_servisu'    => $this->request->getPost('status_servisu'),
                'loron_moris'       => $this->request->getPost('loron_moris'),
                'fatin_moris'       => $this->request->getPost('fatin_moris'),
                'numero_telemovel'  => $this->request->getPost('numero_telemovel'),
            ];


            $insert = $this->akunadministrasaun->insert($data);
            if (!$insert) {
                return redirect()->back()->withInput()->with('errors',$this->akunadministrasaun->errors());
            }else {
                return redirect()->to(base_url('akunadministrasaun'))->with('success','Aumenta Tiha Ona Dados Foun');
            }
        }
    }

    
    public function edit($id = null)
    {
        $userrole = $this->userrole->where('id', 6)->findAll();
        $administrasaun   = $this->administrasaun->orderBy('id_instituisaun','DESC')->where('id_role', 6)->findAll();
        $akunadministrasaun = $this->akunadministrasaun->where(['id_user' => $id])->first();
        if (is_object($akunadministrasaun)) {
        $data = [
            'title' => 'Data Paroquia',
            'show' => 'Mudansa Data Paroquia',
            'userrole' => $userrole,
            'akunadministrasaun' => $akunadministrasaun,
            'administrasaun'   => $administrasaun,
        ];
        return view('admin/akun_administrasaun/muda_akun_administrasaun', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Tidak Ditemukan');
        }
    }

   
    public function update($id = null)
    {
        $post = $this->request->getPost();
        $update = $this->akunadministrasaun->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->akunadministrasaun->errors());
        }else {
            return redirect()->to(base_url('akunadministrasaun'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    
    public function remove($id = null)
    {
        //
    }

    
    public function delete($id = null)
    {
        $this->akunadministrasaun->where('id_user',$id)->delete();
        return redirect()->to(base_url('akunadministrasaun'))->with('success', 'Hamos Tiha Ona Dados');
    }
}
