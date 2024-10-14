<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederParoquia extends Seeder
{
    public function run()
    {
        $data = [
            [
            'naran_kompleto_paroquia'   => 'Natalio Cristianto Luan Soares',
            'jenero_paroquia'           => 'Mane',
            'senha'                     => password_hash('12345',PASSWORD_BCRYPT),
            'numero_telemovel'          => '+6282147675980',
            'status_paroquia'           => 'Aktivo',
            'paroquia'                  => 'Fatuberlio',
            'paroquia_role'             => 4,
            
            ],
            [
            'naran_kompleto_paroquia'   => 'Apriana Francisca Triforca Luan Soares',
            'jenero_paroquia'           => 'Feto',
            'senha'                     => password_hash('12345',PASSWORD_BCRYPT),
            'numero_telemovel'          => '+6282147675980',
            'status_paroquia'           => 'Aktivo',
            'paroquia'                  => 'Fatuberlio',
            'paroquia_role'             => 4,
            
            ],
            [
            'naran_kompleto_paroquia'   => 'Igidio Soares',
            'jenero_paroquia'           => 'Mane',
            'senha'                     => password_hash('12345',PASSWORD_BCRYPT),
            'numero_telemovel'          => '+6282147675980',
            'status_paroquia'           => 'Aktivo',
            'paroquia'                  => 'Fatuberlio',
            'paroquia_role'             => 4,
            
            ]
        ];
        $insert = $this->db->table('akun_paroquia');
        $insert->insertBatch($data);
    }
}
