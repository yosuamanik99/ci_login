<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth';  // Default halaman saat akses root: halaman login
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ROUTE UNTUK AUTHENTIKASI (Login, Logout, Register)
$route['auth'] = 'auth/index';                       // Halaman login
$route['auth/login'] = 'auth/index';                 // Halaman login juga
$route['auth/login_process'] = 'auth/login_process'; // Proses login
$route['auth/logout'] = 'auth/logout';               // Logout

$route['auth/register'] = 'auth/register';               // Halaman register
$route['auth/register_process'] = 'auth/register_process'; // Proses registrasi

// ROUTE UNTUK DASHBOARD
$route['dashboard'] = 'dashboard/index';  // Halaman dashboard setelah login

