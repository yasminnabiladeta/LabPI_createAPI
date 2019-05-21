<?php
//include class controller
include "controller/controller.php";

//variabel main merupakan objek baru yang dibuat dari class controller
$main = new controller();

//kondisi untuk menampilkan halaman web yang diminta
if (isset($_GET['submit'])) { //kondisi untuk mengakses halaman edit
	$main->login();
}else { //kondisi untuk mengakses halaman edit
	$main->index();
}

