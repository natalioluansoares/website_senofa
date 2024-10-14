<?php

namespace App\Models;

use CodeIgniter\Model;

class AulaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'aula';
    protected $primaryKey       = 'id_aula';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['aula'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
   protected $validationRules      = [
                    'aula'  => 'required',
    ];
    protected $validationMessages   = [
        'aula' => [
            'required'  => 'Data Aula Sei Mamuk.',
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
}
