<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// Pacientes
$route['pacientes'] = 'pacientes/index';
$route['pacientes/crear'] = 'pacientes/crear';
$route['pacientes/guardar'] = 'pacientes/guardar';
$route['pacientes/editar/(:num)'] = 'pacientes/editar/$1';
$route['pacientes/actualizar/(:num)'] = 'pacientes/actualizar/$1';
$route['pacientes/eliminar/(:num)'] = 'pacientes/eliminar/$1';

// Hospitalizaciones
$route['hospitalizaciones'] = 'hospitalizaciones/index';
$route['hospitalizaciones/crear'] = 'hospitalizaciones/crear';
$route['hospitalizaciones/guardar'] = 'hospitalizaciones/guardar';
$route['hospitalizaciones/editar/(:num)'] = 'hospitalizaciones/editar/$1';
$route['hospitalizaciones/actualizar/(:num)'] = 'hospitalizaciones/actualizar/$1';
$route['hospitalizaciones/eliminar/(:num)'] = 'hospitalizaciones/eliminar/$1';

// Salas
$route['salas'] = 'salas/index';
$route['salas/crear'] = 'salas/crear';
$route['salas/guardar'] = 'salas/guardar';
$route['salas/editar/(:num)'] = 'salas/editar/$1';
$route['salas/actualizar/(:num)'] = 'salas/actualizar/$1';
$route['salas/eliminar/(:num)'] = 'salas/eliminar/$1';

// Tipos de Diagnóstico
$route['tiposdiagnostico'] = 'tiposdiagnostico/index';
$route['tiposdiagnostico/crear'] = 'tiposdiagnostico/crear';
$route['tiposdiagnostico/guardar'] = 'tiposdiagnostico/guardar';
$route['tiposdiagnostico/editar/(:num)'] = 'tiposdiagnostico/editar/$1';
$route['tiposdiagnostico/actualizar/(:num)'] = 'tiposdiagnostico/actualizar/$1';
$route['tiposdiagnostico/eliminar/(:num)'] = 'tiposdiagnostico/eliminar/$1';
