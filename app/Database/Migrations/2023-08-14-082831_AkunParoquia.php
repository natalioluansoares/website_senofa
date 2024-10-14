<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AkunParoquia extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id_paroquia' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'naran_kompleto_paroquia' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'jenero_paroquia' => [
                'type'           => 'ENUM',
                'constraint'     => ['Mane', 'Feto'],
                'default'        => 'Mane',
            ],
            'senha' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            
            'status_paroquia' => [
                'type'           => 'ENUM',
                'constraint'     => ['Aktivo', 'La Aktivo'],
                'default'        => 'Aktivo',
            ],
            'paroquia' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',

            ],
            'paroquia_role' => [
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
        $this->forge->addKey('id_paroquia', true);
        $this->forge->addForeignKey('paroquia_role', 'user_role', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('akun_paroquia');
    }

    public function down()
    {
        $this->forge->dropTable('akun_paroquia');
    }
}
