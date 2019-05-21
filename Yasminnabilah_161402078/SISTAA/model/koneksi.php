<?php
class koneksi{
	public function connect(){
		$host = "localhost";
		$username = "root";
		$password = "";
		$db_name = "ip_webservice1";

		$connection = mysqli_connect($host, $username, $password, $db_name);
		return $connection;
	}
}
?>