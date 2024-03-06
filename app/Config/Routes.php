<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tambah', 'Home::tambah');
$routes->post('/submit', 'Home::simpan');
$routes->get('/edit/(:any)', 'Home::edit/$1');
$routes->post('/editsubmit', 'Home::editsubmit');
$routes->get('/delete/(:any)', 'Home::delete/$1');
