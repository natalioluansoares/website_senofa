<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunFamiliaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'akun_familia';
    protected $primaryKey       = 'id_familia';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['naran_kompleto_familia', 'jenero_familia', 'status_familia', 
                                  'numero_telemovel', 'posto_administrativo', 
                                  'senha', 'loron_moris', 'familia_role'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
     
    protected $validationRules      = [
        'naran_kompleto_familia'    => 'required',
        'jenero_familia'            => 'required',
        'status_familia'            => 'required',
        'posto_administrativo'      => 'required',
        'numero_telemovel'          => 'required',
        'familia_role'              => 'required',
    ];
    protected $validationMessages   = [
        'naran_kompleto_familia' => [
            'required'  => 'Dados Naran Kompleto Sei Mamuk.',
        ],
        'jenero_familia' => [
            'required'  => 'Dados Jenero Sei Mamuk.',
        ],
        'status_familia' => [
            'required'  => 'Dados Status Sei Mamuk.',
        ],
        
        'posto_administrativo' => [
            'required'  => 'Dados Fatin Moris Sei Mamuk.',
        ],
        'numero_telemovel' => [
            'required'  => 'Dados Numero Telemovel Sei Mamuk.',
        ],
        'familia_role' => [
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

    function akunfamilia()
    {
    $this->join('user_role', 'akun_familia.familia_role = user_role.id','role', 'left');
    $this->where('familia_role =', 5);
    $this->orderBy('id_familia', 'DESC');
    $query = $this->findAll();
    return $query;
    }
}
