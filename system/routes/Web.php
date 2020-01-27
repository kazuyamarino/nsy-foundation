<?php
namespace System\Routes;

use System\Core\NSY_Router as Route;

Class Web
{

	public function __construct()
	{
		// define Web Routes, the params format is :
		// Format = Route::type('url', 'namespace\class_controller@method')
		// Route type : any, get, post, put, delete, options, & head

		// MVC Route
		Route::get('/', function() {
			Route::goto('Welcome@index');
		});

		// HMVC Route
		Route::get('/hmvc', function() {
			Route::goto('Homepage\Hello@index_hmvc');
		});

		// Crud Route
		Route::group('/crud', function() {
			Route::get('', function() {
				Route::goto('Crud\c_crud@crud_homepage');
			});
			Route::get('/(:any)', function($message) {
				Route::goto('Crud\c_crud@crud_homepage', $message);
			});
			Route::post('/insert', function() {
				Route::goto('Crud\c_crud@crud_insert');
			});
			Route::get('/delete/(:num)', function($id) {
				Route::goto('Crud\c_crud@crud_delete', $id);
			});
			Route::post('/multidelete', function() {
				Route::goto('Crud\c_crud@crud_multidelete');
			});
			Route::post('/update/(:num)', function($id) {
				Route::goto('Crud\c_crud@crud_update', $id);
			});
			Route::get('/fetch/(:num)', function($id) {
				Route::goto('Crud\c_crud@crud_fetch', $id);
			});
			Route::get('/data.json', function() {
				Route::goto('Crud\c_crud@crud_data');
			});
		});
	}

}
