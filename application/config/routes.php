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
$route['default_controller'] = 'User_controller/index';
$route['index'] = 'User_controller/index';
$route['about'] = 'User_controller/about';
$route['courses'] = 'User_controller/courses';
$route['contact'] = 'User_controller/contact';
$route['blog'] = 'User_controller/blog';

$route['admin/login'] = 'Admin_controller/index';
$route['admin/login'] = 'Admin_controller';
$route['admin/dashboard'] = 'Admin_controller/dashboard';


// Course Start
$route['admin/course_create'] = 'Admin_controller/admin_course_create';
$route['admin/course_create_act'] = 'Admin_controller/admin_course_create_act';
$route['admin/course_list'] = 'Admin_controller/admin_course_list';
$route['admin/course_edit/(.*)'] = 'Admin_controller/admin_course_edit/$1';
// Slider Start
$route['admin/slider_create'] = 'Admin_controller/admin_slider_create';
$route['admin/slider_list'] = 'Admin_controller/admin_slider_list';
// Partners Start
$route['admin/partners_create'] = 'Admin_controller/admin_partners_create';
$route['admin/partners_list'] = 'Admin_controller/admin_partners_list';
// Category Start
$route['admin/category_create'] = 'Admin_controller/admin_category_create';
$route['admin/category_list'] = 'Admin_controller/admin_category_list';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['(:num)'] = "page/index/$1";
