<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->get('/', 'Home::index');

$routes->get('/users', 'UserController::users');
$routes->post('/add_users', 'UserController::addUsers');
$routes->post('update_user/(:any)', 'UserController::updateuser/$1');
$routes->post('/delete_user/(:any)', 'UserController::deleteuser/$1');

$routes->post('update_password/(:any)', 'UserController::updatePassword/$1');

$routes->get('edit_user/(:any)', 'UserController::editUser/$1');
$routes->get('edit_user_password/(:any)', 'UserController::editUserPassword/$1');


// $routes->get('/upgrade_plan/(:any)', 'UserController::upgradePlan/$1');


$routes->get('/upgrade_user_plan', 'UserController::upgradeUserPlan');



// $routes->post('upgrade_plan/(:any)', 'UserController::upgradePlan/$1');



$routes->get('/plan', 'PlanController::Plan');
$routes->post('/add_plan', 'PlanController::addPlan');
$routes->get('/edit_plan/(:any)', 'PlanController::editPlan/$1');
$routes->post('/update_plan/(:any)', 'PlanController::updatePlan/$1');



$routes->get('/settings', 'SettingController::settings');
$routes->post('/brand_setting', 'SettingController::brand_setting');
$routes->post('/email_setting', 'SettingController::email_setting');
$routes->post('/recaptch_setting', 'SettingController::recaptch_setting');

$routes->post('/update_brand_colore/(:any)', 'SettingController::updateColor/$1');
$routes->post('/update_brand_setting/(:any)', 'SettingController::update_brand_setting/$1');
$routes->post('/update_email_setting/(:any)', 'SettingController::update_email_setting/$1');
$routes->post('/update_recaptch_setting/(:any)', 'SettingController::update_recaptch_setting/$1');




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
