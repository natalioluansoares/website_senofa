<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiAlunosModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'absensi';
    protected $primaryKey       = 'id_absensi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_materia', 'materia', 'absensi_alunos', 'absensi_professores',
                                  'tinan_akademiko', 'dia_absensi', 'presente', 'alpha', 'doente', 'lisensa', 'exame_periode'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    function primeiro_absensi()
    {

        $data = userLogin()->naran_kompleto; 
        $this->join('akun_alunos', 'absensi.absensi_alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('akun_instituisaun', 'absensi.absensi_professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('naran_kompleto =', $data);
        $this->where('exame_periode =', 'Exame_Primeiro_Periode');
        $this->orderBy('id_absensi', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function segundo_absensi()
    {

        $data = userLogin()->naran_kompleto; 
        $this->join('akun_alunos', 'absensi.absensi_alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('akun_instituisaun', 'absensi.absensi_professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('naran_kompleto =', $data);
        $this->where('exame_periode =', 'Exame_Segundo_Periode');
        $this->orderBy('id_absensi', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function terceiro_absensi()
    {

        $data = userLogin()->naran_kompleto; 
        $this->join('akun_alunos', 'absensi.absensi_alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('akun_instituisaun', 'absensi.absensi_professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('naran_kompleto =', $data);
        $this->where('exame_periode =', 'Exame_Terceiro_Periode');
        $this->orderBy('id_absensi', 'DESC');
        $query = $this->findAll();
        return $query;
    }
}
