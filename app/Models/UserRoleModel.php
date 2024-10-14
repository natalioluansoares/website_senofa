<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRoleModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'user_role';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['role'];

    protected $validationRules      = [
                    'role'  => 'required|is_unique[user_role.role]',
    ];
    protected $validationMessages   = [
        'role' => [
            'required'  => 'Data Acesso Sistema Sei Mamuk.',
            'is_unique' => 'Desculpa, Dados Nebe Ita Hatama Iha Tiha Ona.',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

}
