<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInstituisaun extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'naran_kompleto' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'jenero' => [
                'type'           => 'ENUM',
                'constraint'     => ['Mane', 'Feto'],
                'default'        => 'Mane',
            ],
            'status' => [
                'type'           => 'ENUM',
                'constraint'     => ['Solteiro', 'Familia'],
                'default'        => 'Solteiro',
            ],
            'status_servisu' => [
                'type'           => 'ENUM',
                'constraint'     => ['Aktivo', 'La Aktivo'],
                'default'        => 'Aktivo',
            ],
            'fatin_moris' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',

            ],
            'loron_moris' => [
                'type'           => 'DATE',
            ],
            'id_role' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('instituisaun');
    }

    public function down()
    {
        $this->forge->dropTable('instituisaun');
        
    }
}
