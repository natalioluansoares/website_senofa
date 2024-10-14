<?php

namespace App\Controllers;

use App\Models\AbsensiAlunosModel;
use App\Models\HorariaAulaModel;
use App\Models\MateriaModel;

class Absensidetail extends BaseController
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
    public function index(): string
    {
       $kode = $this->materia->kode_materia();
        
        $data = [
            'title' => 'Absensi Estudante Kona Ba Materia',
            'show'      => 'Absensi Estudante',
            'kode'  => $kode,
            
        ];
        return view('admin/horarioprofessores/absensialunos', $data); 
    }
    public function detailabsensi($kode = null): string
    {
       $kode = $this->horario->where('kode_materia', $kode)->horario();
        
        $data = [
            'title' => 'Hare Absensi Estudante',
            'show'      => 'Absensi Estudante',
            'kode'  => $kode,
            
        ];
        return view('admin/horarioprofessores/detailabsensi', $data); 
    }
    public function primeiro_absensi($naran =null,  $kode =null, $tinan=null)
    {
        $absensi = $this->absensi->where(['absensi_alunos'=> $naran, 'kode_materia'=>$kode, 'tinan_akademiko'=>$tinan])->primeiro_absensi();
        
        $data = [
            'title' => 'Hare Absensi Estudante',
            'show'      => 'Absensi Estudante',
            'absensi'  => $absensi,
        ];
         if(empty($data['absensi']))
        {
             return view('admin/horarioprofessores/hareabsensi', $data); 
        }else{
            return view('admin/horarioprofessores/hareabsensi', $data); 
        }
    }
    public function segundo_absensi($naran =null, $kode=null )
    {
        $absensi = $this->absensi->where(['absensi_alunos'=> $naran, 'kode_materia'=>$kode])->segundo_absensi();
        
        $data = [
            'title' => 'Hare Absensi Estudante',
            'show'      => 'Absensi Estudante',
            'absensi'  => $absensi,
        ];
        
        if(empty($data['primeiro']))
        {
            return view('admin/horarioprofessores/hareabsensi', $data); 
        }else{
            return view('admin/horarioprofessores/hareabsensi', $data); 
        }
    }
    public function terceiro_absensi($naran =null, $kode=null )
    {
        $absensi = $this->absensi->where(['absensi_alunos'=> $naran, 'kode_materia'=>$kode])->terceiro_absensi();
        
        $data = [
            'title' => 'Hare Absensi Estudante',
            'show'      => 'Absensi Estudante',
            'absensi'  => $absensi,
        ];
        return view('admin/horarioprofessores/hareabsensi', $data); 
    }
}
