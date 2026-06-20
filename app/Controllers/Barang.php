<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\RESTful\ResourceController;

class Barang extends ResourceController
{
    protected $modelName = 'App\Models\BarangModel';
    protected $format    = 'json';

    // 1. READ: Mengambil semua data
    public function index()
    {
        $data = $this->model->findAll();
        return $this->respond($data, 200);
    }

    // 2. READ: Mengambil satu data berdasarkan ID
    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data, 200);
        }
        return $this->failNotFound('Data tidak ditemukan');
    }

    // 3. CREATE: Menambah data baru
    public function create()
    {
        $data = [
            'id_kategori' => $this->request->getPost('id_kategori'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'stok'        => $this->request->getPost('stok'),
            'harga'       => $this->request->getPost('harga'),
        ];

        if ($this->model->insert($data)) {
            return $this->respondCreated(['pesan' => 'Data berhasil ditambahkan']);
        }
        return $this->fail($this->model->errors());
    }

    // 4. UPDATE: Mengubah data
    public function update($id = null)
    {
        $data = $this->request->getRawInput(); // Mengambil input JSON/Form
        
        if ($this->model->update($id, $data)) {
            return $this->respond(['pesan' => 'Data berhasil diupdate']);
        }
        return $this->fail($this->model->errors());
    }

    // 5. DELETE: Menghapus data
    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['pesan' => 'Data berhasil dihapus']);
        }
        return $this->failNotFound('Data tidak ditemukan');
    }
}