<?php

namespace App\Controllers;

class Administratorauth extends BaseController
{
    public function index()
    {
        // return view('auth/login');
        return redirect()->to(base_url('/'));
    }

    public function login()
    {
         if (session('id_user')) {
            return redirect()->to(base_url('home'));
        }
        return view('administrator_auth/administrator_login');
    }

    public function processologin()
    {
        $data = $this->request->getPost();
        $query = $this->db->table('akun_instituisaun')->getWhere(['naran_kompleto'=>$data['naran_kompleto']]);
        $user = $query->getRow();
        if ($user) {
            if ($user->id_role == 1) {

                if ($user->status_servisu == 'Aktivo') {
                    if (password_verify($data['senha'], $user->senha)) {
                        $params = ['id_user' => $user->id_user,
                                    'id_role'  =>$user->id_role
                                ];
                        session()->set($params);
                        return redirect()->to(site_url('home'));
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
        session()->destroy('id_user');
        return redirect()->to(site_url('administratorauth'));

    }
}
