<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table            = 'kategori'; // Nama tabel di database
    protected $primaryKey       = 'id';       // Primary key
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    
    // Ini bagian penting buat keamanan dan CRUD
    protected $allowedFields    = ['nama_kategori']; 

    // Biar otomatis nambahin timestamp (kalau di database lu ada kolom created_at/updated_at)
    protected $useTimestamps    = false; 

    // Validasi data biar gak bisa asal input kosong
    protected $validationRules      = [
        'nama_kategori' => 'required|min_length[3]|is_unique[kategori.nama_kategori]'
    ];

    protected $validationMessages   = [
        'nama_kategori' => [
            'required'  => 'Nama kategori harus diisi!',
            'is_unique' => 'Nama kategori ini sudah ada!'
        ]
    ];
}