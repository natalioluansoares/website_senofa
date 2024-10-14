<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAula extends Migration
{
   public function up()
    {
        $this->forge->addField([
            'id_aula' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'aula' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_aula', true);
        $this->forge->createTable('aula');
    
    }

    public function down()
    {
         $this->forge->dropTable('aula');
    }
}
