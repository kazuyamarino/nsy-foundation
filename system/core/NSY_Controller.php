<?php
namespace Core;

defined('ROOT') OR exit('No direct script access allowed');

class NSY_Controller {
    /*
    Define Variables as Array
     */
    var $vars = [];

    /*
    Set The Variables
     */
    protected function set($d = null) {
        $this->vars = array_merge($this->vars, $d);
    }

    /*
    HMVC & MVC View Folder
     */
    protected function load_view($module = null, $filename = null) {
        extract($this->vars);
		if( $module == "" || $module == null || empty($module) || !isset($module) ) {
			require_once(MVC_VIEW_DIR . $filename . '.php');
		} else {
			require_once(HMVC_VIEW_DIR . $module . '/views/' . $filename . '.php');
		}
		return $this;
    }

    /*
    Template Directory
     */
    protected function load_template($filename = null) {
		extract($this->vars);
        require_once(SYS_TMP_DIR . $filename . '.php');
		return $this;
    }

	/*
	Start method for variables sequence
	 */
	protected function vars($variables = null) {
 		$this->variables = $variables;
 		return $this;
 	}

	protected function bind($bind = null) {
		$this->bind = $bind;
		return $this;
	}

	// Helper for NSY_Model to create a sequence of the named placeholders
	protected function sequence() {
		$in = "";
		foreach ($this->variables as $i => $item)
		{
		    $key = "$this->bind".$i;
		    $in .= "$key,";
		    $in_params[$key] = $item; // collecting values into key-value array
		}
		$in = rtrim($in,","); // :id0,:id1,:id2

		return [$in, $in_params];
	}
	/*
	End method for variables sequence
	 */

	/*
 	Function for basic field validation (present and neither empty nor only white space
 	 */
 	protected function not_filled($str = '') {
		if (!empty($str)) {
			return false;
			exit();
		} else {
	  		if (is_array($str)) {
				return (!isset($str) || empty($str));
	  		} else {
	  			return (!isset($str) || $str == '' || empty($str));
	  		}
		}
  	}

 	/*
 	Function for basic field validation (present and neither filled nor not empty)
 	 */
 	protected function is_filled($str = '') {
		if (!isset($str)) {
			return false;
			exit();
		} else {
			if (is_array($str)) {
				return (isset($key) || !empty($str));
	  		} else {
				return (isset($key) || !empty($str));
	  		}
		}
  	}

}
