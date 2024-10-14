<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederFamilia extends Seeder
{
    public function run()
    {
        $data = [
            [
            'naran_kompleto_familia'   => 'Natalio Cristianto Luan Soares',
            'jenero_familia'           => 'Mane',
            'senha'                     => password_hash('12345',PASSWORD_BCRYPT),
            'numero_telemovel'          => '+6282157675980',
            'status_familia'           => 'Aktivo',
            'posto_administrativo'     => 'Fatuberlio',
            'familia_role'             => 5,
            
            ],
            [
            'naran_kompleto_familia'   => 'Apriana Francisca Triforca Luan Soares',
            'jenero_familia'           => 'Feto',
            'senha'                     => password_hash('12345',PASSWORD_BCRYPT),
            'numero_telemovel'          => '+6282157675980',
            'status_familia'           => 'Aktivo',
            'posto_administrativo'     => 'Fatuberlio',
            'familia_role'             => 5,
            
            ],
            [
            'naran_kompleto_familia'   => 'Igidio Soares',
            'jenero_familia'           => 'Mane',
            'senha'                     => password_hash('12345',PASSWORD_BCRYPT),
            'numero_telemovel'          => '+6282157675980',
            'status_familia'           => 'Aktivo',
            'posto_administrativo'     => 'Fatuberlio',
            'familia_role'             => 5,
            
            ]
        ];
        $insert = $this->db->table('akun_familia');
        $insert->insertBatch($data);
    }
}
