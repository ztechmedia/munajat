<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = "AppController";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Admin Route
$route['home'] = 'admin/HomeController';

//Auth Route
$route['login'] = 'auth/AuthController/login';
