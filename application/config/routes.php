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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//===================================Admin Panel linkleri===================


//portfolio hissesi
$route['utech_admin_panel_portfolio'] = 'Panel_admin_page_portfolio';

//portfolio kateqoriyalari hissesi
$route['utech_admin_panel_portfolio_category'] = 'Panel_admin_page_portfolio/portfolio_category_list';

//portfolio kateqoriyalari elave etme hissesi
$route['utech_admin_panel_portfolio_category_add'] = 'Panel_admin_page_portfolio/portfolio_category_list_add';

//portfolio kateqoriyalari elave etme hissesinin actionu
$route['utech_admin_panel_portfolio_category_add_act'] = 'Panel_admin_page_portfolio/portfolio_category_list_add_act';

//portfolio kateqoriyalari yenileme hissesi
$route['utech_admin_panel_portfolio_category_update/(.*)'] = 'Panel_admin_page_portfolio/portfolio_category_list_update/$1';

//portfolio kateqoriyalari yenileme hissesi
$route['utech_admin_panel_portfolio_category_update_act/(.*)'] = 'Panel_admin_page_portfolio/portfolio_category_list_update_act/$1';


//portfolio kateqoriyalari silme hissesi
$route['utech_admin_panel_portfolio_category_delete/(.*)'] = 'Panel_admin_page_portfolio/portfolio_category_list_delete/$1';


//portfolio list hissesi
$route['utech_admin_panel_portfolio_list'] = 'Panel_admin_page_portfolio/portfolio_list';


//===================================Admin Panel linkleri===================








//===================================Front hissesi==========================

//about hissesi
$route['about'] = 'About/index';


//===================================Front hissesi==========================
