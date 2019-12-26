<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/


$route['default_controller'] = "HomeController/index";
$route['home'] 				 = "HomeController/index";
$route['404_override']		 = 'error';


/*********** USER DEFINED ROUTES *******************/


$route['adminLogin'] 		 = 'AdminController/index';
$route['loginMe'] 		     = 'AdminController/loginMe';

$route['dashboard'] 	     = 'UserController';
$route['logout'] 		     = 'UserController/logout';
$route['userListing']        = 'UserController/userListing';
$route['userListing/(:num)'] = "UserController/userListing/$1";
 
$route['loadChangePass']     = "UserController/loadChangePass";
$route['changePassword']     = "UserController/changePassword";
$route['pageNotFound']       = "UserController/pageNotFound";



//=================== Products ==========================//

$route['productTypeListing']      = 'ProductTypeController/productTypeListing';
$route['addNewProductType']       = 'ProductTypeController/addNewProductType';
$route['addNewProductTypeData']   = 'ProductTypeController/addNewProductTypeData';
$route['editProductType/(:num)']  = 'ProductTypeController/editProductType/$1';
$route['editNewProductTypeData/(:num)']  = 'ProductTypeController/editProductTypeData/$1';



$route['productBrandListing']     		= 'ProductBrandController/productBrandListing';
$route['addNewProductBrand']      		= 'ProductBrandController/addNewProductBrand';
$route['addNewProductBrandData']  		= 'ProductBrandController/addNewProductBrandData';
$route['editProductBrand/(:num)']  		= 'ProductBrandController/editProductBrand/$1';
$route['editOld/(:num)']				= 'ProductListController/editProductList/$1';
$route['updateProductBrandData/(:num)'] = 'ProductBrandController/updateProductBrandData/$1';

$route['productListing']          = 'ProductListController/productListing';
$route['productListing/(:num)']   = 'ProductListController/productListing';
$route['addNewProduct']           = 'ProductListController/addNewProduct';
$route['addNewProductData']       = 'ProductListController/addNewProductData';
$route['UpdateProductData']       = 'ProductListController/UpdateProductData';

$route['deleteProduct/(:num)']    = 'ProductListController/deleteProduct/$1';


$route['site_user_login']         = 'HomeController/site_user_login';
$route['shop']					  = 'HomeController/explore_product_details';
$route['registration']            = 'HomeController/registration';
$route['site_user_login']         = 'HomeController/site_user_login';
$route['user_registration']         = 'HomeController/user_registration';





$route['buynow/(:any)']="HomeController/buynow/$1";
//for user list in admin panel//

//$route['userslist']         = 'HomeController/site_user_login';//









/* End of file routes.php */
/* Location: ./application/config/routes.php */