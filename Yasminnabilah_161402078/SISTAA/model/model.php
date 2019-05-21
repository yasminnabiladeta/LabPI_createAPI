<?php
	include "koneksi.php";
	class model extends koneksi{
		private $conn;

		public function __construct(){
			$this -> conn = $this->connect();
		}
		public function execute($query){
			return mysqli_query($this->conn, $query);
		}

		public function selectAll($table){
			$query = "select * from ".$table;
			return $this -> execute($query);
		}

		public function selectwhere($table, $field){
			$fieldstring ="";
			foreach ($field as $key => $value){
				$fieldstring .= $key." = '".$value."' AND ";
			}
			$field = mb_substr($fieldstring, 0, -4);
			$query = "SELECT * from ".$table." WHERE ".$field;
			return $this -> execute($query);
		}

		public function fetch($var){
			return mysqli_fetch_array($var, MYSQLI_ASSOC);
		}
		
		public function __destruct(){

		}
	}
?>