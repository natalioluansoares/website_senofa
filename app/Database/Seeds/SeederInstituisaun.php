<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederInstituisaun extends Seeder
{
    public function run()
    {
        $data = [
            [
            'naran_kompleto'            => 'Natalio Cristianto Luan Soares',
            'jenero'                    => 'Mane',
            'status'                    => 'Solteiro',
            'status_servisu'            => 'Aktivo',
            'fatin_moris'               => 'Fatuberlio',
            'loron_moris'               => '1997-12-23',
            'id_role'                   => 1,
            
            ],
            [
            'naran_kompleto'            => 'Apriana Francisca Triforca Luan Soares',
            'jenero'                    => 'Feto',
            'status'                    => 'Solteiro',
            'status_servisu'            => 'Aktivo',
            'fatin_moris'               => 'Fatuberlio',
            'loron_moris'               => '2002-04-23',
            'id_role'                   => 3,
            
            ],
            [
            'naran_kompleto'            => 'Igidio Soares',
            'jenero'                    => 'Mane',
            'status'                    => 'Solteiro',
            'status_servisu'            => 'Aktivo',
            'fatin_moris'               => 'Fatuberlio',
            'loron_moris'               => '2002-04-23',
            'id_role'                   => 2,
            
            ],
            [
            'naran_kompleto'            => 'Henia Fralia Luan Soares',
            'jenero'                    => 'Feto',
            'status'                    => 'Solteiro',
            'status_servisu'            => 'Aktivo',
            'fatin_moris'               => 'Fatuberlio',
            'loron_moris'               => '2002-04-23',
            'id_role'                   => 4,
            
            ],
            [
            'naran_kompleto'            => 'Armandito Da Costa',
            'jenero'                    => 'Mane',
            'status'                    => 'Solteiro',
            'status_servisu'            => 'Aktivo',
            'fatin_moris'               => 'Fatuberlio',
            'loron_moris'               => '2002-04-23',
            'id_role'                   => 4,
            
            ],
            [
            'naran_kompleto'            => 'Joaquin Sarmento',
            'jenero'                    => 'Mane',
            'status'                    => 'Solteiro',
            'status_servisu'            => 'Aktivo',
            'fatin_moris'               => 'Fatuberlio',
            'loron_moris'               => '2002-04-23',
            'id_role'                   => 4,
            
            ]
        ];
        $insert = $this->db->table('instituisaun');
        $insert->insertBatch($data);
    }
}
