<?php
namespace System\Routes;

defined('ROOT') OR exit('No direct script access allowed');

use System\Core\NSY_Router as Route;

Class Web
{

	public function __construct()
	{
		// define Web Routes, the params format is :
		// Format = Route::type('url', 'namespace\class_controller@method')
		// Route type : any, get, post, put, delete, options, & head

		// MVC Route
		Route::any('', 'System\Controllers\Welcome@index');

		// HMVC Route
		Route::any('hmvc', 'System\Modules\Homepage\Controllers\Hello@index_hmvc');

		// Crud Route
		Route::any('crud', 'System\Modules\Crud\Controllers\c_crud@crud_homepage');
		Route::any('crud/(:any)', 'System\Modules\Crud\Controllers\c_crud@crud_homepage');
		Route::any('crud/insert', 'System\Modules\Crud\Controllers\c_crud@crud_insert');
		Route::any('crud/delete/(:num)', 'System\Modules\Crud\Controllers\c_crud@crud_delete');
		Route::any('crud/multidelete', 'System\Modules\Crud\Controllers\c_crud@crud_multidelete');
		Route::any('crud/update/(:num)', 'System\Modules\Crud\Controllers\c_crud@crud_update');
		Route::any('crud/fetch/(:num)', 'System\Modules\Crud\Controllers\c_crud@crud_fetch');

		// Data Route
		Route::any('crud/data.json', 'System\Modules\Crud\Controllers\c_crud@crud_data');
	}

}
