<?php

namespace App\Models;

use CodeIgniter\Model;

class HorariaAulaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'horario';
    protected $primaryKey       = 'id_horario';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_materia', 'materia', 'horas_materia', 'loron_materia', 'professores',
                                  'alunos', 'tinan_horario', 'dia_materia', 'aula_horario'];

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

    function segunda()
    {
                if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLoginAlunos()->naran_kompleto_alunos; 
        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');

        $this->where('naran_kompleto_alunos =', $data);
        $this->where('loron_materia =', 'Segunda');
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function terca()
    {
                if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLoginAlunos()->naran_kompleto_alunos; 
        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');

        $this->where('loron_materia =', 'Terca-Feira');
        $this->where('naran_kompleto_alunos =', $data);
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function quarta()
    {
                if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLoginAlunos()->naran_kompleto_alunos; 
        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');

        $this->where('loron_materia =', 'Quarta-Feira');
        $this->where('naran_kompleto_alunos =', $data);
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function quinta()
    {
                if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLoginAlunos()->naran_kompleto_alunos; 
        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');

        $this->where('loron_materia =', 'Quinta-Feira');
        $this->where('naran_kompleto_alunos =', $data);
        $this->where('tinan_horario =', $tinan);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function sexta()
    {
                if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLoginAlunos()->naran_kompleto_alunos; 
        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');

        $this->where('loron_materia =', 'Sexta-Feira');
        $this->where('naran_kompleto_alunos =', $data);
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function sabado()
    {
                if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLoginAlunos()->naran_kompleto_alunos; 
        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');

        $this->where('loron_materia =', 'Sabado');
        $this->where('naran_kompleto_alunos =', $data);
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }

    function segunda_professores()
    {
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLogin()->naran_kompleto;

        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        // $this->join('valores', 'akun_alunos.id_alunos = valores.alunos',
        // 'valor_tpc', 'valor_exame', 'left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        // $this->where('loron_materia =', 'Segunda');
        $this->where('naran_kompleto =', $data);
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
 
    function kode_professores()
    {
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLogin()->naran_kompleto; 
        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('naran_kompleto =', $data);
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function horario()
    {

        $data = userLogin()->naran_kompleto; 
        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('naran_kompleto =', $data);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }

    function kode_paroquia()
    {
            if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
            }
        $data = userLoginParoquia()->naran_kompleto_paroquia; 
        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');
        $this->join('akun_paroquia', 'akun_paroquia.id_paroquia = akun_alunos.paroquia',
        'naran_kompleto_paroquia', 'left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('naran_kompleto_paroquia =', $data);
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    
    function segunda_familia()
    {
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLoginFamilia()->naran_kompleto_familia;
        

        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('akun_familia', 'akun_familia.id_familia = akun_alunos.familia',
        'naran_kompleto_familia', 'left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('loron_materia =', 'Segunda');
        
        
        $this->where('naran_kompleto_familia =', $data);
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function terca_familia()
    {
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLoginFamilia()->naran_kompleto_familia;

        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('akun_familia', 'akun_familia.id_familia = akun_alunos.familia',
        'naran_kompleto_familia', 'left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('loron_materia =', 'Terca-Feira');
        $this->where('naran_kompleto_familia =', $data);
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function quarta_familia()
    {
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLoginFamilia()->naran_kompleto_familia;

        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('akun_familia', 'akun_familia.id_familia = akun_alunos.familia',
        'naran_kompleto_familia', 'left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('loron_materia =', 'Quarta-Feira');
        $this->where('naran_kompleto_familia =', $data);
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function quinta_familia()
    {
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLoginFamilia()->naran_kompleto_familia; 

        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        $this->join('akun_familia', 'akun_familia.id_familia = akun_alunos.familia',
        'naran_kompleto_familia', 'left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('loron_materia =', 'Quinta-Feira');
        $this->where('naran_kompleto_familia =', $data);
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function sexta_familia()
    {
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLoginFamilia()->naran_kompleto_familia;

        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

        
        $this->join('akun_familia', 'akun_familia.id_familia = akun_alunos.familia',
        'naran_kompleto_familia', 'left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('loron_materia =', 'Sexta-Feira');
        $this->where('naran_kompleto_familia =', $data);
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    function sabado_familia()
    {
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario              = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
        }

        $data = userLoginFamilia()->naran_kompleto_familia;

        $this->join('akun_alunos', 'horario.alunos = akun_alunos.id_alunos',
        'naran_kompleto_alunos', 'jenero_alunos', 'tinan_tama','left');

         $this->join('akun_familia', 'akun_familia.id_familia = akun_alunos.familia',
        'naran_kompleto_familia', 'left');

        $this->join('aula', 'horario.aula_horario = aula.id_aula', 'aula','left');
        $this->join('akun_instituisaun', 'horario.professores = akun_instituisaun.id_user', 'naran_kompleto','left');
        $this->where('loron_materia =', 'Sabado');
        $this->where('naran_kompleto_familia =', $data);
        $this->where('tinan_horario =', $tinanhorario);
        $this->orderBy('id_horario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
}