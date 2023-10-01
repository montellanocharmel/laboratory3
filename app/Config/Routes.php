<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/detail', 'Home::detail');
$routes->get('/admin', 'AdminController::admin');
$routes->get('/product/(:any)', 'AdminController::product/$1');
$routes->post('/save', 'AdminController::save');
$routes->get('/delete/(:any)', 'AdminController::delete/$1');
$routes->get('/edit/(:any)', 'AdminController::edit/$1');
