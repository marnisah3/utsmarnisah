<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/anggota', 'Anggota::index');
$routes->get('/anggota/(:num)', 'Anggota::detail/$1');
$routes->post('/anggota/insertData', 'Anggota::insertData');
$routes->post('/anggota/updateData/(:num)', 'Anggota::updateData/$1');
$routes->get('/anggota/deleteData/(:num)', 'Anggota::deleteData/$1');

