<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePropinas extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id_propinas' => [
                'type'           => 'BIGINT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'naran_alunos' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'jenero' => [
                'type'           => 'ENUM',
                'constraint'     => ['Mane'],
                'default'        => 'Mane',
            ],
            
            'loron_selu' => [
                'type'           => 'DATE',
            ],
            'horas' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',

            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       =>true,

            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       =>true,

            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       =>true,

            ],
        ]);
        $this->forge->addKey('id_propinas', true);
        $this->forge->addForeignKey('naran_alunos', 'akun_alunos', 'id_alunos', 'CASCADE', 'CASCADE');
        $this->forge->createTable('propinas');
    }

    public function down()
    {
         $this->forge->dropTable('propinas');
    }
}
