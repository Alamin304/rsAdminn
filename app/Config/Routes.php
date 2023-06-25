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

$routes->get('/userhome','UserController::userhome');



$routes->get('/categories', 'CategoriesController::categories');
$routes->get('/add_categories', 'add_categoryController::add_categories');
$routes->post('/insertData', 'add_categoryController::category_insertData');
$routes->get('/edit_categories/(:any)', 'add_categoryController::edit_categories/$1');
$routes->put('/update_categories/(:any)', 'add_categoryController::update_categories/$1');



$routes->get('/posts', 'postsController::posts');
$routes->get('/create_post', 'create_postController::create_post');
$routes->post('/postinsertData', 'create_postController::post_insertData');
$routes->get('/edit_posts/(:any)', 'create_postController::edit_posts/$1');
$routes->put('/update_posts/(:any)', 'create_postController::update_posts/$1');
$routes->get('/search', 'postsController::posts');



$routes->get('/tags', 'tagsController::tags');
$routes->get('/add_tags', 'add_tagsController::add_tags');
$routes->post('/taginsertData', 'add_tagsController::tags_insertData');
$routes->get('/edit_tags/(:any)', 'add_tagsController::edit_tags/$1');
$routes->put('/update_tags/(:any)', 'add_tagsController::update_tags/$1');



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
