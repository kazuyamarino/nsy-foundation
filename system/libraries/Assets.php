<?php
/**
* Attention, don't try to change the structure of the code, delete, or change.
* Because there is some code connected to the NSY system. So, be careful.
*
* Hi Welcome to NSY Assets Manager.
* The easiest & best assets manager in history.
* Made with love by Vikry Yuansah.
*
* How to use it? Simply follow this :
* https://github.com/kazuyamarino/nsy-docs/blob/master/USERGUIDE.md#introducting-to-nsy-assets-manager
*/

function header_assets()
{
	// Site Title
	Add::custom('<title>' . get_title() . ' ' . get_version() . ' | ' . get_codename() . '</title>');

	// Meta Tag
	Add::meta('charset="utf-8"', null);
	Add::meta('http-equiv="x-ua-compatible"', 'ie=edge');
	Add::meta('name="description"', get_desc());
	Add::meta('name="keywords"', get_keywords());
	Add::meta('name="author"', get_author());
	Add::meta('name="viewport"', 'width=device-width, initial-scale=1, shrink-to-fit=no');

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

function footer_assets()
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

function datatables_init()
{
	add::script('datatables/init.js', 'text/javascript', 'UTF-8', null);
}

function datatables_crud_init()
{
	add::script('datatables/init_crud.js', 'text/javascript', 'UTF-8', null);
}

function sweetalert_init()
{
	add::script('vendor/sweetalert2.all.min.js', 'text/javascript', 'UTF-8', null);
	add::script('vendor/polyfill.min.js', 'text/javascript', 'UTF-8', null);
}
