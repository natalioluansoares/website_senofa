<?php

namespace App\Controllers;

use App\Models\AkunAlunosModel;
use App\Models\AlunosModel;
use App\Models\AkunFamiliaModel;
use App\Models\AkunParoquiaModel;
use App\Models\UserRoleModel;
use CodeIgniter\RESTful\ResourceController;

class Akunalunos extends ResourceController
{
    protected $akunalunos;
    protected $userrole;
    protected $alunos;
    protected $akunfamilia;
    protected $akunparoquia;
    protected $helpers = ['eskola'];
    public function __construct()
    {
        $this->akunalunos      = new AkunAlunosModel();
        $this->userrole        = new UserRoleModel();
        $this->alunos          = new AlunosModel();
        $this->akunfamilia     = new AkunFamiliaModel();
        $this->akunparoquia    = new AkunParoquiaModel();

    }
    public function index()
    {
        $akunalunos  = $this->akunalunos->akunalunos();
        // print_r($formador);
        $data = [
            'title' => 'Akun Alunos',
            'show' => 'Table Akun Alunos',
            'akunalunos' => $akunalunos,
        ];
        return view('admin/akun_alunos/akun_alunos', $data);
    
    }

   
    public function show($id = null)
    {
        //
    }

    
    public function new()
    {
        $userrole = $this->userrole->where('id',7)->orderBy('id','DESC')->findAll();
        $paroquia  = $this->akunparoquia->orderBy('id_paroquia', 'DESC')->where('paroquia_role', 4)->findAll();
        $familia  = $this->akunfamilia->orderBy('id_familia', 'DESC')->where('familia_role', 5)->findAll();
        $alunos  = $this->alunos->orderBy('id_instituisaun', 'DESC')->where('id_role', 7)->findAll();
        $data = [
            'title' => 'Data Alunos',
            'show' => 'Aumenta Data Alunos',
            'userrole' => $userrole,
            'alunos' => $alunos,
            'familia' => $familia,
            'paroquia' => $paroquia,
        ];
        return view('admin/akun_alunos/aumenta_akun_alunos', $data);
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
                'alunos_role'              => 7,
                'naran_kompleto_alunos'    => $this->request->getPost('naran_kompleto_alunos'),
                'jenero_alunos'            => $this->request->getPost('jenero_alunos'),
                'senha'                    => password_hash($senha, PASSWORD_BCRYPT),
                'status_alunos'            => $this->request->getPost('status_alunos'),
                'tinan_tama'               => $this->request->getPost('tinan_tama'),
                'loron_moris_alunos'       => $this->request->getPost('loron_moris_alunos'),
                'fatin_moris_alunos'       => $this->request->getPost('fatin_moris_alunos'),
                'numero_telemovel_alunos'  => $this->request->getPost('numero_telemovel_alunos'),
                'paroquia'                 => $this->request->getPost('paroquia'),
                'familia'                  => $this->request->getPost('familia'),
                'tinan_tama'               => $this->request->getPost('tinan_tama'),
            ];


            $insert = $this->akunalunos->insert($data);
            if (!$insert) {
                return redirect()->back()->withInput()->with('errors',$this->akunalunos->errors());
            }else {
                return redirect()->to(base_url('akunalunos'))->with('success','Aumenta Tiha Ona Dados Foun');
            }
        }
    }

    
    public function edit($id = null)
    {
        $userrole = $this->userrole->where('id', 7)->findAll();
        $alunos   = $this->alunos->orderBy('id_instituisaun','DESC')->where('id_role', 7)->findAll();
        $akunalunos = $this->akunalunos->where(['id_alunos' => $id])->first();
        if (is_object($akunalunos)) {
        $data = [
            'title' => 'Data Paroquia',
            'show' => 'Mudansa Data Paroquia',
            'userrole' => $userrole,
            'akunalunos' => $akunalunos,
            'alunos'   => $alunos,
        ];
        return view('admin/akun_alunos/muda_akun_alunos', $data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Tidak Ditemukan');
        }
    }

   
    public function update($id = null)
    {
        $post = $this->request->getPost();
        $update = $this->akunalunos->update($id, $post);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->akunalunos->errors());
        }else {
            return redirect()->to(base_url('akunalunos'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    
    public function delete($id = null)
    {
        $this->akunalunos->where('id_alunos',$id)->delete();
        return redirect()->to(base_url('akunalunos'))->with('success', 'Hamos Tiha Ona Dados');   
    }
}
