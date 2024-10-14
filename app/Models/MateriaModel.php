<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'materia';
    protected $primaryKey       = 'id_materia';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_materia','materia', 'professores', 'horas_materia',
     'loron_materia', 'dia_materia', 'aula_materia', 'tinan_akademiko'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
   protected $validationRules      = [
                    'kode_materia'      => 'required',
                    'materia'           => 'required',
                    'professores'       => 'required',
                    'horas_materia'     => 'required',
                    'loron_materia'     => 'required',
                    'aula_materia'      => 'required',
                    'dia_materia'       => 'required',
                    'tinan_akademiko'  => 'required',
    ];
    protected $validationMessages   = [
        'kode_materia' => [
            'required'  => 'Data Kode materia Sei Mamuk.',
        ],
        'materia' => [
            'required'  => 'Data Materia Sei Mamuk.',
        ],
        'professores' => [
            'required'  => 'Data Professores Sei Mamuk.',
        ],
        'horas_materia' => [
            'required'  => 'Data Horas Materia Sei Mamuk.',
        ],
        'aula_materia' => [
            'required'  => 'Data Aula Sei Mamuk.',
        ],
        'loron_materia' => [
            'required'  => 'Data Loron Materia Sei Mamuk.',
        ],
        'dia_materia' => [
            'required'  => 'Data Dia Materia Sei Mamuk.',
        ],
        'tinan_akademiko' => [
            'required'  => 'Data Tinan Akademiko Sei Mamuk.',
        ],
    ];
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

    function materia()
    {
        $this->join('akun_instituisaun', 'materia.professores = akun_instituisaun.id_user','naran_kompleto', 'left');
        $this->join('aula', 'materia.aula_materia = aula.id_aula','aula', 'left');
        $this->orderBy('id_materia', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function kode_materia()
    {
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }
        $data = userLogin()->naran_kompleto;
        $this->join('akun_instituisaun', 'materia.professores = akun_instituisaun.id_user','naran_kompleto', 'left');
        $this->join('aula', 'materia.aula_materia = aula.id_aula','aula', 'left');
        $this->where('naran_kompleto =', $data);
        $this->where('tinan_akademiko =', $tinanhorario);
        $this->orderBy('id_materia', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function segunda()
    {
        $this->join('akun_instituisaun', 'materia.professores = akun_instituisaun.id_user','naran_kompleto', 'left');
        $this->join('aula', 'materia.aula_materia = aula.id_aula','aula', 'left');
        $this->where('loron_materia', 'segunda');
        $this->orderBy('id_materia', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function terca()
    {
        $this->join('akun_instituisaun', 'materia.professores = akun_instituisaun.id_user','naran_kompleto', 'left');
        $this->join('aula', 'materia.aula_materia = aula.id_aula','aula', 'left');
        $this->where('loron_materia', 'Terca-Feira');
        $this->orderBy('id_materia', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function quarta()
    {
        $this->join('akun_instituisaun', 'materia.professores = akun_instituisaun.id_user','naran_kompleto', 'left');
        $this->join('aula', 'materia.aula_materia = aula.id_aula','aula', 'left');
        $this->where('loron_materia', 'Quarta-Feira');
        $this->orderBy('id_materia', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function quinta()
    {
        $this->join('akun_instituisaun', 'materia.professores = akun_instituisaun.id_user','naran_kompleto', 'left');
        $this->join('aula', 'materia.aula_materia = aula.id_aula','aula', 'left');
        $this->where('loron_materia', 'Quinta-Feira');
        $this->orderBy('id_materia', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function sexta()
    {
        $this->join('akun_instituisaun', 'materia.professores = akun_instituisaun.id_user','naran_kompleto', 'left');
        $this->join('aula', 'materia.aula_materia = aula.id_aula','aula', 'left');
        $this->where('loron_materia', 'Sexta-Feira');
        $this->orderBy('id_materia', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function sabado()
    {
        $this->join('akun_instituisaun', 'materia.professores = akun_instituisaun.id_user','naran_kompleto', 'left');
        $this->join('aula', 'materia.aula_materia = aula.id_aula','aula', 'left');
        $this->where('loron_materia', 'Sabado');
        $this->orderBy('id_materia', 'DESC');
        $query = $this->findAll();
        return $query;
    }
}
