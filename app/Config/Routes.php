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

$routes->get('/services', 'ServicesController::Services');
$routes->post('/add_services', 'ServicesController::AddServices');
$routes->get('edit_services/(:any)', 'ServicesController::EditServices/$1');
$routes->post('update_service/(:any)', 'ServicesController::UpdateServices/$1');
$routes->post('/delete_services/(:any)', 'ServicesController::DeleteServices/$1');
$routes->post('update_services_status/(:any)', 'ServicesController::UpdateServicesstatus/$1');

// ---Service Pricing--
$routes->get('service_pricing/(:any)', 'ServicesController::ServicePricing/$1');
$routes->post('/add_service_pricing', 'ServicesController::AddServicePricing');
$routes->get('edit_service_pricing/(:any)', 'ServicesController::EditServicePricing/$1');
$routes->post('update_service_pricing/(:any)', 'ServicesController::UpdateServicePricing/$1');
$routes->post('/delete_service_pricing/(:any)', 'ServicesController::DeleteServicePricing/$1');
$routes->post('update_services_pricing_status/(:any)', 'ServicesController::UpdateServicesPricingStatus/$1');

// ----Addons Service-----
$routes->get('addons_service/(:any)', 'ServicesController::AddonsService/$1');
$routes->post('/add_addons_service', 'ServicesController::AddAddonsService');
$routes->get('edit_addons_service/(:any)', 'ServicesController::EditAddonsService/$1');
$routes->post('update_addons_service/(:any)', 'ServicesController::UpdateAddonsService/$1');
$routes->post('delete_addons_service/(:any)', 'ServicesController::DeleteAddonsService/$1');
$routes->post('update_services_addons_status/(:any)', 'ServicesController::UpdateServicesAddonsStatus/$1');


// ---Unit Pricing Services---
$routes->get('unit_pricing/(:any)', 'ServicesController::UnitPricing/$1');
$routes->post('/add_unit_pricing', 'ServicesController::AddUnitPricing');
$routes->get('edit_unit_pricing/(:any)', 'ServicesController::EditUnitPricing/$1');
$routes->post('update_unit_pricing/(:any)', 'ServicesController::UpdateUnitPricing/$1');
$routes->post('delete_unit_pricing/(:any)', 'ServicesController::DeleteUnitPricing/$1');
$routes->post('update_unit_status/(:any)', 'ServicesController::UpdateUnitstatus/$1');




// ---For Staff---

$routes->get('/staffhome', 'StaffController::Staff');
$routes->post('/add_staff', 'StaffController::AddStaff');
// $routes->get('staff_details/(:any)', 'StaffController::EditUnitPricing/$1');
$routes->get('edit_staff/(:any)', 'StaffController::EditStaff/$1');
$routes->post('update_staff/(:any)', 'StaffController::UpdateStaff/$1');



// ----For CRM----
$routes->get('/CRM', 'CRMController::CRM');
$routes->post('/add_CRM', 'CRMController::AddCRM');
$routes->get('edit_CRM/(:any)', 'CRMController::editCRM/$1');
$routes->post('update_CRM/(:any)', 'CRMController::UpdateCRM/$1');
$routes->post('delete_CRM/(:any)', 'CRMController::DeleteCRM/$1');


// ----For Messages----
$routes->get('/messages', 'CRMController::Messages');
$routes->post('/add_Messages', 'CRMController::AddMessages');


$routes->get('/sms_messages', 'CRMController::SmsMessages');

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
