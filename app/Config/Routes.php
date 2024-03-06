<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tambah', 'Home::tambah');
$routes->post('/simpan', 'Home::simpan');
$routes->get('/edit/(:segment)', 'Home::edit/$1');
$routes->post('/update/(:segment)', 'Home::update/$1');
$routes->get('/hapus/(:segment)', 'Home::hapus/$1');
