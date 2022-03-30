<?php 
	$DB_HOST = 'localhost';
	$DB_USER = 'mittel92_mit';
	$DB_PASS = '@mit123!';
	$DB_NAME = 'mittel92_mit';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>