<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

abstract class BaseController extends Controller
{
    protected $helpers = [];

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // 1. Tambahkan header CORS agar browser mengizinkan akses
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Authorization, Content-Type, X-Requested-With');

        // 2. Jika browser mengirim request OPTIONS (preflight), hentikan proses di sini
        if ($request->getMethod() === 'options') {
            exit;
        }

        // 3. Logika bawaan CodeIgniter
        if (ENVIRONMENT === 'production') {
            \Config\Services::toolbar()->disable();
        }

        parent::initController($request, $response, $logger);
    }
}