<?php
	include "model/model.php";

	class loginController{
		public $model;

		function __construct(){
			$this->model = new model();
		}

		function index_post($username, $password){
			$data = $this->model->selectwhere('user',['username'=>$username, 'password'=>$password]);
			$row = $this->model->fetch($data);
			if($row != null){
				$dataUser = $this->model->selectwhere('data',['username'=>$row['username']]);
				$rowUser = $this->model->fetch($dataUser);
				header('Content-Type: application/json');
				echo json_encode($rowUser);
			}
		}

		function __destruct(){

		}
	}
?>