<?php

namespace App\Controllers;

class Paroquiaauth extends BaseController
{
    public function index()
    {
        // return view('auth/login');
        return redirect()->to(base_url('/'));
    }

    public function login()
    {
         if (session('id_paroquia')) {
            return redirect()->to(base_url('homepaquia'));
        }
        return view('paroquia_auth/paroquia_login');
    }

    public function processologin()
    {
        $data = $this->request->getPost();
        $query = $this->db->table('akun_paroquia')->getWhere(['naran_kompleto_paroquia'=>$data['naran_kompleto_paroquia']]);
        $user = $query->getRow();
        if ($user) {
            if ($user->paroquia_role == 4) {

                if ($user->status_paroquia == 'Aktivo') {
                    if (password_verify($data['senha'], $user->senha)) {
                        $params = ['id_paroquia' => $user->id_paroquia,
                                    'paroquia_role'  =>$user->paroquia_role
                                ];
                        session()->set($params);
                        return redirect()->to(site_url('homeparoquia'));
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
        session()->destroy('id_paroquia');
        return redirect()->to(site_url('paroquiaauth'));

    }
}
