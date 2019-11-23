<?php
namespace Libraries;

defined('ROOT') OR exit('No direct script access allowed');

Class Alerts {

	public static function pull_alerts($message)
	{
		if (!empty($message)) {
			if ($message == 'register-success') {
				echo '<script>Swal.fire("Success!", "Data has been sent!", "success");</script>';
			} elseif ($message == 'delete-success') {
				echo '<script>Swal.fire("Success!", "Data has been deleted!", "success");</script>';
			} elseif ($message == 'update-success') {
				echo '<script>Swal.fire("Success!", "Data has been updated!", "success");</script>';
			} elseif ($message == 'must-select') {
				echo '<script>Swal.fire("Warning!", "Data must be selected!", "warning");</script>';
			}
		}
	}

}
