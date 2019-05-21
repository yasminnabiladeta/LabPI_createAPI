<?php
//include class model
include "model/model.php";

class controller
{
	//variabel public
	public $model;

	//inisialisasi awal untuk class
	function __construct()
	{
		$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model
	}

	function index()
	{
		// $data = $this -> model -> selectAll(); //pada class ini (controller), akses variabel model, akses fungsi selectAll (kalo bingung lihat di class model ada fungsi selectAll)
		include "view/login_view.php"; // memanggil view.php pada folder view
	}

	public function login()
	{
		$apiAuth = "yasminnabilah";
		$username = $_POST['username'];
		$password = $_POST['password'];

		$url = "http://localhost/sistaa/index.php?username=".$username."&password=".$password."&api=".$apiAuth;
		$json = file_get_contents($url);
		$data = json_decode($json,true);
		include 'view/data_user.php';
	}

	function __destruct()
	{ }
}
