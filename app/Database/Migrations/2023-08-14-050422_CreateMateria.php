<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMateria extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_materia' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'materia' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_materia', true);
        $this->forge->createTable('materia');
    
    }

    public function down()
    {
         $this->forge->dropTable('materia');
    }
}
