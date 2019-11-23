<?php
namespace Modules\Controllers;

defined('ROOT') OR exit('No direct script access allowed');

use Core\NSY_Controller;
use Models\Model_Welcome;
use Modules\Models\Model_Hello;
use Carbon\Carbon;
use Libraries\Cookie;

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
