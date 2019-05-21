<?php
	include "controller/loginController.php";

	$main = new loginController();

	if (isset($_GET['api'])) {
		
		$api = $_GET['api'];
		$username = $_GET['username'];
		$password = $_GET['password'];

		if($api == 'yasminnabilah'){
			$main->index_post($username,$password);
		}else{
			$messege = ['messege'=>'Authentication false'];
			header('Content-Type: Application/json');
			echo json_encode($messege);
		}
	}
?>