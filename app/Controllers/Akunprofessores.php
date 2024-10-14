<?php

namespace App\Controllers;

use App\Models\AkunProfessoresModel;
use App\Models\ProfessoresModel;
use App\Models\UserRoleModel;
use CodeIgniter\RESTful\ResourceController;

class Akunprofessores extends ResourceController
{
    protected $akunprofessores;
    protected $userrole;
    protected $professores;
    protected $helpers = ['eskola'];
    public function __construct()
    {
        $this->akunprofessores = new AkunProfessoresModel();
        $this->userrole = new UserRoleModel();
         $this->professores   = new ProfessoresModel();
    }
    public function index()
    {
        $akunprofessores  = $this->akunprofessores->akunprofessores();
        // print_r($formador);
        $data = [
            'title' => 'Akun Professores',
            'show' => 'Table Akun Professores',
            'instituisaun' => $akunprofessores,
        ];
        return view('admin/akun_professores/akun_professores', $data);
    }

    
    public function show($id = null)
    {
        //
    }

    
    public function new()
    {
        
        $userrole = $this->userrole->where('id', 3)->findAll();
        $professores   = $this->professores->orderBy('id_instituisaun','DESC')->where('id_role', 3)->findAll();
        $data = [
            'title'     => 'Data Professores',
            'show'      => 'Aumenta Data Professores',
            'userrole'  => $userrole,
            'professores'    => $professores,
        ];
        return view('admin/akun_professores/aumenta_akun_professores', $data);
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


            $insert = $this->akunprofessores->insert($data);
            if (!$insert) {
                return redirect()->back()->withInput()->with('errors',$this->akunprofessores->errors());
            }else {
                return redirect()->to(base_url('akunprofessores'))->with('success','Aumenta Tiha Ona Dados Foun');
            }
        }
    }

   
    public function edit($id = null)
    {
        $userrole = $this->userrole->where('id', 3)->findAll();
        $professores   = $this->professores->orderBy('id_instituisaun','DESC')->where('id_role', 3)->findAll();
        $akunprofessores = $this->akunprofessores->where(['id_user' => $id])->first();
        if (is_object($akunprofessores)) {
        $data = [
            'title' => 'Data Familia',
            'show' => 'Mudansa Data Familia',
            'userrole' => $userrole,
            'akunprofessores' => $akunprofessores,
            'professores'   => $professores,
        ];
        return view('admin/akun_professores/muda_akun_professores', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Tidak Ditemukan');
        }
    }

    
    public function update($id = null)
    {
        $post = $this->request->getPost();
        $update = $this->akunprofessores->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->akunprofessores->errors());
        }else {
            return redirect()->to(base_url('akunprofessores'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    
    public function delete($id = null)
    {
        $this->akunprofessores->where('id_user',$id)->delete();
        return redirect()->to(base_url('akunprofessores'))->with('success', 'Hamos Tiha Ona Dados');
    }
}
