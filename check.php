<?php
// Paksa PHP menampilkan error paling detail
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Cek di mana vendor berada
$path = __DIR__ . '/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php';

if (file_exists($path)) {
    echo "File Autoloader DITEMUKAN di: " . $path . PHP_EOL;
    require_once $path;
    echo "Autoloader berhasil dimuat." . PHP_EOL;
} else {
    echo "File Autoloader TIDAK DITEMUKAN di: " . $path . PHP_EOL;
}