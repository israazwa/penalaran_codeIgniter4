<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/debug', 'Home::index');
$routes->get('/', 'Home::rumah');
$routes->get('/about', 'Home::about');

$routes->get('/get-images', 'Home::getImages');
/* ADMIN UTAMA */
$routes->get('/admin', 'homeAdmin::index');
$routes->post('/adminupdateikhtisar/(:num)', 'homeAdmin::updateIkhtisar/$1');
/* ADMIN HERO */
$routes->get('/adminhero', 'heroAdmin::index');
$routes->post('/uploadxfotodashhome', 'heroAdmin::create');
$routes->post('/homepic/delete/(:num)', 'heroAdmin::drop/$1');
$routes->post('/homepic/update/(:num)', 'heroAdmin::update/$1');
$routes->get('/logouthero', 'heroAdmin::logout');
