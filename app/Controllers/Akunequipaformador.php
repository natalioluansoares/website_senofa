<?php

namespace App\Controllers;

use App\Models\AkunEquipaFormadorModel;
use App\Models\EquipaFormadorModel;
use App\Models\UserRoleModel;
use CodeIgniter\RESTful\ResourceController;

class Akunequipaformador extends ResourceController
{
    protected $formador;
    protected $userrole;
    protected $equipa;
    protected $helpers = ['eskola'];
    public function __construct()
    {
        $this->formador = new AkunEquipaFormadorModel();
        $this->equipa   = new EquipaFormadorModel();
        $this->userrole = new UserRoleModel();
    }
    public function index()
    {
        $formador  = $this->formador->akunequipaformador();
        $data = [
            'title' => 'Akun Equipa Formador',
            'show' => 'Table Akun Equipa Formador',
            'instituisaun' => $formador,
        ];
        return view('admin/akun_equipa_formador/akun_equipa_formador', $data);
    }

    
    public function show($id = null)
    {
        //
    }

    
    public function new()
    {
        $userrole = $this->userrole->where('id', 2)->findAll();
        $equipa   = $this->equipa->orderBy('id_instituisaun','DESC')->where('id_role', 2)->findAll();
        $data = [
            'title'     => 'Data Familia',
            'show'      => 'Aumenta Data Familia',
            'userrole'  => $userrole,
            'equipa'    => $equipa,
        ];
        return view('admin/akun_equipa_formador/aumenta_akun_equipa_formador', $data);
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
                'status_servisu'    =>$this->request->getPost('status_servisu'),
                'loron_moris'       =>$this->request->getPost('loron_moris'),
                'fatin_moris'       => $this->request->getPost('fatin_moris'),
                'numero_telemovel'  => $this->request->getPost('numero_telemovel'),
            ];


            $insert = $this->formador->insert($data);
            if (!$insert) {
                return redirect()->back()->withInput()->with('errors',$this->formador->errors());
            }else {
                return redirect()->to(base_url('akunequipaformador'))->with('success','Aumenta Tiha Ona Dados Foun');
            }
        }

    }

   
    public function edit($id = null)
    {
        $userrole = $this->userrole->where('id', 2)->findAll();
        $equipa   = $this->equipa->orderBy('id_instituisaun','DESC')->where('id_role', 2)->findAll();
        $formador = $this->formador->where(['id_user' => $id])->first();
        if (is_object($formador)) {
        $data = [
            'title' => 'Data Familia',
            'show' => 'Mudansa Data Familia',
            'userrole' => $userrole,
            'formador' => $formador,
            'equipa'   => $equipa,
        ];
        return view('admin/akun_equipa_formador/muda_akun_equipa_formador', $data);
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
            return redirect()->to(base_url('akunequipaformador'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    public function delete($id = null)
    {
        $this->formador->where('id_user',$id)->delete();
        return redirect()->to(base_url('akunequipaformador'))->with('success', 'Hamos Tiha Ona Dados');
    }
}
