<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "db_portal";

	try{
		$db_con = new PDO("mysql:host={$host};dbname={$database}",$user,$pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

	
?>