<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Kategori extends ResourceController
{
    protected $modelName = 'App\Models\KategoriModel';
    protected $format    = 'json';

    public function index()
    {
        // Mengambil semua data
        $data = $this->model->findAll();
        
        // Mengirim respon JSON murni
        return $this->respond($data);
    }
}