<?php

use CodeIgniter\Router\RouteCollection;
use  App\Controllers\FrontController;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', [FrontController::class, 'index']);
$routes->get('/create', [FrontController::class, 'create']);
$routes->get('/news/(:segment)', [FrontController::class, 'show'], ['as' => 'news.show']);
$routes->get('news/edit/(:segment)', [FrontController::class, 'edit']);
$routes->post('news/create', [FrontController::class, 'store'], ['as' => 'news.store']);