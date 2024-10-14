<?php

namespace App\Controllers;

class Alunosauth extends BaseController
{
    public function index()
    {
        // return view('auth/login');
        return redirect()->to(base_url('/'));
    }

    public function login()
    {
         if (session('id_alunos')) {
            return redirect()->to(base_url('homealunos'));
        }
        return view('alunos_auth/alunos_login');
    }

    public function processologin()
    {
        $data = $this->request->getPost();
        $query = $this->db->table('akun_alunos')->getWhere(['naran_kompleto_alunos'=>$data['naran_kompleto_alunos']]);
        $user = $query->getRow();
        if ($user) {
            if ($user->alunos_role == 7) {

                if ($user->status_alunos == 'Aktivo') {
                    if (password_verify($data['senha'], $user->senha)) {
                        $params = ['id_alunos' => $user->id_alunos,
                                    'alunos_role'  =>$user->alunos_role
                                ];
                        session()->set($params);
                        return redirect()->to(site_url('homealunos'));
                    }else {
                        return redirect()->back()->with('error','Senha La Los..! Ajuda Hatama Senha Seluk');
                    }
                }else {
                    return redirect()->back()->with('error','Akun Seidauk Aktiva..! Ajuda Kontakto Admin'); 
                }
            }else {
                return redirect()->back()->with('error','Ne Laos Ita Nia Akun..!');
            }
        }else{
            return redirect()->back()->with('error','Ita Nia Naran La los..! Ajuda Hatama Naran Seluk');
        }
    }
    public function logout()
    {
        session()->destroy('id_alunos');
        return redirect()->to(site_url('administrasaunauth'));

    }
}
