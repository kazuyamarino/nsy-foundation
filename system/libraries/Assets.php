<?php
/**
 * Attention, don't try to change the structure of the code, delete, or change.
 * Because there is some code connected to the NSY system. So, be careful.
 *
 * Hi Welcome to NSY Assets Manager.
 * The easiest & best assets manager in history
 * Made with love by Vikry Yuansah
 *
 * How to use it? Simply follow this format.
 * Create <meta> tag :
 * Add::meta('name', 'content');
 *
 * Create <link> tag :
 * Add::link('filename/url_filename', 'attribute_rel', 'attribute_type');
 *
 * Create <script> tag :
 * Add::script('filename/url_filename', 'attribute_type', 'attribute_charset', 'async defer');
 *
 * You can write any html tags with custom method :
 * Add::custom('anythings');
 *
 * After that, to use it in View, you only need to call the static method name that you created like this :
 * Pull::method_name();
 *
 * For example :
 * Pull::header_assets();
 * Pull::footer_assets();
*/
namespace System\Libraries;

defined('ROOT') OR exit('No direct script access allowed');

use System\Core\NSY_AssetManager as Add;

Class Assets extends \System\Core\NSY_AssetManager
{

	public static function header_assets()
	{
		// Site Title
		add::custom('<title>' . SITETITLE . ' | ' . VERSION . '</title>');
		// Meta Tag
		add::meta('charset="utf-8"', null);
		add::meta('http-equiv="x-ua-compatible"', 'ie=edge');
		add::meta('name="description"', SITEDESCRIPTION);
		add::meta('name="keywords"', SITEKEYWORDS);
		add::meta('name="author"', SITEAUTHOR);
		add::meta('name="viewport"', 'width=device-width, initial-scale=1, shrink-to-fit=no');
		// Favicon
		add::link('favicon.png', 'shortcut icon', null);
		// Main Style
		add::link('main.css', 'stylesheet', 'text/css');
		// Foundation CSS
		add::link('vendor/foundation.min.css', 'stylesheet', 'text/css');
		add::link('vendor/responsive-tables.min.css', 'stylesheet', 'text/css');
		// Datatables CSS
		add::link('vendor/dataTables.foundation.min.css', 'stylesheet', 'text/css');
		add::link('vendor/foundation-datepicker.min.css', 'stylesheet', 'text/css');
		// Font Awesome CSS
		add::link('vendor/all.min.css', 'stylesheet', 'text/css');
		// Modernizr JS
		add::script('vendor/modernizr.min.js', 'text/javascript', 'UTF-8', null);
	}

	public static function footer_assets()
	{
		// JQuery JS
		add::script('vendor/jquery.min.js', 'text/javascript', 'UTF-8', null);
		add::script('vendor/jquery-migrate-3.1.0.min.js', 'text/javascript', 'UTF-8', null);
		// Foundation JS
		add::script('vendor/foundation.min.js', 'text/javascript', 'UTF-8', null);
		add::script('vendor/what-input.min.js', 'text/javascript', 'UTF-8', null);
		add::script('vendor/responsive-tables.min.js', 'text/javascript', 'UTF-8', null);
		add::script('vendor/foundation-datepicker.min.js', 'text/javascript', 'UTF-8', null);
		// Datatables JS
		add::script('vendor/jquery.dataTables.min.js', 'text/javascript', 'UTF-8', null);
		add::script('vendor/dataTables.foundation.min.js', 'text/javascript', 'UTF-8', null);
		// Google Analytics: change UA-XXXXX-Y to be your site's ID.
		add::custom("<script>window.ga=function(){ga.q.push(arguments)}; ga.q=[]; ga.l=+new Date;ga('create','UA-XXXXX-Y','auto'); ga('send','pageview')</script>");
		add::script('https://www.google-analytics.com/analytics.js', 'text/javascript', null, 'async defer');
		// System JS
		add::script('config/system.js', 'text/javascript', 'UTF-8', null);
		// Base JS
		add::script('main.js', 'text/javascript', 'UTF-8', null);
	}

	public static function datatables_init()
	{
		add::script('datatables/init.js', 'text/javascript', 'UTF-8', null);
	}

	public static function datatables_crud_init()
	{
		add::script('datatables/init_crud.js', 'text/javascript', 'UTF-8', null);
	}

	public static function sweetalert_init()
	{
		add::script('vendor/sweetalert2.all.min.js', 'text/javascript', 'UTF-8', null);
		add::script('vendor/polyfill.min.js', 'text/javascript', 'UTF-8', null);
	}

}
