<?php
namespace Routes;

defined('ROOT') OR exit('No direct script access allowed');

use Core\NSY_Router as route;

Class Web
{

	public function __construct()
	{
		// define Web routes, the params format is :
		// Format = route::type('url', 'namespace\class_controller@method')
		// Route type : any, get, post, put, delete, options, & head

		// MVC Route
		route::any('shyffon/', 'Controllers\Welcome@index');

		// HMVC Route
		route::any('shyffon/hmvc', 'Modules\Controllers\Hello@index_hmvc');

		// Crud Route
		route::any('shyffon/crud', 'Modules\Controllers\c_crud@crud_homepage');
		route::any('shyffon/crud/(:any)', 'Modules\Controllers\c_crud@crud_homepage');
		route::any('shyffon/crud/insert', 'Modules\Controllers\c_crud@crud_insert');
		route::any('shyffon/crud/delete/(:num)', 'Modules\Controllers\c_crud@crud_delete');
		route::any('shyffon/crud/multidelete', 'Modules\Controllers\c_crud@crud_multidelete');
		route::any('shyffon/crud/update/(:num)', 'Modules\Controllers\c_crud@crud_update');
		route::any('shyffon/crud/fetch/(:num)', 'Modules\Controllers\c_crud@crud_fetch');

		// Data route
		route::any('shyffon/crud/data.json', 'Modules\Controllers\c_crud@crud_data');
	}

}
