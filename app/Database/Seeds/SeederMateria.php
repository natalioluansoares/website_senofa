<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederMateria extends Seeder
{
    public function run()
    {
        $data = [
            [
            'materia'         => 'Matematiac',
            
            ],
            [
            'materia'         => 'Fisica',
            
            ],
            [
            'materia'         => 'Biologia',
            
            ],
            [
            'materia'         => 'Quimica',
            
            ],
            [
            'materia'         => 'Lingua Inglesh',
            
            ],
            [
            'materia'         => 'Lingua Portuquesa',
            
            ],
            [
            'materia'         => 'Geologia',
            
            ],
            [
            'materia'         => 'Geografia',
            
            ],
            [
            'materia'         => 'Cidadania',
            
            ]
        ];
        $insert = $this->db->table('materia');
        $insert->insertBatch($data);
    }
}
