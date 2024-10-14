<?php

namespace App\Models;

use CodeIgniter\Model;

class ValoresEstudanteModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'valores';
    protected $primaryKey       = 'id_valores';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_materia', 'materia', 'alunos', 'professores', 'aula_valores',
     'loron_valores', 'horas_valores', 'exame_periode', 'tinan_exame', 'valor_tpc', 'valor_exame'];

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

    function valoresestudante()
    {
         if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLoginAlunos()->naran_kompleto_alunos;

        $this->join('akun_alunos', 'valores.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'valores.aula_valores = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'valores.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        // $this->where('loron_materia =', 'Segunda');
        
        $this->where('naran_kompleto_alunos =', $data);
        $this->where('tinan_exame =', $tinanhorario);
        // $this->where('exame_periode =', 'Exame_Segundo_Periode');
        $this->orderBy('id_valores', 'DESC');
        $query = $this->findAll();
        return $query;
    }

    
    // Exame_Primeiro_Periode
    function valores_sequnda_primeiro()
    {
        $data = userLoginAlunos()->naran_kompleto_alunos;

        $this->join('akun_alunos', 'valores.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'valores.aula_valores = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'valores.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('loron_valores =', 'Segunda');
        
        $this->where('naran_kompleto_alunos =', $data);
        // $this->where('exame_periode =', 'Exame_Primeiro_Periode');
        $this->orderBy('id_valores',  'DECS');
        $query = $this->findAll();
        return $query;
    }
    function valores_terca_primeiro()
    {

        $data = userLoginAlunos()->naran_kompleto_alunos;

        $this->join('akun_alunos', 'valores.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'valores.aula_valores = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'valores.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('loron_valores =', 'Terca-Feira');
        
        $this->where('naran_kompleto_alunos =', $data);
        // $this->where('exame_periode =', 'Exame_Primeiro_Periode');
        $this->orderBy('id_valores', 'DESC');
        $query = $this->findAll();
        return $query;
    }

    function valores_quarta_primeiro()
    {

        $data = userLoginAlunos()->naran_kompleto_alunos;

        $this->join('akun_alunos', 'valores.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'valores.aula_valores = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'valores.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('loron_valores =', 'Quarta-Feira');
        
        $this->where('naran_kompleto_alunos =', $data);
        // $this->where('exame_periode =', 'Exame_Primeiro_Periode');
        $this->orderBy('id_valores', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function valores_quinta_primeiro()
    {

        $data = userLoginAlunos()->naran_kompleto_alunos;

        $this->join('akun_alunos', 'valores.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'valores.aula_valores = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'valores.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('loron_valores =', 'Quinta-Feira');
        
        $this->where('naran_kompleto_alunos =', $data);
        // $this->where('exame_periode =', 'Exame_Primeiro_Periode');
        $this->orderBy('id_valores', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function valores_sexta_primeiro()
    {
         

        $data = userLoginAlunos()->naran_kompleto_alunos;

        $this->join('akun_alunos', 'valores.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'valores.aula_valores = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'valores.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('loron_valores =', 'Sexta-Feira');
        
        $this->where('naran_kompleto_alunos =', $data);
        // $this->where('exame_periode =', 'Exame_Primeiro_Periode');
        $this->orderBy('id_valores', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function valores_sabado_primeiro()
    {

        $data = userLoginAlunos()->naran_kompleto_alunos;

        $this->join('akun_alunos', 'valores.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'valores.aula_valores = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'valores.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('loron_valores =', 'Sabado');
        
        $this->where('naran_kompleto_alunos =', $data);
        // $this->where('exame_periode =', 'Exame_Primeiro_Periode');
        $this->orderBy('id_valores', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    
    // Exame_Segundo_Periode
    function valores_primeiro_professores()
    {
         if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLogin()->naran_kompleto;

        $this->join('akun_alunos', 'valores.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'valores.aula_valores = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'valores.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        // $this->where('loron_valores =', 'Sabado');
        
        $this->where('naran_kompleto =', $data);
        $this->where('tinan_exame =', $tinanhorario);
        $this->where('exame_periode =', 'Exame_Primeiro_Periode');
        $this->orderBy('id_valores', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function valores_segundo_professores()
    {
         if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLogin()->naran_kompleto;

        $this->join('akun_alunos', 'valores.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'valores.aula_valores = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'valores.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        // $this->where('loron_valores =', 'Sabado');
        
        $this->where('naran_kompleto =', $data);
        $this->where('tinan_exame =', $tinanhorario);
        $this->where('exame_periode =', 'Exame_Segundo_Periode');
        $this->orderBy('id_valores', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function valores_terceiro_professores()
    {
         if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLogin()->naran_kompleto;

        $this->join('akun_alunos', 'valores.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'valores.aula_valores = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'valores.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        // $this->where('loron_valores =', 'Sabado');
        
        $this->where('naran_kompleto =', $data);
        $this->where('tinan_exame =', $tinanhorario);
        $this->where('exame_periode =', 'Exame_Terceiro_Periode');
        $this->orderBy('id_valores', 'DESC');
        $query = $this->findAll();
        return $query;
    }
}
