<?php  
/**
* This is the router of the app. 
* This file makes sure to include te right controller for the request.
*/


	// Include the main configuration
	include 'core/config.php';

	if (isset($_GET['view'])) {
		if (file_exists(CONT_DIR . strtolower($_GET['view']) . '_controller.php')) {
			include CONT_DIR . strtolower($_GET['view']) . '_controller.php';
		}else {
			include CONT_DIR . '404_controller.php';
		}
	}else {
		include CONT_DIR . 'home_controller.php';
	}
?>