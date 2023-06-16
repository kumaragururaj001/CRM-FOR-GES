<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// ...

$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Admin Routes */
$route['admin'] = 'admin/index';
$route['admin/logout'] = 'admin/logout';

// ...
