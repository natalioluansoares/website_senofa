<?php

namespace App\Controllers;

use App\Models\AkunParoquiaModel;
use App\Models\ParoquiaModel;
use App\Models\UserRoleModel;
use CodeIgniter\RESTful\ResourceController;

class Akunparoquia extends ResourceController
{
    protected $akunparoquia;
    protected $paroquia;
    protected $userrole;
    protected $helpers = ['eskola'];
    public function __construct()
    {
        $this->akunparoquia = new AkunParoquiaModel();
        $this->paroquia     = new ParoquiaModel();
        $this->userrole     = new UserRoleModel();
    }
    public function index()
    {
        $akunparoquia  = $this->akunparoquia->akunparoquia();
        // print_r($formador);
        $data = [
            'title' => 'Akun paroquia',
            'show' => 'Table Akun paroquia',
            'instituisaun' => $akunparoquia,
        ];
        return view('admin/akun_paroquia/akun_paroquia', $data);
    }


    public function show($id = null)
    {
        //
    }

    
    public function new()
    {
        $userrole = $this->userrole->where('id', 4)->findAll();
        $paroquia   = $this->paroquia->orderBy('id_instituisaun','DESC')->where('id_role', 4)->findAll();
        $data = [
            'title'     => 'Data Paroquia',
            'show'      => 'Aumenta Data Paroquia',
            'userrole'  => $userrole,
            'paroquia'    => $paroquia,
        ];
        return view('admin/akun_paroquia/aumenta_akun_paroquia', $data);
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
                'paroquia_role'                 => $this->request->getPost('paroquia_role'),
                'naran_kompleto_paroquia'       => $this->request->getPost('naran_kompleto_paroquia'),
                'jenero_paroquia'               => $this->request->getPost('jenero_paroquia'),
                'senha'                         => password_hash($senha, PASSWORD_BCRYPT),
                'status_paroquia'               => $this->request->getPost('status_paroquia'),
                'paroquia'                      => $this->request->getPost('paroquia'),
                'numero_telemovel'              => $this->request->getPost('numero_telemovel'),
            ];


            $insert = $this->akunparoquia->insert($data);
            if (!$insert) {
                return redirect()->back()->withInput()->with('errors',$this->akunparoquia->errors());
            }else {
                return redirect()->to(base_url('akunparoquia'))->with('success','Aumenta Tiha Ona Dados Foun');
            }
        }
    }

    
    public function edit($id = null)
    {
        $userrole = $this->userrole->where('id', 4)->findAll();
        $paroquia   = $this->paroquia->orderBy('id_instituisaun','DESC')->where('id_role', 4)->findAll();
        $akunparoquia = $this->akunparoquia->where(['id_paroquia' => $id])->first();
        if (is_object($akunparoquia)) {
        $data = [
            'title' => 'Data Paroquia',
            'show' => 'Mudansa Data Paroquia',
            'userrole' => $userrole,
            'akunparoquia' => $akunparoquia,
            'paroquia'   => $paroquia,
        ];
        return view('admin/akun_paroquia/muda_akun_paroquia', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Tidak Ditemukan');
        }
    }

    
    public function update($id = null)
    {
        $post = $this->request->getPost();
        $update = $this->akunparoquia->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->akunparoquia->errors());
        }else {
            return redirect()->to(base_url('akunparoquia'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

 
    public function delete($id = null)
    {
        $this->akunparoquia->where('id_paroquia',$id)->delete();
        return redirect()->to(base_url('akunparoquia'))->with('success', 'Hamos Tiha Ona Dados');
    }
}
