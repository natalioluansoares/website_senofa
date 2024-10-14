<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederAula extends Seeder
{
    public function run()
    {
        
        $data = [
            [
            'aula'         => '1A',
            
            ],
            [
            'aula'         => '1B',
            
            ],
            [
            'aula'         => '1C',
            
            ],
            [
            'aula'         => '2A',
            
            ],
            [
            'aula'         => '2B',
            
            ],
            [
            'aula'         => '2C',
            
            ],
            [
            'aula'         => '3A',
            
            ],
            [
            'aula'         => '3B',
            
            ],
            [
            'aula'         => '3C',
            
            ]
        ];
        $insert = $this->db->table('aula');
        $insert->insertBatch($data);
    }
}
