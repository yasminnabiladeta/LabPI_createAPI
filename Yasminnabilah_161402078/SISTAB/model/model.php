<?php
include 'koneksi.php';
class model extends koneksi
{
	//inisialisasi awal untuk class biasa disebut instansiasi
	private $conn;

	public function __construct()
	{
		$this->conn = $this->connect();
	}

	public function execute($query)
	{
		return mysqli_query($this->conn, $query);
	}

	public function selectAll()
	{
		$query = "select * from data";
		return $this->execute($query);
	}

	// public function selectMhs($nim){
	// 	$query = "select * from tbl_mhs where nim='$nim'";
	// 	return $this-> execute($query);
	// }

	// public function updateMhs($nim , $nama_mhs, $pwd_mhs, $tgl_lahir, $jk){
	// 	$query = "update tbl_mhs set nim='$nim', nama_mhs='$nama_mhs', pwd_mhs ='$pwd_mhs', tgl_lahir='$tgl_lahir', jk='$jk' where nim='$nim' ";
	// 	return $this->execute($query);
	// }

	// public function deleteMhs($nim){
	// 	$query = "delete from tbl_mhs where nim='$nim' ";
	// 	return $this->execute($query);
	// }


	// public function insertMhs($nim , $nama_mhs, $pwd_mhs, $tgl_lahir, $jk){
	// 	$query = "insert into tbl_mhs values ('$nim', '$nama_mhs', '$pwd_mhs', '$tgl_lahir', '$jk')";
	// 	return $this-> execute($query);
	// }

	public function fetch($var)
	{
		return mysqli_fetch_array($var);
	}

	//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
	public function __destruct()
	{ }
}
