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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home/dashboard';
$route['home'] = 'home/dashboard';
$route['dashboard'] = 'home/dashboard';
$route['manage'] = 'home/manage';
$route['home/managestudio/timeline'] = 'home/managestudio_timeline';
$route['home/managestudio/background'] = 'home/managestudio_background';
$route['home/managestudio/employee'] = 'home/managestudio_employee';
$route['signin'] = 'home/adminLogin';
$route['signup'] = 'home/adminregister';
$route['forgotpassword'] = 'home/adminforgot';
$route['studio/timeline/clickedit/(:num)'] = 'home/clickmedit/$1';
$route['studio/timeline/createpage'] = 'home/mcreatepage';
$route['studio/employee/clickedit/(:num)'] = 'home/clickmeedit/$1';
$route['studio/employee/createpage'] = 'home/mecreatepage';
$route['project/clickedit/(:num)'] = 'home/clickedit/$1';
$route['project/createpage'] = 'home/createpage';
$route['details/(:num)'] = 'projects/details/$1';
$route['projekti/emisija/istaknuti'] = 'projects/show/featured';
$route['projekti/emisija/proizvod'] = 'projects/show/product';
$route['projekti/listprojekti'] = 'projects/listprojects';
$route['projekti/kategorija/javni'] = 'projects/category/Public';
$route['projekti/kategorija/kultura'] = 'projects/category/Culture';
$route['projekti/kategorija/Kuca'] = 'projects/category/House';
$route['projekti/kategorija/biznis'] = 'projects/category/Business';
$route['projekti/kategorija/Natječaji'] = 'projects/category/Tenders';
$route['projekti/kategorija/interijer'] = 'projects/category/Interior';
$route['projekti/show/najbolji'] = 'projects/show/finest';
$route['projekti/clickstudio'] = 'projects/clickstudio';
$route['projekti/tisak'] = 'projects/press';
$route['Dom/kontakt'] = 'Home/contact';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
