<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederAkunIntituisaun extends Seeder
{
    public function run()
    {
         $data = [
            [
            'naran_kompleto'            => 'Natalio Cristianto Luan Soares',
            'jenero'                    => 'Mane',
            'status'                    => 'Solteiro',
            'senha'                     => password_hash('12345',PASSWORD_BCRYPT),
            'numero_telemovel'          => '+6282147675980',
            'status_servisu'            => 'Aktivo',
            'fatin_moris'               => 'Fatuberlio',
            'loron_moris'               => '1997-12-23',
            'id_role'                   => 11,
            
            ],
            [
            'naran_kompleto'            => 'Apriana Francisca Triforca Luan Soares',
            'jenero'                    => 'Feto',
            'status'                    => 'Solteiro',
            'senha'                     => password_hash('12345',PASSWORD_BCRYPT),
            'numero_telemovel'          => '+6282147675980',
            'status_servisu'            => 'Aktivo',
            'fatin_moris'               => 'Fatuberlio',
            'loron_moris'               => '2002-04-23',
            'id_role'                   => 13,
            
            ],
            [
            'naran_kompleto'            => 'Igidio Soares',
            'jenero'                    => 'Mane',
            'status'                    => 'Solteiro',
            'senha'                     => password_hash('12345',PASSWORD_BCRYPT),
            'numero_telemovel'          => '+6282147675980',
            'status_servisu'            => 'Aktivo',
            'fatin_moris'               => 'Fatuberlio',
            'loron_moris'               => '2002-04-23',
            'id_role'                   => 12,
            
            ],
            [
            'naran_kompleto'            => 'Henia Fralia Luan Soares',
            'jenero'                    => 'Feto',
            'status'                    => 'Solteiro',
            'senha'                     => password_hash('12345',PASSWORD_BCRYPT),
            'numero_telemovel'          => '+6282147675980',
            'status_servisu'            => 'Aktivo',
            'fatin_moris'               => 'Fatuberlio',
            'loron_moris'               => '2002-04-23',
            'id_role'                   => 14,
            
            ],
            [
            'naran_kompleto'            => 'Armandito Da Costa',
            'jenero'                    => 'Mane',
            'status'                    => 'Solteiro',
            'senha'                     => password_hash('12345',PASSWORD_BCRYPT),
            'numero_telemovel'          => '+6282147675980',
            'status_servisu'            => 'Aktivo',
            'fatin_moris'               => 'Fatuberlio',
            'loron_moris'               => '2002-04-23',
            'id_role'                   => 15,
            
            ],
            [
            'naran_kompleto'            => 'Joaquin Sarmento',
            'jenero'                    => 'Mane',
            'status'                    => 'Solteiro',
            'senha'                     => password_hash('12345',PASSWORD_BCRYPT),
            'numero_telemovel'          => '+6282147675980',
            'status_servisu'            => 'Aktivo',
            'fatin_moris'               => 'Fatuberlio',
            'loron_moris'               => '2002-04-23',
            'id_role'                   => 15,
            
            ]
        ];
        $insert = $this->db->table('akun_instituisaun');
        $insert->insertBatch($data);
    }
}
