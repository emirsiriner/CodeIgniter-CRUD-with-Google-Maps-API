<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'controller';
$route['(:any)'] = 'controller/$1';
$route['(:any)/(:any)'] = 'controller/$1/$2';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
