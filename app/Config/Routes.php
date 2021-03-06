<?php

namespace Config;

// Create a new instance of our RouteCollection class.
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
$routes->get('/Login', 'Login::index');
$routes->get('/Register', 'Register::register');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');
// $routes->get('/home', 'Home::index', ['filter' => 'usersAuth']);
$routes->get('/', 'Landing::index');
$routes->get('/dashboard', 'news::dashboard', ['filter' => 'usersAuth']);
$routes->add('/profile', 'User::profile', ['filter' => 'usersAuth']);
$routes->post('/edit', 'user::edit', ['filter' => 'usersAuth']);
$routes->post('delete/(:segment)', 'User::delete/$1', ['filter' => 'usersAuth']);
$routes->get('/create', 'news::create', ['filter' => 'usersAuth']);
$routes->get('/list', 'news::list', ['filter' => 'usersAuth']);
$routes->get('/news/(:any)', 'news::detail/$1', ['filter' => 'usersAuth']);
$routes->add('/delete/(:segment)', 'news::delete/$1');
$routes->get('/edit/(:segment)', 'news::edit/$1');
$routes->get('/film/edit/(:segment)', 'Film::edit/$1');
$routes->delete('/film/(:num)', 'Film::delete/$1');
$routes->get('/film/(:any)', 'Film::detail/$1', ['filter' => 'usersAuth']);
$routes->get('/Film', 'Film::index', ['filter' => 'usersAuth']);
$routes->get('/Film/create', 'Film::create', ['filter' => 'usersAuth']);

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