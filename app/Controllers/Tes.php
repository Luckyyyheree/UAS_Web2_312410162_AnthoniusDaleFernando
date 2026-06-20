<?php
namespace App\Controllers;

class Tes extends \CodeIgniter\Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'nama' => 'Contoh Barang'],
            ['id' => 2, 'nama' => 'Contoh Barang 2']
        ];
        
        return $this->response->setJSON($data);
    }
}