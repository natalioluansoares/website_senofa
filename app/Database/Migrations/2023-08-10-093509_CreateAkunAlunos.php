<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAkunAlunos extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id_alunos' => [
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

            'paroquia' => [
                'type'           => 'BIGINT',
                'constraint'     => '20',
                'unsigned'       => true,

            ],

            'familia' => [
                'type'           => 'BIGINT',
                'constraint'     => '20',
                'unsigned'       => true,

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
            'angkatan' => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',

            ],
            'imagem' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id_alunos', true);
        $this->forge->addForeignKey('id_role', 'user_role', 'id', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('paroquia', 'akun_instituisaun', 'id_user', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('familia', 'akun_instituisaun', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->createTable('akun_alunos');
    }

    public function down()
    {
        $this->forge->dropTable('akun_alunos');
    }
}
