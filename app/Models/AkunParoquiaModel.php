<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunParoquiaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'akun_paroquia';
    protected $primaryKey       = 'id_paroquia';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['naran_kompleto_paroquia', 'jenero_paroquia', 'status_paroquia', 
                                  'numero_telemovel', 'paroquia', 
                                  'senha', 'loron_moris', 'paroquia_role'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'naran_kompleto_paroquia'    => 'required',
        'jenero_paroquia'            => 'required',
        'status_paroquia'            => 'required',
        'paroquia'                   => 'required',
        'numero_telemovel'           => 'required',
        'paroquia_role'              => 'required',
    ];
    protected $validationMessages   = [
        'naran_kompleto_paroquia' => [
            'required'  => 'Dados Naran Kompleto Sei Mamuk.',
        ],
        'jenero_paroquia' => [
            'required'  => 'Dados Jenero Sei Mamuk.',
        ],
        'status_paroquia' => [
            'required'  => 'Dados Status Sei Mamuk.',
        ],
        
        'paroquia' => [
            'required'  => 'Dados Fatin Moris Sei Mamuk.',
        ],
        'numero_telemovel' => [
            'required'  => 'Dados Numero Telemovel Sei Mamuk.',
        ],
        'paroquia_role' => [
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
    function akunparoquia()
    {
    $this->join('user_role', 'akun_paroquia.paroquia_role = user_role.id','role', 'left');
    $this->where('paroquia_role =', 4);
    $this->orderBy('id_paroquia', 'DESC');
    $query = $this->findAll();
    return $query;
    }
}
