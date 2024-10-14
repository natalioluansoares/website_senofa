<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserRole extends Migration
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
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user_role');
    
    }

    public function down()
    {
         $this->forge->dropTable('user_role');
    }
}
