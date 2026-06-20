<?php

// 1. FCPATH
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// 2. Load Config\Paths
require FCPATH . '../app/Config/Paths.php';

$paths = new Config\Paths();

// 3. Composer autoloader
require rtrim($paths->vendorDirectory, '\\/') . '/autoload.php';

// 4. ENVIRONMENT
defined('ENVIRONMENT') || define(
    'ENVIRONMENT',
    (string) (
        $_SERVER['CI_ENVIRONMENT']
        ?? $_ENV['CI_ENVIRONMENT']
        ?? getenv('CI_ENVIRONMENT')
        ?: 'development'
    )
);

// 5. Load Boot.php dan jalankan sebagai web — BUKAN bootstrap.php testing
require rtrim($paths->systemDirectory, '\\/') . '/Boot.php';

CodeIgniter\Boot::bootWeb($paths);