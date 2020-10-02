<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Agentes extends ResourceController
{
    protected $modelName = 'App\Models\AgenteModel';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->rest());
    }
}
