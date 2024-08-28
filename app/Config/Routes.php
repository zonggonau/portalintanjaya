<?php

namespace Config;


use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/profile', 'Home::profile');
$routes->get('/dokumen', 'Home::dokumen');
$routes->get('/egov', 'Home::egov');
$routes->get('/berita', 'Home::berita');
$routes->get('/galeri', 'Home::galeri');
$routes->get('/kontak', 'Home::kontak');


$routes->get('/login', 'Dashboard::login');

$routes->post('/auth/login', 'Auth::doLogin');
