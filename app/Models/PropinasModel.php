<?php

namespace App\Models;

use CodeIgniter\Model;

class PropinasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'propinas';
    protected $primaryKey       = 'id_propinas';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['naran_alunos', 'aula_alunos', 'propinas', 'loron_propinas', 'horas_propinas', 'pre_exame'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
   protected $validationRules      = [
        'naran_alunos'        => 'required',
        'aula_alunos'         => 'required',
        'propinas'            => 'required',
        'loron_propinas'      => 'required',
        'horas_propinas'      => 'required',
        'pre_exame'           => 'required',
    ];
    protected $validationMessages   = [
        'naran_alunos' => [
            'required'  => 'Dados Naran Alunos Sei Mamuk.',
        ],
        'aula_alunos' => [
            'required'  => 'Dados Aulo Sei Mamuk.',
        ],
        'propinas' => [
            'required'  => 'Dados Propinas Sei Mamuk.',
        ],
        'loron_propinas'=> [
            'required'  => 'Dados Status Servisu Sei Mamuk.',
        ],
        'horas_propinas' => [
            'required'  => 'Dados Fatin Moris Sei Mamuk.',
        ],
        'pre_exame' => [
            'required'  => 'Dados Periode Exame Sei Mamuk.',
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
    function propinas()
    {
        $this->join('akun_alunos', 'propinas.naran_alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'propinas.aula_alunos = aula.id_aula', 'aula','left');

        $this->orderBy('id_propinas', 'DESC');
        $query = $this->findAll();
        return $query;
    }

    public function allpropinas()
    {
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $propinastinan              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $propinastinan      = $tinan;

                    }
         $this->join('akun_alunos', 'propinas.naran_alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');
        $this->join('aula', 'propinas.aula_alunos = aula.id_aula', 'aula','left');
        
        $this->where('tinan_tama =', $propinastinan);
        $this->orderBy('id_propinas', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function alunospropinas()
    {

        $data = userLoginAlunos()->naran_kompleto_alunos;
        $this->join('akun_alunos', 'propinas.naran_alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'propinas.aula_alunos = aula.id_aula', 'aula','left');
        $this->where('naran_kompleto_alunos =',$data);
        $this->orderBy('id_propinas', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function paroquiapropinas()
    {

        $data = userLoginParoquia()->naran_kompleto_paroquia;
        $this->join('akun_alunos', 'propinas.naran_alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');
        $this->join('akun_paroquia', 'akun_alunos.paroquia = akun_paroquia.id_paroquia',
        'naran_kompleto_paroquia', 'left');

        $this->join('aula', 'propinas.aula_alunos = aula.id_aula', 'aula','left');
        $this->where('naran_kompleto_paroquia =',$data);
        $this->orderBy('id_propinas', 'DESC');
        $query = $this->findAll();
        return $query;
    }

    function familiapropinas()
    {

        $data = userLoginFamilia()->naran_kompleto_familia;
        $this->join('akun_alunos', 'propinas.naran_alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('akun_familia', 'akun_alunos.familia = akun_familia.id_familia',
        'naran_kompleto_familia', 'left');

        $this->join('aula', 'propinas.aula_alunos = aula.id_aula', 'aula','left');
        $this->where('naran_kompleto_familia=',$data);
        $this->orderBy('id_propinas', 'DESC');
        $query = $this->findAll();
        return $query;
    }
}
