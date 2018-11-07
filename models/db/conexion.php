<?php
include(RUTA.'/lib/adodb5/adodb.inc.php');
class conect{
	private $db;
	public function conect(){
		if($_SERVER['SERVER_NAME'] == "localhost"){
			
			$drive="mysql";
			$host="localhost";
			$user="root";
			$pass="abstergo";
			$database="ambionis_db";
		}else{
			$drive="mysql";
			$host="localhost";
			$user="root";
			$pass="abstergo";
			$database="ambionis_db";		
		}
		
		$db = NewADOConnection($drive);
		$db->Connect($host,$user,$pass,$database);
		return $db;
	}
}	
?>