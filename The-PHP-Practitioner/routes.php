<?php 

// $routes->define([
//   '' => 'controllers/index.php',
//   'about' => 'controllers/about.php',
//   'about/culture' => 'controllers/about-culture.php',
//   'contact' => 'controllers/contact.php',
//   'names' => 'controllers/add-name.php'
// ]);

$routes->get('', 'controllers/index.php');
$routes->get('about', 'controllers/about.php');
$routes->get('about/culture', 'controllers/about-culture.php');
$routes->get('contact', 'controllers/contact.php');

$routes->post('names', 'controllers/add-name.php');

