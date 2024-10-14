<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Valores extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id_valores' => [
                'type'           => 'BIGINT',
                'constraint'     => 5,
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
            
            'alunos' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'professores' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,

            ],
            'loron_valores' => [
                'type'           => 'VARCHAR',
                'constraint'     => 112,

            ],
            'horas_valores' => [
                'type'           => 'VARCHAR',
                'constraint'     => 112,

            ],
            'exame_periode' => [
                'type'           => 'ENUM',
                'constraint'     => ['Exame_Primeiro_Periode','Exame_Segundo_Periode', 'Exame_Terceiro_Periode'],
                'default'        => 'Exame_Primeiro_Periode',
            ],

            'tinan_exame' => [
                'type'           => 'VARCHAR',
                'constraint'     => 11,

            ],

            'aula_valores' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,

            ],
            'valor_tpc' => [
                'type'           => 'INT',
                'constraint'     => 12,

            ],

            'valor_exame' => [
                'type'           => 'INT',
                'constraint'     => 12,

            ],
        ]);
        $this->forge->addKey('id_valores', true);
        $this->forge->addForeignKey('alunos', 'akun_alunos', 'id_alunos', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('professores', 'akun_instituisaun', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('aula_valores', 'aula', 'id_aula', 'CASCADE', 'CASCADE');
        $this->forge->createTable('valores');
    
    }

    public function down()
    {
         $this->forge->dropTable('valores');
    }
}
