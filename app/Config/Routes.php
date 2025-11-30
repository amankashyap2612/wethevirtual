<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//Default Login View
$routes->get('/event/(:any)', 'Home_event::action_update/$1');
$routes->get('/', 'Front_Home::index');
$routes->get('/web-admin', 'AdminHome::index');
$routes->get('/web-admin/web_pages/addpage', 'Web_pages::view');
//Customer Panel Routes
$routes->post("/customer-login","Login::customer");
//Admin Panel Routes
$routes->post("/admin-login","Login::admin");
//contact form submit

$routes->post("/form/(:any)","Form::action_update/$1");
$routes->group('',['filter'=>'AuthCheck'], function($routes){
    $routes->post('/web-admin/news/(:any)', 'News::action_update/$1');
    $routes->post('/web-admin/promo-code/(:any)', 'Promo::action_update/$1');
    $routes->post('/web-admin/services/(:any)', 'Services::action_update/$1');
    $routes->post('/web-admin/slider/(:any)', 'Slider::action_update/$1');
    $routes->post('/web-admin/testimonial/(:any)', 'Testimonial::action_update/$1');
    $routes->post('/web-admin/event/(:any)', 'Event::action_update/$1');
    $routes->post('/web-admin/event_category/(:any)', 'Event_category::action_update/$1');
	$routes->get('/web-admin/web_pages/edit_web_pages/(:any)','Web_pages::update_page/$1');
    $routes->post('/web-admin/web_pages/(:any)', 'Web_pages::action_update/$1');
    $routes->get('/web-admin/user/user_access', 'Admin_user::view');
    $routes->post('/web-admin/user/(:any)', 'Admin_user::action_update/$1');
    $routes->match(["get","post"],'/web-admin/(:any)', 'Admin::view/$1'); 
});

$routes->get('/(:any)', 'Pages::view/$1');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
