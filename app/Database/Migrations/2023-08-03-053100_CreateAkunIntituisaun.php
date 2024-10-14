<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAkunIntituisaun extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id_user' => [
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
            'senha' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
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
            'numero_telemovel' => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',
                'null'           => true,

            ],
            'imagem' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->addForeignKey('id_role', 'user_role', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('akun_instituisaun');
    }

    public function down()
    {
        $this->forge->dropTable('akun_instituisaun');
    }
}
