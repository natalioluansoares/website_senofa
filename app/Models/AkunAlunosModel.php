<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunAlunosModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'akun_alunos';
    protected $primaryKey       = 'id_alunos';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['naran_kompleto_alunos', 'jenero_alunos', 'status_alunos',
    'numero_telemovel_alunos', 'fatin_moris_alunos', 'senha', 'loron_moris_alunos', 'alunos_role', 
    'familia', 'paroquia', 'tinan_tama'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
      protected $validationRules      = [
        'naran_kompleto_alunos'    => 'required',
        'jenero_alunos'            => 'required',
        'status_alunos'            => 'required',
        'fatin_moris_alunos'       => 'required',
        'loron_moris_alunos'       => 'required',
        'familia'                  => 'required',
        'paroquia'                 => 'required',
        'tinan_tama'               => 'required',
    ];
    protected $validationMessages   = [
        'naran_kompleto_alunos' => [
            'required'  => 'Dados Naran Kompleto Sei Mamuk.',
        ],
        'jenero_alunos' => [
            'required'  => 'Dados Jenero Sei Mamuk.',
        ],
        'status_alunos' => [
            'required'  => 'Dados Status Sei Mamuk.',
        ],
        'fatin_moris_alunos' => [
            'required'  => 'Dados Fatin Moris Sei Mamuk.',
        ],
        'loron_moris_alunos' => [
            'required'  => 'Dados Loron Moris Sei Mamuk.',
        ],
        'familia' => [
            'required'  => 'Dados Naran Familia Sei Mamuk.',
        ],
        'paroquia' => [
            'required'  => 'Dados Naran Padre Paroquia Sei Mamuk.',
        ],
        'tinan_tama' => [
            'required'  => 'Dados Tinan Tama Sei Mamuk.',
        ],
      
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    function akunalunos()
    {
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $propinastinan              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $propinastinan      = $tinan;
            }
        // $this->join('user_role', 'akun_alunos.alunos_role = user_role.id','role', 'left');
        $this->join('akun_paroquia', 'akun_alunos.paroquia = akun_paroquia.id_paroquia','naran_kompleto_paroquia', 'left');
        $this->join('akun_familia', 'akun_alunos.familia = akun_familia.id_familia','naran_kompleto_familia', 'left');

        $this->where('tinan_tama =', $propinastinan);
        $this->where('alunos_role =', 7);
        $this->orderBy('id_alunos', 'DESC');
        $query = $this->findAll();
        return $query;
    }

   

    function akunalunosparoquia()
    {
        $data = userLoginParoquia()->naran_kompleto_paroquia;
        $this->join('akun_paroquia', 'akun_alunos.paroquia = akun_paroquia.id_paroquia','naran_kompleto_paroquia', 'left');
        $this->where('naran_kompleto_paroquia =', $data);
        $this->orderBy('id_alunos', 'DESC');
        $query = $this->findAll();
        return $query;
    }
}
