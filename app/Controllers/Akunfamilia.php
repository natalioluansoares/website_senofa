<?php

namespace App\Controllers;

use App\Models\AkunFamiliaModel;
use App\Models\FamiliaModel;
use App\Models\UserRoleModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Akunfamilia extends ResourcePresenter
{
    protected $akunfamilia;
    protected $familia;
    protected $userrole;
    protected $helpers = ['eskola'];
    public function __construct()
    {
        $this->akunfamilia  = new AkunFamiliaModel();
        $this->familia      = new FamiliaModel();
        $this->userrole      = new UserRoleModel();

    }
    public function index()
    {
        $akunfamilia  = $this->akunfamilia->akunfamilia();
        // print_r($formador);
        $data = [
            'title' => 'Akun familia',
            'show' => 'Table Akun familia',
            'instituisaun' => $akunfamilia,
        ];
        return view('admin/akun_familia/akun_familia', $data);
    }

    
    public function show($id = null)
    {

    }


    public function new()
    {
       
        $userrole = $this->userrole->where('id',5)->orderBy('id','DESC')->findAll();
        $familia  = $this->familia->orderBy('id_instituisaun', 'DESC')->where('id_role', 5)->findAll();
        $data = [
            'title' => 'Data Familia',
            'show' => 'Aumenta Data Familia',
             'userrole' => $userrole,
             'familia' => $familia,
        ];
        return view('admin/akun_familia/aumenta_akun_familia', $data);
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
                'familia_role'                 => $this->request->getPost('familia_role'),
                'naran_kompleto_familia'       => $this->request->getPost('naran_kompleto_familia'),
                'jenero_familia'               => $this->request->getPost('jenero_familia'),
                'senha'                        => password_hash($senha, PASSWORD_BCRYPT),
                'status_familia'               => $this->request->getPost('status_familia'),
                'posto_administrativo'         => $this->request->getPost('posto_administrativo'),
                'numero_telemovel'             => $this->request->getPost('numero_telemovel'),
            ];


            $insert = $this->akunfamilia->insert($data);
            if (!$insert) {
                return redirect()->back()->withInput()->with('errors',$this->akunfamilia->errors());
            }else {
                return redirect()->to(base_url('akunfamilia'))->with('success','Aumenta Tiha Ona Dados Foun');
            }
        }
    }

   
    public function edit($id = null)
    {
        $userrole = $this->userrole->where('id', 5)->findAll();
        $familia   = $this->familia->orderBy('id_instituisaun','DESC')->where('id_role', 5)->findAll();
        $akunfamilia = $this->akunfamilia->where(['id_familia' => $id])->first();
        if (is_object($akunfamilia)) {
        $data = [
            'title' => 'Data familia',
            'show' => 'Mudansa Data familia',
            'userrole' => $userrole,
            'akunfamilia' => $akunfamilia,
            'familia'   => $familia,
        ];
        return view('admin/akun_familia/muda_akun_familia', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Tidak Ditemukan');
        }
    }

    
    public function update($id = null)
    {
        $post = $this->request->getPost();
        $update = $this->akunfamilia->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->akunfamilia->errors());
        }else {
            return redirect()->to(base_url('akunfamilia'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

   
    public function remove($id = null)
    {
        
    }

    
    public function delete($id = null)
    {
        $this->akunfamilia->where('id_familia',$id)->delete();
        return redirect()->to(base_url('akunfamilia'))->with('success', 'Hamos Tiha Ona Dados');
    }
}
