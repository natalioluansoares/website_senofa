<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\MateriaModel;
use App\Models\HorariaAulaModel;
use App\Models\ValoresEstudanteModel;

class Valoresestudantes extends ResourceController
{


    protected $horario;
    protected $materia;
    protected $valoresestudante;
    protected $helpers = ['eskola'];
    public function __construct()
    {
       $this->horario = new HorariaAulaModel();  
       $this->materia = new MateriaModel();
       $this->valoresestudante = new ValoresEstudanteModel();
    }
    public function index()
    {
        $kode = $this->materia->kode_materia();
        
        $data = [
            'title' => 'Data Kode  Materia',
            'show'      => 'Hare Valores',
            'kode'  => $kode,
            
        ];
        return view('admin/horarioprofessores/harevalores', $data); 
    }

    public function show($id = null)
    {
        
    }

    
    public function new()
    {
        
    }

    
    public function create()
    {
        //
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
    public function valores_primeiro($id = null, $exame=null)
    {
        $primeiro  = $this->valoresestudante->where(['kode_materia'=>$id], ['exame_periode'=>$exame])->valores_primeiro_professores($id);
        $data = [
            'title' => 'Data Valores Primeiro Periode',
            'show'      => 'Table Valores Primeiro Periode',
            'primeiro'  =>$primeiro,
            // 'terca' =>$terca,
            // 'quarta' =>$quarta,
            // 'quinta' =>$quinta,
            // 'sexta' =>$sexta,
            // 'sabado' =>$sabado,
            
        ];
        return view('admin/horarioprofessores/harestudantesvalores', $data);
    }
    public function valores_segundo($id = null, $exame=null)
    {
        $primeiro  = $this->valoresestudante->where(['kode_materia'=>$id], ['exame_periode'=>$exame])->valores_segundo_professores($id);
        $data = [
            'title' => 'Data Valores Segundo Periode',
            'show'      => 'Table Valores Segundo Periode',
            'primeiro' =>$primeiro,
            // 'terca' =>$terca,
            // 'quarta' =>$quarta,
            // 'quinta' =>$quinta,
            // 'sexta' =>$sexta,
            // 'sabado' =>$sabado,
            
        ];
        if(empty($data['primeiro']))
        {
            return view('admin/horarioprofessores/harestudantesvalores', $data);
        }else{
            return view('admin/horarioprofessores/harestudantesvalores', $data);
        }
    }
    public function valores_terceiro($id = null, $exame=null)
    {
        $primeiro  = $this->valoresestudante->where(['kode_materia'=>$id], ['exame_periode'=>$exame])->valores_terceiro_professores($id);
        $data = [
            'title' => 'Data Valores Terceiro Periode',
            'show'      => 'Table Valores Terceiro Periode',
            'primeiro' =>$primeiro,
            // 'terca' =>$terca,
            // 'quarta' =>$quarta,
            // 'quinta' =>$quinta,
            // 'sexta' =>$sexta,
            // 'sabado' =>$sabado,
            
        ];
            return view('admin/horarioprofessores/harestudantesvalores', $data);
    }
}
