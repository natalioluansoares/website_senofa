<?php

namespace App\Controllers;

class Familiaauth extends BaseController
{
    public function index()
    {
        // return view('auth/login');
        return redirect()->to(base_url('/'));
    }

    public function login()
    {
         if (session('id_user')) {
            return redirect()->to(base_url('homefamilia'));
        }
        return view('familia_auth/familia_login');
    }

    public function processologin()
    {
        $data = $this->request->getPost();
        $query = $this->db->table('akun_familia')->getWhere(['naran_kompleto_familia'=>$data['naran_kompleto_familia']]);
        $user = $query->getRow();
        if ($user) {
            if ($user->familia_role == 5) {

                if ($user->status_familia == 'Aktivo') {
                    if (password_verify($data['senha'], $user->senha)) {
                        $params = ['id_familia' => $user->id_familia,
                                    'familia_role'  =>$user->familia_role
                                ];
                        session()->set($params);
                        return redirect()->to(site_url('homefamilia'));
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
        session()->destroy('id_familia');
        return redirect()->to(site_url('familiaauth'));

    }
}
