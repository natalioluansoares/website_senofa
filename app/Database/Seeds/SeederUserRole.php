<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederUserRole extends Seeder
{
    public function run()
    {
        $data = [
            [
            'role'         => 'Administrato',
            
            ],
            [
            'role'         => 'Equipa Formador',
            
            ],
            [
            'role'         => 'Professores',
            
            ],
            [
            'role'         => 'Alunos',
            
            ]
        ];
        $insert = $this->db->table('user_role');
        $insert->insertBatch($data);
    }
}
