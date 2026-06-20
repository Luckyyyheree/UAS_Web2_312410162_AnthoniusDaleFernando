<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Menampilkan semua barang
$routes->get('api/barang', 'Barang::index');

// Menampilkan satu barang berdasarkan ID (PENTING untuk fitur "Show")
$routes->get('api/barang/(:num)', 'Barang::show/$1');

// Menambah barang baru
$routes->post('api/barang', 'Barang::create');

// Mengubah barang (Update)
$routes->put('api/barang/(:num)', 'Barang::update/$1');

// Menghapus barang (Delete)
$routes->delete('api/barang/(:num)', 'Barang::delete/$1');