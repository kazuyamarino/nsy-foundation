<?php
namespace Modules\Controllers;

defined('ROOT') OR exit('No direct script access allowed');

use Core\NSY_Controller;
use Modules\Models\Model_Hello;

class Hello extends NSY_Controller
{

	public function index_hmvc()
	{
		$this->load_template("header")->load_hview("index")->load_template("footer");
	}

}
