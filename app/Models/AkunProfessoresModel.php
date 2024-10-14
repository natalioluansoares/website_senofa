<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunProfessoresModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'akun_instituisaun';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['naran_kompleto', 'jenero', 'status', 'status_servisu', 'numero_telemovel', 'fatin_moris', 'senha', 'loron_moris', 'id_role'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
   protected $validationRules      = [
        'naran_kompleto'    => 'required',
        'jenero'            => 'required',
        'status'            => 'required',
        'status_servisu'    => 'required',
        'fatin_moris'       => 'required',
        'loron_moris'       => 'required',
        'numero_telemovel'  => 'required',
        'id_role'           => 'required',
    ];
    protected $validationMessages   = [
        'naran_kompleto' => [
            'required'  => 'Dados Naran Kompleto Sei Mamuk.',
        ],
        'jenero' => [
            'required'  => 'Dados Jenero Sei Mamuk.',
        ],
        'status' => [
            'required'  => 'Dados Status Sei Mamuk.',
        ],
        'status_servisu'=> [
            'required'  => 'Dados Status Servisu Sei Mamuk.',
        ],
        'fatin_moris' => [
            'required'  => 'Dados Fatin Moris Sei Mamuk.',
        ],
        'numero_telemovel' => [
            'required'  => 'Dados Numero Telemovel Sei Mamuk.',
        ],
        'loron_moris' => [
            'required'  => 'Dados Loron Moris Sei Mamuk.',
        ],
        'id_role' => [
            'required'  => 'Dados Acesso Sistema Sei Mamuk.',
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

    function akunprofessores()
    {
    $this->join('user_role', 'akun_instituisaun.id_role = user_role.id','role', 'left');
    $this->where('id_role =', 3);
    $this->orderBy('id_user', 'DESC');
    $query = $this->findAll();
    return $query;
    }
}
