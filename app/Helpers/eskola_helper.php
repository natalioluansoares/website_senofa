<?php
function userLogin()
{
    $db   = \Config\Database::connect();
    // $helper =  $db->table('akun_instituisaun')->where('id_user', session('id_user'))->get()->getRow();
    // return $helper;

    $builder = $db->table('akun_instituisaun');
    $builder->select('*');
    $builder->join('user_role', 'akun_instituisaun.id_role = user_role.id','role', 'left');
    $builder->where('id_user', session('id_user'));
    $query = $builder->get()->getRow(); 
    return $query; 

}

function userLoginAlunos()
{
    $db   = \Config\Database::connect();
    // $helper =  $db->table('akun_alunos')->where('id_alunos', session('id_alunos'))->get()->getRow();
    // return $helper;

    $builder = $db->table('akun_alunos');
    $builder->select('*');
    $builder->join('user_role', 'akun_alunos.alunos_role = user_role.id','role', 'left');
    $builder->join('akun_familia', 'akun_alunos.familia = akun_familia.id_familia','naran_kompleto_familia', 'left');
    $builder->join('akun_paroquia', 'akun_alunos.paroquia = akun_paroquia.id_paroquia','naran_kompleto_paroquia', 'left');
    $builder->where('id_alunos', session('id_alunos'));
    $query = $builder->get()->getRow(); 
    return $query; 

}
function userLoginParoquia()
{
    $db   = \Config\Database::connect();
    // $helper =  $db->table('akun_paroquia')->where('id_paroquia', session('id_paroquia'))->get()->getRow();
    // return $helper;

    $builder = $db->table('akun_paroquia');
    $builder->select('*');
    $builder->join('user_role', 'akun_paroquia.paroquia_role = user_role.id','role', 'left');
    $builder->where('id_paroquia', session('id_paroquia'));
    $query = $builder->get()->getRow(); 
    return $query; 

}
function userLoginFamilia()
{
    $db   = \Config\Database::connect();
    // $helper =  $db->table('akun_familia')->where('id_familia', session('id_familia'))->get()->getRow();
    // return $helper;

    $builder = $db->table('akun_familia');
    $builder->select('*');
        $builder->join('user_role', 'akun_familia.familia_role = user_role.id','role', 'left');
    $builder->where('id_familia', session('id_familia'));
    $query = $builder->get()->getRow(); 
    return $query; 

}

function Data_equipa_formador($table)
{
    $db   = \Config\Database::connect();
    return $db->table($table)->where('id_role',2)->countAllResults();
}

function Data_professores($table)
{
    $db   = \Config\Database::connect();
    return $db->table($table)->where('id_role',3)->countAllResults();
}

function Data_paroquia($table)
{
    $db   = \Config\Database::connect();
    return $db->table($table)->where('id_role',4)->countAllResults();
}

function Data_familia($table)
{
    $db   = \Config\Database::connect();
    return $db->table($table)->where('id_role',5)->countAllResults();
}
function Data_alunos($table)
{
    $db   = \Config\Database::connect();
    return $db->table($table)->where('alunos_role',7)->countAllResults();
}
function presente_professores()
    {
        $db   = \Config\Database::connect();
        $data = userLogin()->naran_kompleto; 
        $builder = $db->table('absensi');
        $builder->select('*');
        $builder->join('akun_alunos', 'absensi.absensi_alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');
        $builder->join('akun_instituisaun', 'absensi.absensi_professores = akun_instituisaun.id_user', 
        'naran_kompleto','left');
        $builder->where('absensi =', 'P');
        $builder->where('exame_periode =', 'Exame_Primeiro_Periode');
         $builder->where('naran_kompleto =', $data);
        $query = $builder->countAllResults(); 
        return $query; 
    }
function alpa_professores()
    {
        $db   = \Config\Database::connect();
        $data = userLogin()->naran_kompleto; 
        $builder = $db->table('absensi');
        $builder->select('*');
        $builder->join('akun_alunos', 'absensi.absensi_alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');
        $builder->join('akun_instituisaun', 'absensi.absensi_professores = akun_instituisaun.id_user', 
        'naran_kompleto','left');
        $builder->where('absensi =', 'A');
        $builder->where('exame_periode =', 'Exame_Primeiro_Periode');
         $builder->where('naran_kompleto =', $data);
        $query = $builder->countAllResults(); 
        return $query; 
    }
function doente_professores()
    {
        $db   = \Config\Database::connect();
        $data = userLogin()->naran_kompleto; 
        $builder = $db->table('absensi');
        $builder->select('*');
        $builder->join('akun_alunos', 'absensi.absensi_alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');
        $builder->join('akun_instituisaun', 'absensi.absensi_professores = akun_instituisaun.id_user', 
        'naran_kompleto','left');
        $builder->where('absensi =', 'D');
        $builder->where('exame_periode =', 'Exame_Primeiro_Periode');
         $builder->where('naran_kompleto =', $data);
        $query = $builder->countAllResults(); 
        return $query; 
    }
function lisenca_professores()
    {
        $db   = \Config\Database::connect();
        $data = userLogin()->naran_kompleto; 
        $builder = $db->table('absensi');
        $builder->select('*');
        $builder->join('akun_alunos', 'absensi.absensi_alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');
        $builder->join('akun_instituisaun', 'absensi.absensi_professores = akun_instituisaun.id_user', 
        'naran_kompleto','left');
        $builder->where('absensi =', 'L');
        $builder->where('exame_periode =', 'Exame_Primeiro_Periode');
         $builder->where('naran_kompleto =', $data);
        $query = $builder->countAllResults(); 
        return $query; 
    }

?>