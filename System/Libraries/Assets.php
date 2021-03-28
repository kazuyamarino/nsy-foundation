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
	Add::link('favicon.png', 'shortcut icon', null);

	// Main Style
	Add::link('main.css', 'stylesheet', 'text/css');

	// Foundation CSS
	Add::link('../vendor/foundation-sites/css/foundation.min.css', 'stylesheet', 'text/css');
	Add::link('responsive-tables.min.css', 'stylesheet', 'text/css');

	// Datatables CSS
	Add::link('../vendor/datatables.net-zf/css/dataTables.foundation.min.css', 'stylesheet', 'text/css');
	Add::link('../vendor/foundation-datepicker/css/foundation-datepicker.min.css', 'stylesheet', 'text/css');

	// Font Awesome CSS
	Add::link('../vendor/@fortawesome/fontawesome-free/css/all.min.css', 'stylesheet', 'text/css');

	// Modernizr JS
	Add::script('modernizr.min.js', 'text/javascript', 'UTF-8', null);
}

function footer_assets()
{
	// JQuery JS
	Add::script('../vendor/jquery/jquery.min.js', 'text/javascript', 'UTF-8', null);
	Add::script('../vendor/jquery-migrate/jquery-migrate.min.js', 'text/javascript', 'UTF-8', null);

	// Foundation JS
	Add::script('../vendor/foundation-sites/js/foundation.min.js', 'text/javascript', 'UTF-8', null);
	Add::script('../vendor/what-input/what-input.min.js', 'text/javascript', 'UTF-8', null);
	Add::script('../vendor/foundation-datepicker/js/foundation-datepicker.min.js', 'text/javascript', 'UTF-8', null);

	// Datatables JS
	Add::script('../vendor/datatables.net/jquery.dataTables.min.js', 'text/javascript', 'UTF-8', null);
	Add::script('../vendor/datatables.net-zf/js/dataTables.foundation.min.js', 'text/javascript', 'UTF-8', null);
	Add::script('responsive-tables.min.js', 'text/javascript', 'UTF-8', null);

	// Google Analytics: change UA-XXXXX-Y to be your site's ID.
	Add::custom("<script>window.ga=function(){ga.q.push(arguments)}; ga.q=[]; ga.l=+new Date;ga('create','UA-XXXXX-Y','auto'); ga('send','pageview')</script>");
	Add::script('https://www.google-analytics.com/analytics.js', 'text/javascript', null, 'async defer');

	// System JS
	Add::script('config/system.js', 'text/javascript', 'UTF-8', null);

	// Base JS
	Add::script('main.js', 'text/javascript', 'UTF-8', null);
}

function sweetalert_init()
{
	Add::script('../vendor/sweetalert2/sweetalert2.all.min.js', 'text/javascript', 'UTF-8', null);
	Add::script('../vendor/promise-polyfill/polyfill.min.js', 'text/javascript', 'UTF-8', null);
}

function datatables_init()
{
	Add::script('datatables/init.js', 'text/javascript', 'UTF-8', null);
}

function datatables_crud_init()
{
	Add::script('datatables/init_crud.js', 'text/javascript', 'UTF-8', null);
}
