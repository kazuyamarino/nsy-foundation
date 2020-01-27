<?php
namespace System\Controllers;

use System\Core\NSY_Controller;
use System\Models\Model_Welcome;
use System\Modules\Homepage\Models\Model_Hello;
use System\Libraries\Cookie;

use Carbon\Carbon;

class Welcome extends NSY_Controller
{

	public function __construct()
	{

	}

	public function index()
	{
		// Load MVC view page
		$this->load_template("header")->load_view(null, "index")->load_template("footer");
	}

}
