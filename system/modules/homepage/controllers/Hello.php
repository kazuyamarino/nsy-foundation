<?php
namespace System\Modules\Homepage\Controllers;

use System\Core\NSY_Controller;
use System\System\Models\Model_Welcome;
use System\Modules\Homepage\Models\Model_Hello;
use System\Libraries\Cookie;

use Carbon\Carbon;

class Hello extends NSY_Controller
{

	public function __construct()
	{

	}

	public function index_hmvc()
	{
		// Load HMVC view page
		$this->load_template("header")->load_view("homepage", "index")->load_template("footer");
	}

}
