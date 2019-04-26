<?php  
	if(!$_POST) header('location: ?view=home');


	switch ($state = $_POST['state'] ? strtolower($_POST['state']) : null) {

		case 'signup':
			echo 'signup';
		break;
		
		case 'login':
			$data = json_decode($_POST['data']);
			echo $data->password;
		break;

		default:
			echo 'default';
		break;
	}
?>