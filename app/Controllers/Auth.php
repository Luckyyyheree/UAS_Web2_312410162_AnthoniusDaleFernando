<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;

class Auth extends BaseController
{
    use ResponseTrait;

    public function register()
    {
        try {
            $model = new UserModel();

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $data = [
                'username' => $username,
                'password' => password_hash($password, PASSWORD_BCRYPT)
            ];

            $model->save($data);
            
            return $this->respondCreated([
                'message'  => 'Registrasi Berhasil!'
            ]);

        } catch (\Throwable $e) {
            return $this->respond([
                'error_asli' => $e->getMessage()
            ], 500);
        }
    }

    public function login()
    {
        try {
            $model = new UserModel();

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            // Cari user berdasarkan username
            $user = $model->where('username', $username)->first();

            // Jika user ditemukan, cek password-nya cocok atau tidak
            if ($user && password_verify($password, $user['password'])) {
                return $this->respond([
                    'status'   => 200,
                    'message'  => 'Login Berhasil!',
                    'data'     => [
                        'username' => $user['username']
                    ]
                ], 200);
            }

            // Jika salah username atau password
            return $this->failUnauthorized('Username atau Password salah!');

        } catch (\Throwable $e) {
            return $this->respond([
                'error_asli' => $e->getMessage()
            ], 500);
        }
    }
}