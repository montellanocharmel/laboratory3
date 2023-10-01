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
$routes->get('/productview', 'UserController::productview');
$routes->get('/adminview', 'UserController::adminview');
$routes->get('/registerview', 'UserController::registerview');
$routes->post('/register', 'UserController::register');
$routes->get('/signin', 'UserController::Login');
$routes->post('/LoginAuth', 'UserController::LoginAuth');
$routes->get('/logout', 'Home::logout');
