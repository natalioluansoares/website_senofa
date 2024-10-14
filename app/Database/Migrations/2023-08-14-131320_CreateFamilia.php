<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFamilia extends Migration
{
   public function up()
    {
         $this->forge->addField([
            'id_familia' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'naran_kompleto_familia' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'jenero_familia' => [
                'type'           => 'ENUM',
                'constraint'     => ['Mane', 'Feto'],
                'default'        => 'Mane',
            ],
            'senha' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            
            'status_familia' => [
                'type'           => 'ENUM',
                'constraint'     => ['Aktivo', 'La Aktivo'],
                'default'        => 'Aktivo',
            ],
            'posto_administrativo' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',

            ],
            'familia_role' => [
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
        $this->forge->addKey('id_familia', true);
        $this->forge->addForeignKey('familia_role', 'user_role', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('akun_familia');
    }

    public function down()
    {
        $this->forge->dropTable('akun_familia');
    }
}
