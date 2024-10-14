<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Absensi extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id_absensi' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kode_materia' => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'materia' => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            
            'tinan_akademiko' => [
                'type'           => 'INT',
                'constraint'     => 12,
            ],
            'dia_absensi' => [
                'type'           => 'DATE',
            ],

            'absensi_alunos' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,

            ],

            'absensi_professores' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,

            ],
            'presente' => [
                'type'           => 'INT',
                'constraint'     => 11,

            ],
            'alpha' => [
                'type'           => 'INT',
                'constraint'     => 11,

            ],
            'doente' => [
                'type'           => 'INT',
                'constraint'     => 11,

            ],
            'lisensa' => [
                'type'           => 'INT',
                'constraint'     => 11,

            ],
            'exame_periode' => [
                'type'           => 'ENUM',
                'constraint'     => ['Exame_Primeiro_Periode', 'Exame_Segundo_Periode', 'Exame_Terceiro_Periode'],
                'default'        => 'Exame_Primeiro_Periode',

            ],
        ]);
        $this->forge->addKey('id_absensi', true);
        $this->forge->addForeignKey('absensi_alunos', 'akun_alunos', 'id_alunos', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('absensi_professores', 'akun_instituisaun', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->createTable('absensi');
    }

    public function down()
    {
         $this->forge->dropTable('absensi');
    }
}
