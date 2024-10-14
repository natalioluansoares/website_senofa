<?php

namespace App\Controllers;

use App\Models\AbsensiAlunosModel;
use App\Models\HorariaAulaModel;
use App\Models\MateriaModel;
use CodeIgniter\RESTful\ResourceController;
use DateTime;

class Absensialunos extends ResourceController
{
   protected $materia;
   protected $horario;
   protected $absensi;
   protected $helpers = ['eskola'];
   public function __construct()
   {
        $this->materia = new MateriaModel();
        $this->horario = new HorariaAulaModel();
        $this->absensi = new AbsensiAlunosModel();
   }
    public function index()
    {
        $kode = $this->materia->kode_materia();
        
        $data = [
            'title' => 'Data Absensi',
            'show'      => 'Tabel Absensi',
            'kode'  => $kode,
            
        ];
        return view('admin/horarioprofessores/absensi', $data); 
    }

    
    public function show($id = null)
    {
       
    }

    
    public function new()
    {

    }

    
    public function create()
    {
        $kode_materia           = $this->request->getPost('kode_materia');
        $materia                = $this->request->getPost('materia');
        $alunos_absensi         = $this->request->getPost('absensi_alunos');
        $professores_absensi    = $this->request->getPost('absensi_professores');
        $exame_periode          = $this->request->getPost('exame_periode');
        $dia_absensi            = $this->request->getPost('dia_absensi');
        $presente               = $this->request->getPost('presente');
        $alpha                  = $this->request->getPost('alpha');
        $doente                 = $this->request->getPost('doente');
        $lisensa                = $this->request->getPost('lisensa');
        $tinan_akademiko        = $this->request->getPost('tinan_akademiko');

        
        $data = [
            'kode_materia'          => $kode_materia,
            'materia'               => $materia,
            'absensi_alunos'        => $alunos_absensi,
            'absensi_professores'   => $professores_absensi,
            'exame_periode'         => $exame_periode,
            'dia_absensi'           =>$dia_absensi,
            'presente'              => $presente,
            'alpha'                 => $alpha,
            'doente'                => $doente,
            'lisensa'               => $lisensa,
            'tinan_akademiko'       => $tinan_akademiko,
        ];

        $insert = $this->absensi->insert($data);
        if ($insert) {
            return redirect()->to(base_url('absensialunos/'.$kode_materia.'/'.$tinan_akademiko))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    
    public function edit($id = null)
    {
        
    }

    
    public function update($id = null)
    {
        //
    }

    public function delete($id = null)
    {
        //
    }

    public function absensi($kode = null, $tinan = null)
    {
        $segunda  = $this->horario->where(['kode_materia'=>$kode, 'tinan_horario'=>$tinan])->segunda_professores();
        $data = [
            'title' => 'Data Absensi Estudante',
            'show'      => 'Absensi Estudante',
            'segunda' =>$segunda,
            
            
        ];
        return view('admin/horarioprofessores/aumentabsensi', $data);
    }
}
