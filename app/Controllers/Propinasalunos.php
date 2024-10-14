<?php

namespace App\Controllers;

use App\Models\PropinasModel;
use CodeIgniter\RESTful\ResourceController;

class Propinasalunos extends ResourceController
{
    protected $propinas;
    protected $helpers = ['eskola'];
    public function __construct()
    {
       $this->propinas = new PropinasModel(); 
    }
    public function index()
    {
        $propinas = $this->propinas->alunospropinas();
        $data = [
            'title' => 'Data Propinas',
            'show' => 'Table Propinas',
            'propinas' => $propinas,
        ];
        return view('alunos/propinas/propinas', $data);   
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
