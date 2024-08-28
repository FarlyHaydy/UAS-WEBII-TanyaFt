<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\HTTP\IncomingRequest;

$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->post('/auth/processLogin', 'AuthController::processLogin');
$routes->get('/register', 'AuthController::register');
$routes->post('/auth/processRegister', 'AuthController::processRegister');
$routes->get('/logout', 'AuthController::logout');

// Routes requiring authentication
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/dashboard', 'DashboardController::index');
    $routes->get('/eResponse', 'EresponseController::index');
    $routes->get('/eResponse/tanya_ft', 'EresponseController::tanya_ft');
    $routes->get('/tambah_pengajuan', 'EresponseController::tambah_pengajuan');
    $routes->post('/tambah_pengajuan/process', 'EresponseController::process_tambah_pengajuan');
    $routes->post('pengajuan/simpan', 'Pengajuan::simpan');
    $routes->get('pengajuan/delete/(:num)', 'Pengajuan::delete/$1');
    $routes->get('pengajuan/detail/(:num)', 'Pengajuan::detail/$1');
    $routes->get('uploads/(:any)', 'Uploads::showFile/$1');
    $routes->get('/pengajuan/tanggapan/(:num)', 'Pengajuan::tanggapan/$1');
    $routes->post('pengajuan/approve', 'Pengajuan::approve');
    $routes->get('/profile', 'Profile::index'); 
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
