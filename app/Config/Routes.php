<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('services', 'Home::services');
$routes->get('4m-framework', 'Home::fourM');
$routes->get('industries', 'Home::industries');
$routes->get('hospital-sector', 'Home::hospitalSector');
$routes->get('hospitality-sector', 'Home::hospitalitySector');
$routes->get('projects', 'Home::projects');
$routes->get('team', 'Home::team');
$routes->get('contact', 'Home::contact');

