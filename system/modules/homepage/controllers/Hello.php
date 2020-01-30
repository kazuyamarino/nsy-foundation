<?php
namespace System\Modules\Homepage\Controllers;

use System\Core\Load;

use System\Libraries\Cookie;
use Carbon\Carbon;

class Hello extends Load
{

	public function index_hmvc()
	{
		// Load HMVC view page
		Load::template("header");
		Load::view("homepage", "index");
		Load::template("footer");
	}

}
